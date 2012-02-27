# A sample Guardfile
# More info at https://github.com/guard/guard#readme

guard 'shell' do
  watch(/src\/doc\/(.*).xml/) do |m|
	Dir.chdir("src") do
      `../tools/book-dist.py --html-chunk`
    end
  end
end
