## Setup Environment
after 'setup:env',	'deploy:setup'
after 'deploy:setup', 'setup:chmod_releases'
after 'deploy:setup', 'setup:add_shared_resources'

## Deploy code
after 'deploy:code',		'deploy:update_code'
after 'deploy:update_code',	'deploy:symlink_shared'
after 'deploy:code',		'deploy:change_permissions'
after 'deploy:update_code',	'deploy:cleanup'
after 'deploy:update_code',	'deploy:create_symlink'