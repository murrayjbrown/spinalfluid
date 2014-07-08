# Set character set encoding
encoding = 'utf-8'

# Require any additional compass plugins here.
add_import_path "bower_components/foundation/scss"

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "stylesheets"
sass_dir = "sass"
images_dir = "images"
javascripts_dir = "javascripts"

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
# line_comments = false

sass_options = {:cache => false}

# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
preferred_syntax = :scss

require 'fileutils'
on_stylesheet_saved do |file|
  if File.exists?(file) && File.basename(file) == "app.css"
    puts "moving: #{file} to theme's style.css"
    FileUtils.mv(file, File.dirname(file) + "/../../" + "style.css")
  end
end
