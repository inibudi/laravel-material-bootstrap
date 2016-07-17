# laravel-material-bootstrap
Material Bootstrap CSS Framework for Laravel 5.  For more information see the guys at [mdbootstrap.com] (http://mdbootstrap.com/)

## Installation

* Require this package in your composer.json and run composer update.
```
    "nnagroup/laravel-material-bootstrap": "dev-master"
```

* After updating composer, add ServiceProvider to the providers array in config/app.php
```php
    nnagroup\LaravelMaterialBootstrap\MaterialBootstrapCSSServiceProvider::class,
```

* Add Facade to the aliases array in config/app.php
```php
	'MaterialBootstrapCSS' => nnagroup\LaravelMaterialBootstrap\MaterialBootstrap::class,
```

*  Then publish the package's assets to public folder:
```
    $ php artisan vendor:publish --tag=materialbootstrap --force
```

## Updates
You can re-publish the assets automatically when composer updated the package:

* In your composer.json, go to **scripts** > **post-update-cmd** section, add the next line:
```
    "php artisan vendor:publish --tag=materialbootstrap --force"
```

* The code will look similar to:
```
    "post-update-cmd": [
        "php artisan optimize",
        "php artisan vendor:publish --tag=materialbootstrap --force"
    ],
```

## Usage

* **addMaterialBootstrap()**
```php
    {!! MaterialBootstrap::addMaterialBootstrap() !!}
```
