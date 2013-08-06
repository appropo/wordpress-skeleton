# Command interface for Setup
namespace :setup do

	desc "Setup environment"
	task :env do
		puts "Setup environment..."
	end

end

# Command interface for Deployment
namespace :deploy do

	# Code
	desc "Deploy code"
	task :code do
		puts "Deploy code..."
	end

end