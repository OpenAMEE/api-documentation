set :stages, %w(staging production)
require "capistrano/ext/multistage"

set :application, "AMEE API Documentation"

set :scm, :none
set :repository,  "./src/doc/php-chunk"
set :deploy_via, :copy
set :copy_compression,    :gzip

namespace :deploy do
  [:restart, :start, :stop].each do |t|
    task t, :roles => :app do ; end
  end
end
