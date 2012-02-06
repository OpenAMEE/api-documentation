set :user,  'rails'
set :deploy_to, '/var/www/documentation_v2'
set :use_sudo, false

role :web, "www-test.amee.com"
role :app, "www-test.amee.com"
