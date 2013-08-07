# wordpress-cli

A slim command-line interface to support the wordpress development process.

## TODO
- make the run-script look like a binary (like artisan)

## What it is
This tool is supposed to automate specific tasks in a wordpress development process. It provides helpful commands to use while developing locally. Tasks regarding deployment and integration of your wordpress code and data are supported by the [wordpress-deployment-stack](https://github.com/moritzhaller/wordpress-deployment-stack).

## What it's not
This project is intended to support the local wordpress development-process. It is not ment to manage a running wordpress installation. If you are looking for a great tool to do so, take a look at the [wp-cli](https://github.com/wp-cli/wp-cli) project.

## Concepts
When developing web-applications with database persistance there are a few concepts you should be familiar with. This tool applies to the concepts and practices mentioned in the article [wordpress database](www.appropo.net/blog/wordpress-database).

## Assumptions
Assumptions on how the wordpress project is structured

## Getting startet
To use this wordpress cli type the following in your shell from the wordpress root: `php wpcli/scritp.php <command> <args>`

### Command reference
- `migrate`
- `seed config`
- `seed ugd`
- `dump schema`
- `dump config`
- `dump ugd`