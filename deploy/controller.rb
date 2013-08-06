# Hooks
# on :before,				'check:env'

## Setup Environment
after 'setup:env',	'deploy:setup'
after 'deploy:setup', 'setup:chmod_releases'
after 'deploy:setup', 'setup:add_shared_resources'

## Deploy code
after 'deploy:code',		'deploy:update_code'
after 'deploy:update_code',	'deploy:create_symlink'
after 'deploy:update_code',	'deploy:symlink_shared'
after 'deploy:update_code',	'deploy:cleanup'

## Deploy media
after 'deploy:media',	'deploy:upload_media'

## Deploy database
after 'deploy:db',		'deploy:migrate_db'

## Deploy configuration
after 'deploy:config',	'deploy:upload_config'

## Integrate media

## Integrate database
after 'integrate:db',	'integrate:dump_snapshot'
after 'integrate:db',	'integrate:download_dumpfile'
after 'integrate:db',	'integrate:truncate_local_db'
after 'integrate:db',	'integrate:migrate_local_db'