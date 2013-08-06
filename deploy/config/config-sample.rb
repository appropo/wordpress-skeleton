# Configuration
set :application, '%WORKING-TITLE'
set :repository, '%REPOSITORY'
set :scm, :git
set :copy_exclude, [".git", ".gitmodules", ".DS_Store", "README.md", ".gitignore", "wiki", "wp-config-sample.php", ".htaccess-sample", "robots-sample.txt"]
set :keep_releases, 5
set :environment, false
set :git_enable_submodules, 1
set :use_sudo, false
set :deploy_via, :remote_cache
default_run_options[:pty] = true