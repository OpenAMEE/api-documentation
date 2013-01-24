set :user,  'rails'
set :deploy_to, '/var/www/documentation'
set :use_sudo, false

role :web, "blog.amee.com"
role :app, "blog.amee.com"
