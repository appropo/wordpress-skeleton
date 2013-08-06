# Environments
# Integration
task :integration do
	set :environment, 'integration'
	set :domain     , '%SERVER'
	set :user       , '%SSH-USER'
	set :deploy_to  , '%PATH/TO/DEPLOY'
	set :branch		, 'development'

	role :website, domain, :primary => true
end

# Stage
task :stage do
	set :environment, 'stage'
	set :domain     , '%SERVER'
	set :user       , '%SSH-USER'
	set :deploy_to  , '%PATH/TO/DEPLOY'
	set :branch		, 'master'

	role :website, domain, :primary => true
end

# Production
task :production do
	set :environment, 'production'
	set :domain     , '%SERVER'
	set :user       , '%SSH-USER'
	set :deploy_to  , '%PATH/TO/DEPLOY'
	set :branch		, 'releasd'

	role :website, domain, :primary => true
end