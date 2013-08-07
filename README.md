# Wordpress Skeleton

_This Wordpress Skeleton is both, Wordpress and Workflow_. It is based on Mark Jaquith's [wordpress skeleton](https://github.com/markjaquith/WordPress-Skeleton), customized to my needs in terms of deployment and environment specific configuration.

## Assumptions
* Third party software and system files live in self-contained submodules.
* User generated data and environment specific configuration won't be managed by a VCS.
* Capistrano is used for deployment.
* There is a build process for the frontend-theme (e.g. grunt).

## Possible Workflow
- Setup your localhost (e.g. vhost, database, etc.)
- Clone this (shallow) repository: `$ git clone (--depth 1) --branch master https://github.com/moritzhaller/wordpress-skeleton.git working-title`
- Checkout an developmet branch (or sth. else, depending on your branching-model): `$ git checkout -b development`
- Change the remote origin to remote upstream by typing `$ git config -e` and modifying the appropriate lines (this is for merging upstream changes later on)
- Add your development team's remote SCM server as origin: `$ git remote add origin ssh://git@scm.your-company.com/`
- Initialize and update the submodule(s): `$ git submodule init && git submodule update`
- Copy all environment specific files to become their git-ignored twins:
    - `wp-config-sample.php` -> `wp-config.php`
    - `.htaccess-sample` -> `.htaccess`
    - `robots-sample.txt` -> `robots.txt`
- Create a place for your shared resources: `$ mkdir -p shared/content/uploads`
- Run through the wordpress installation process by hitting `http://working-title.dev/wp/wp-admin` in your browser
- Bring in the theme bootstrap `$ cd ./content/themes && wget https://github.com/moritzhaller/wordpress-theme-bootstrap/archive/master.zip && unzip master.zip && mv wordpress-theme-bootstrap working-title && rm .gitkeep master.zip`
- Push it: `$ git add . && git commit -m 'Initiate project' && git push origin development`
- Activate the theme in the wordpress admin panel
- (Create a local project-wiki, push it to a bare repository on your SCM-server and add it as a submodule to the project)
- Start implementing features...
