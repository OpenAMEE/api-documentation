set :stages, %w(staging production)
require "capistrano/ext/multistage"

set :application, "AMEEconnect Documentation"

set :scm, :none
set :repository,  "./dist/php-chunk"
set :deploy_via, :copy
set :copy_compression,    :gzip

after 'deploy:update_code', 'deploy:cleanup'

namespace :deploy do
  [:restart, :start, :stop].each do |t|
    task t, :roles => :app do ; end
  end
end
