set :application, "AMEE API Documentation"

set :scm, :none
set :repository,  "./src/doc/html-chunk"
set :deploy_via, :copy
set :copy_compression,    :gzip

set :user,  'rails'
set :deploy_to, '/data/www/documentation'

role :web, "blizzard.amee.com"
role :app, "blizzard.amee.com"

namespace :deploy do
  [:restart, :start, :stop].each do |t|
    task t, :roles => :app do ; end
  end
end