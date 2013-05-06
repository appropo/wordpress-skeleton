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
2. clone this skeleton to your development project's directory
3. clone wp-deployment-stack
4. copy wp-config-sample.php to wp-config.php and modify it according to your local development environment and your project's working title
5. create local shared directory
6. init and update git submodules
7. create your custom theme directory
8. your project's initial git commit