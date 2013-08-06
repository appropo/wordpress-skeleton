# Command interface for Setup
namespace :setup do

	desc "Setup environment"
	task :env do
		puts "Setup environment"
		# Update code on the remote environment server
		# Create a symlink from the latest release to the current-directory
		# Symlink the shared directory
		# Cleanup old revisions
	end

end

# Command interface for Deployment
namespace :deploy do

	# Code
	desc "Deploy code"
	task :code do
		puts "Deploy code..."
		# Update code on the remote environment server
		# Create a symlink from the latest release to the current-directory
		# Symlink the shared directory
		# Cleanup old revisions
	end

	# Content
	desc "Deploy media"
	task :media do
		puts "Deploy media..."
		# Scp the media folder recursively from the local development machine to the local machine
	end	

	desc "Migrate database and seed configuration data"
	task :db do
		puts "Migrate database and seed configuration data"
		# Dump local configuration tables
		# Dump local schema
		# Scp the dumpfiles to the remote environment server
		# Drop all remote tables
		# Import dumpfile in remote database
	end	

	# Configuration
	desc "Migrate configuration"
	task :config do
		puts "Deploy configuration..."
		# Scp configuration files from the local machine to the remote environment server
		# Modify the configuration files accordingly
	end	

end

# Command interface for Integration
namespace :integrate do

	# Content
	desc "Integrate media"
	task :media do
		puts "Integrate media..."
		# Scp the media folder recursively from the environment server to the local development machine
	end

	desc "Integrate user generated data"
	task :db do
		printf "  * Integrate user generated data from #{environment}\n"
		# Dump database snapshot on the remote environment server
		# Scp the dumpfile to the local development machine
		# Truncate local database
		# Migrate local database
	end

end
