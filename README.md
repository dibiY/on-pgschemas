# Laravel PGSchema

With this package you can create, switch and drop postgresql schemas
easily. This is very useful when you are working with multi-tenants
applications.

## Installation

1. Use composer to add the package into your project
using
`composer require dibiy/onpgschemas:dev-master`

2. Add 'Onpgschemas\SchemasServiceProvider' to your app.php file in the
services providers section.
3. Add 'Onpgschemas' => 'Onpgschemas\Facades\Onpgschemas' into the aliases
section

## Usage

Assuming that you have your db configuration ready, meaning that
your default connection is 'pgsql' and your pgsql credentials
are setted in the usual way, you can use the next functions:

### Create new Schema

`Onpgschemas::create($schemaName)`

### Switch to Schema

`Onpgschemas::switchTo($schemaName)`

if switchTo is call without arguments, it switches to the public
schema (default)

### Drop Schema

`Onpgschemas::drop($schemaName)`

### Migrate Schema

`Onpgschemas::migrate($schemaName, args[])`

For example create a migrations in a custom path:
`php artisan migrate:make create_dogs_table --create=dogs --path=database/migrations/foo`

Then you can migrate some schema using this path
`PGSchema::migrate($schemaName, ['--path' => 'database/migrations/foo'])`

## Multi-tenancy Example (SaaS)

Checkout this repo https://github.com/dibiY/onpgschemas
In the handlers folder you can find the code that contains calls to
the package.


## Laravel version

Current package version works for Laravel 5/6/7/8.
