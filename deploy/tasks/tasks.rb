# Tasks
namespace :setup do

	desc "Set right permissions to the releases directory"
	task :chmod_releases do
		run "chmod 755 #{releases_path}"
	end

	desc "Add shared resources"
	task :add_shared_resources do
		run "mkdir -p #{shared_path}/config"
		run "mkdir -p #{shared_path}/content/uploads"
		system "scp wp-config-sample.php #{user}@#{domain}:#{shared_path}/config/wp-config-symlink.php"
		system "scp .htaccess-sample #{user}@#{domain}:#{shared_path}/config/htaccess-symlink"
		system "scp robots-sample.txt #{user}@#{domain}:#{shared_path}/config/robots-symlink.txt"
		run "find #{shared_path} -type d | xargs chmod 755"
		run "find #{shared_path} -type f | xargs chmod 644"
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

	desc "Change permissions"
	task :change_permissions do
		run "find #{current_path}/content/themes/#{application}/ -type f | xargs chmod 644"
		run "find #{current_path}/content/themes/#{application}/ -type d | xargs chmod 755"
	end

end
