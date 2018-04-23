# GNU Terry Pratchett header for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/BWibrew/laravel-gnu-terry-pratchett.svg?style=flat-square)](https://packagist.org/packages/BWibrew/laravel-gnu-terry-pratchett)
[![CircleCI](https://img.shields.io/circleci/project/github/BWibrew/laravel-gnu-terry-pratchett.svg?style=flat-square)](https://circleci.com/gh/BWibrew/laravel-gnu-terry-pratchett)
[![StyleCI](https://styleci.io/repos/130105778/shield?branch=master)](https://styleci.io/repos/130105778)
[![Codacy grade](https://img.shields.io/codacy/grade/89db4eaa941f4b65823aea3a84b758b4.svg?style=flat-square)](https://www.codacy.com/app/BWibrew/laravel-gnu-terry-pratchett)
[![Codacy coverage](https://img.shields.io/codacy/coverage/89db4eaa941f4b65823aea3a84b758b4.svg?style=flat-square)](https://www.codacy.com/app/BWibrew/laravel-gnu-terry-pratchett)

> "A man is not dead while his name is still spoken."
> \- Going Postal, Chapter 4 prologue

On the Discworld there is a sort of... internet. This is a series of semaphore towers which span the world and transmit 
messages in a way that's similar to our world's old telegraph system.

This middleware package uses the idea from this [Reddit thread](https://www.reddit.com/r/discworld/comments/2yt9j6/gnu_terry_pratchett/) and the numerous other packages and plugins that do similar things.

This middleware package adds the header `X-Clacks-Overhead: GNU Terry Pratchett` to every HTTP response which passes
through the middleware.

## Installation

Install using Composer by running:
```bash
composer require bwibrew/laravel-gnu-terry-pratchett
```

Add the `GnuPratchettMiddleware` class to one of the middleware properties of your `app/Http/Kernel.php` file.
```php
<?php
// app/Http/Kernel.php
namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // ...
        \BWibrew\GnuPratchett\GnuPratchettHeader::class,
    ];
}
```
