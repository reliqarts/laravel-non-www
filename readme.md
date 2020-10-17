### Deprecation Notice
This package has been discontinued and its features absorbed by [laravel-common](http://https://github.com/reliqarts/laravel-common) as of version [5.5.0](https://github.com/reliqarts/laravel-common/releases/tag/v5.5.0) of that package.

---

# Laravel Non-WWW

Tiny Laravel middleware to redirect www requests to non-www counterparts.

[![Built For Laravel](https://img.shields.io/badge/built%20for-laravel-red.svg?style=flat-square)](http://laravel.com)
[![License](https://poser.pugx.org/reliqarts/laravel-non-www/license?format=flat-square)](https://packagist.org/packages/reliqarts/laravel-non-www)
[![Latest Stable Version](https://poser.pugx.org/reliqarts/laravel-non-www/version?format=flat-square)](https://packagist.org/packages/reliqarts/laravel-non-www)
[![Latest Unstable Version](https://poser.pugx.org/reliqarts/laravel-non-www/v/unstable?format=flat-square)](//packagist.org/packages/reliqarts/laravel-non-www)

## What?

Middleware for Laravel, to redirect WWW to non-WWW

## Installation & Use

Install via composer:

```php
composer require reliqarts/laravel-non-www
```

Use middleware in Kernel. eg.

```php
'web' => [
    // ...

    \ReliqArts\NonWWW\Http\Middleware\NonWWW::class,

    // ...
],
```

All done! :beers:
