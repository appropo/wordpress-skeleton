TODO:
- <del>define custom content directory according to environment. as of now there is a problem with wp-config.php being a symlink.</del>
- <del>Make .htaccess and robots.txt environment dependent by adding them to .gitignore and ship them with a sample-postfix.</del>

# Wordpress Skeleton

> "This is simply a skeleton repo for a WordPress site. Use it to jump-start your WordPress site repos, or fork it and customize it to your own liking!" - Mark Jaquith

This is a fork from Mark Jaquith's wordpress skeleton at [https://github.com/markjaquith/WordPress-Skeleton], customized to my needs regarding deployment and a few environment specifics.

## Assumptions
* WordPress as a Git submodule in `/wp/`
* Custom content directory in `/content/` (cleaner, and also because it can't be in `/wp/`)
* `wp-config.php` in the root (because it can't be in `/wp/`)
* All writable directories are symlinked to similarly named locations under `/shared/`.

## Getting started
1. setup your localhost (vhost, database, ...)
2. clone this skeleton to your development project's directory `$ git clone --depth 1 https://github.com/moritzhaller/wordpress-skeleton.git working-title`
3. copy wp-config-sample.php to wp-config.php and modify it according to your local development environment and your project's working title `$ cd working-title && cp wp-config-sample.php wp-config.php`.
4. Do the same with the .htacces-sample and the robots.txt
5. create local shared directory `$ mkdir shared`
6. init and update git submodules
	1. Initialize: `git submodule init`
	2. Update: `git submodule update`
7. navigate to working-title.dev/wp/wp-admin/install.php and follow installation instructions
8. Change the remote origin to your project's scm repository `$ git config -e`
9. Add another remote repo for mergin upstream changes later `$ git remote add upstream https://github.com/moritzhaller/wordpress-skeleton.git`
10. start developing your custom theme, api, or whatever your need to do
