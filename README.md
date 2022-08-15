# Introduction
This package is an open-source alternative for `spatie/laravel-ray`. Currently, it is still in development.
Some basic usage such as logging is already implemented.

## Installation Guide
If you already downloaded the [XRay-Server](https://github.com/Flabib/XRay-Server), you can install this package to an existing Laravel project by doing the follwing:

1. Install the `flabib/xray` package by running:
```bash
composer require flabib/xray
```

2. Add the `\Flabib\XRay\XRayServiceProvider::class` to your `config/app.php` file:
```php
<?php

return [
    'providers' => [
        \Flabib\XRay\XRayServiceProvider::class,
    ],
];
```

3. Publish the configuration by running `php artisan vendor:publish` and select the `\Flabib\XRay\XRayServiceProvider`.

By default, no extra configuration is needed to run the package. You can use it simply by using `xray(...$args)`. Enjoy the package.