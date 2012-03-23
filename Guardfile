# A sample Guardfile
# More info at https://github.com/guard/guard#readme

guard 'shell' do
  watch(/src\/doc\/(.*).xml/) do |m|
    `make html-chunk`
  end
end
