# Laravel Non-WWW

Tiny Laravel 5 middleware to redirect www requests to non-www counterparts.

## What?

Middleware for Laravel 5, to redirect a WWW to non-WWW

## Installation & Use

Install via composer:

```php
composer install reliqarts/laravel-non-www
```

Add service provider:

```php
ReliQArts\NonWWW\NonWWWServiceProvider::class,
```

Use middleware in Kernel. eg.

```php
'web' => [
    // ...

    \NonWWW\Http\Middleware\NonWWW::class,

    // ...
],
```

All done! :beers: