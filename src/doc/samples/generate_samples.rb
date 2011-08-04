#!/usr/bin/env ruby

require 'rubygems'
require 'amee'

PROFILE_UID = 'YLLIKH73BDYS'

formats = [:json, :xml]

conf = YAML.load_file('amee.yml').symbolize_keys

connections = {
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

def get_item_uid(connection, body)
  category = AMEE::Profile::Category.parse(connection, body, {})
  category.items[0][:path]
end    

formats.each do |format|
  uid = nil
  begin
    # Get drill
    save 'fuel_drill', format, connections[format].get('/data/transport/defra/fuel/drill?fuel=petrol').body
    # Get a profile category with items
    save 'get_profile_category', format, connections[format].get('/profiles/YLLIKH73BDYS/transport/defra/fuel').body
    # Get an existing profile item
    save 'get_profile_item', format, connections[format].get('/profiles/YLLIKH73BDYS/transport/defra/fuel/F0638HOIFC1H').body
    # Create a new profile item
    response = connections[format].post('/profiles/YLLIKH73BDYS/transport/defra/fuel', :dataItemUid => '19B311DDF0B1', :volume => 500, :representation => 'full', :name => "#{format}_example", :startDate => '2011-01-05T00:00:00+00:00')
    save 'create_profile_item', format, response.body
    uid = get_item_uid(connections[format], response.body)
    # Update a profile item
    save 'update_profile_item', format, connections[format].put("/profiles/YLLIKH73BDYS/transport/defra/fuel/#{uid}", :volume => 1000, :representation => 'full').body
  ensure
    # Clear up
    connections[format].delete("/profiles/YLLIKH73BDYS/transport/defra/fuel/#{uid}")
  end
end