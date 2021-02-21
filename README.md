# Laravel PGSchema

With this package you can create, switch and drop postgresql schemas
easily. This is very useful when you are working with multi-tenants
applications.

## Installation

1. Use composer to add the package into your project
using
`composer require dibi-y/on-pgschemas:dev-master`

2. Add 'PGSchemas\SchemasServiceProvider' to your app.php file in the
services providers section.
3. Add 'PGSchema' => 'PGSchemas\Facades\PGSchema' into the aliases
section

## Usage

Assuming that you have your db configuration ready, meaning that
your default connection is 'pgsql' and your pgsql credentials
are setted in the usual way, you can use the next functions:

### Create new Schema

`PGSchema::create($schemaName)`

### Switch to Schema

`PGSchema::switchTo($schemaName)`

if switchTo is call without arguments, it switches to the public
schema (default)

### Drop Schema

`PGSchema::drop($schemaName)`

### Migrate Schema

`PGSchema::migrate($schemaName, args[])`

For example create a migrations in a custom path:
`php artisan migrate:make create_dogs_table --create=dogs --path=database/migrations/foo`

Then you can migrate some schema using this path
`PGSchema::migrate($schemaName, ['--path' => 'database/migrations/foo'])`

## Multi-tenancy Example (SaaS)

Checkout this repo https://github.com/dibiY/on-pgschemas
In the handlers folder you can find the code that contains calls to
the package.


## Laravel version

Current package version works for Laravel 5/6/7/8.
