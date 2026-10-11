# Vivala Laravel REST API

Vivala Laravel REST API is a lightweight utility package for building structured REST endpoints in Laravel applications.

It provides:

- API resource routing through `ApiRoute`.
- Base API controllers and models.
- Consistent JSON response helpers.
- Request parsing for filters, ordering, pagination, and related resources.
- API-focused exception handling.
- Laravel framework compatibility from legacy Laravel versions through Laravel 13 constraints.

## Installation

Require the package from the Vivala GitHub repository:

```bash
composer require baidou5/laravel-rest-api:^13.0
```

For VCS-based installation, add the repository to `composer.json`:

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/baidou5/laravel-rest-api",
            "no-api": true
        }
    ]
}
```

## Laravel Setup

The package exposes a Laravel service provider and an `ApiRoute` facade:

```php
Vivala\RestAPI\Providers\ApiServiceProvider::class
```

```php
'ApiRoute' => Vivala\RestAPI\Facades\ApiRoute::class
```

If package discovery is enabled, Laravel can discover these automatically from the package metadata.

## Basic Usage

```php
use Vivala\RestAPI\ApiResponse;

return ApiResponse::make('Loaded successfully', [
    'items' => $items,
]);
```

```php
ApiRoute::group(['namespace' => 'App\Http\Controllers'], function () {
    ApiRoute::get('purchased-module', [
        'as' => 'api.purchasedModule',
        'uses' => 'HomeController@installedModule',
    ]);
});
```

## Compatibility

The current package constraint allows:

```json
"laravel/framework": "5.6.*|5.7.*|5.8.*|6.*|7.*|8.*|9.*|10.*|^11.0|^12.0|^13.0"
```

Vivala currently uses this package as part of its Laravel modernization path.

## License

Released under the MIT license.
