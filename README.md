# Kanekes
Kanekes is one of laravel base theme for bantenprov application

## How to install
```
$ composer create-project bantenprov/kanekes "dev-master"
```

### Update config/app.php

```php

// config/app.php

'providers' => [
    '...',
    Skydiver\LaravelMaterializeCSS\MaterializeCSSServiceProvider::class,
    Eusonlito\LaravelMeta\MetaServiceProvider::class,
];

'aliases' => [
    '...',
    'MaterializeCSS' => Skydiver\LaravelMaterializeCSS\MaterializeCSS::class,
    'Meta'    => Eusonlito\LaravelMeta\Facade::class,
];

## Feature:
- Materialize from [skydiver/laravel-materialize-css](https://github.com/skydiver/laravel-materialize-css).
- Metatag from [eusonlito/laravel-Meta](https://github.com/eusonlito/laravel-Meta).
- Schema.org from [spatie/schema-org](https://github.com/spatie/schema-org).
