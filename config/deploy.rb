set :application, "AMEE API Documentation"

set :scm, :none
set :repository,  "./src/doc/html-chunk"
set :deploy_via, :copy
set :copy_compression,    :gzip

set :user,  'deploy'
set :deploy_to, '/var/www/apps/documentation'
set :use_sudo, false

role :web, "flood.amee.com"
role :app, "flood.amee.com"

namespace :deploy do
  [:restart, :start, :stop].each do |t|
    task t, :roles => :app do ; end
  end
end
