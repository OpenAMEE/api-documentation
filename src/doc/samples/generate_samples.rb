#!/usr/bin/env ruby

require 'rubygems'
require 'amee'

formats = [:xml]

conf = YAML.load_file('amee.yml').symbolize_keys

$connections = {
  :json => AMEE::Connection.new(conf[:server], conf[:username], conf[:password], :ssl => true, :format => :json, :debug => true),
  :xml => AMEE::Connection.new(conf[:server], conf[:username], conf[:password], :ssl => true, :format => :xml, :debug => true)
}

#!/usr/bin/ruby
require 'rubygems'
require 'nokogiri'

XSL = <<-EOXSL
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="xml" encoding="ISO-8859-1"/>
<xsl:param name="indent-increment" select="' '"/>

<xsl:template name="newline">
<xsl:text disable-output-escaping="yes">
</xsl:text>
</xsl:template>

<xsl:template match="comment() | processing-instruction()">
<xsl:param name="indent" select="''"/>
<xsl:call-template name="newline"/>
<xsl:value-of select="$indent"/>
<xsl:copy />
</xsl:template>

<xsl:template match="text()">
<xsl:param name="indent" select="''"/>
<xsl:call-template name="newline"/>
<xsl:value-of select="$indent"/>
<xsl:value-of select="normalize-space(.)"/>
</xsl:template>

<xsl:template match="text()[normalize-space(.)='']"/>

<xsl:template match="*">
<xsl:param name="indent" select="''"/>
<xsl:call-template name="newline"/>
<xsl:value-of select="$indent"/>
<xsl:choose>
<xsl:when test="count(child::*) > 0">
<xsl:copy>
<xsl:copy-of select="@*"/>
<xsl:apply-templates select="*|text()">
<xsl:with-param name="indent" select="concat ($indent, $indent-increment)"/>
</xsl:apply-templates>
<xsl:call-template name="newline"/>
<xsl:value-of select="$indent"/>
</xsl:copy>
</xsl:when>
<xsl:otherwise>
<xsl:copy-of select="."/>
</xsl:otherwise>
</xsl:choose>
</xsl:template>
</xsl:stylesheet>
EOXSL

def save(name, format, body)
  case format
  when :json
    output = JSON.pretty_generate(JSON[body])
    File.open("json/#{name}.js", 'w') { |f| f.puts output }
  when :xml
    xsl = Nokogiri::XSLT(XSL)
    xml = Nokogiri(body)
    File.open("xml/#{name}.xml", 'w') { |f| f.puts xsl.apply_to(xml).to_s }
  end
end

def request(method, path, options = {})
  case method
  when :delete
    response = body = $connections[@format].v3_delete(path)
  when :post
    response = $connections[@format].v3_post(path, options.merge(:returnobj => true))
    body = response.body
  else
    response = body = $connections[@format].send("v3_#{method.to_s}", path, options)
  end
  save method.to_s+path.gsub(/\/[A-Z0-9]{12}/,'/UID').gsub('/','_')+options.to_s, @format, body
  response
end

formats.each do |format|
  @format = format
  uid = nil
  begin
    # Create profile
    response = request :post, '/3/profiles', :profile => true
    profile_uid = response.headers_hash["Location"].match(/\/([A-Z0-9]{12})$/)[1]
    # Get drill
    response = request :get, '/3/categories/DEFRA_transport_fuel_methodology/drill', :fuel => 'petrol'
    data_item_uid = response.match(/<Value>([A-Z0-9]{12})<\/Value>/)[1]
    # Get fuel data item
    request :get, "/3/categories/DEFRA_transport_fuel_methodology/#{data_item_uid}"
    # Do a data calculation
    request :get, "/3/categories/DEFRA_transport_fuel_methodology/#{data_item_uid}", :'values.volume' => 500
    # Create a new profile item
    response = request(:post, "/3/profiles/#{profile_uid}/items", :dataItemUid => data_item_uid, :'values.volume' => 500, :name => "#{@format}_example", :startDate => '2011-01-05T00:00:00+00:00')
    item_uid = response.headers_hash["Location"].match(/\/([A-Z0-9]{12})$/)[1]
    # Get profile with list of used categories
    request :get, "/3/profiles/#{profile_uid};categories"
    # Get a list of items in a profile
    request :get, "/3/profiles/#{profile_uid}/items"
    # Get an existing profile item
    request :get, "/3/profiles/#{profile_uid}/items/#{item_uid};amounts"
    # Update a profile item
    request :put, "/3/profiles/#{profile_uid}/items/#{item_uid}", :'values.volume' => 1000
  ensure
    # Clear up
    request :delete, "/3/profiles/#{profile_uid}/items/#{item_uid}" if item_uid
    request :delete, "/3/profiles/#{profile_uid}" if profile_uid
  end
end