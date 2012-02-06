set :user,  'rails'
set :deploy_to, '/var/www/documentation_v2'
set :use_sudo, false

role :web, "www.amee.com"
role :app, "www.amee.com"
