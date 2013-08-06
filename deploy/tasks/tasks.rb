# Helper
namespace :check do

	desc "Check if environment is set"
	task :env do
		if environment == false
			puts 'Please specify an environment. Aborting...'
			exit
		end
	end

end

namespace :setup do

	desc "Set right permissions to the releases directory"
	task :chmod_releases do
		run "chmod 755 #{releases_path}"
	end

	desc "Add shared resources"
	task :add_shared_resources do
		run "mkdir -p #{shared_path}/config"
		run "mkdir -p #{shared_path}/content/uploads"
		run "chmod -R 775 #{shared_path}/content"
		system "scp ../wp-config-sample.php #{user}@#{domain}:#{shared_path}/config/wp-config-symlink.php"
		system "scp ../.htaccess-sample #{user}@#{domain}:#{shared_path}/config/htaccess-symlink"
		system "scp ../robots-sample.txt #{user}@#{domain}:#{shared_path}/config/robots-symlink.txt"
	end

end

namespace :deploy do

	desc "Symlink shared files"
	task :symlink_shared do
		run "ln -nfs #{shared_path}/config/wp-config-symlink.php #{release_path}/wp-config.php"
		run "ln -nfs #{shared_path}/config/htaccess-symlink #{release_path}/.htaccess"
		run "ln -nfs #{shared_path}/config/robots-symlink.txt #{release_path}/robots.txt"
		run "ln -nfs #{shared_path} #{release_path}/shared"
	end

	desc "Upload media files"
	task :upload_media do
		# ...
	end	

	desc "Migrate database"
	task :migrate_db do
		# ...
	end	

	desc "Upload wordpress configuration"
	task :upload_config do
		# ...
	end	

end

namespace :integrate do

	desc "Dump database snapshot on the remote environment server"
	task :dump_snapshot do
		# ...
	end

	desc "Scp the dumpfile to the local development machine"
	task :download_dumpfile do
		# ...
	end	

	desc "Truncate local database"
	task :truncate_local_db do
		# ...
	end	

	desc "Migrate local database"
	task :migrate_local_db do
		# ...
	end	

end
