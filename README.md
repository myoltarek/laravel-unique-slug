# Laravel Simple Unique Slug Generator
A unique slug generator for laravel

## Instalation
```sh
composer require tarek/laravel-unique-slug
```

## Use from controller

### import facades
```php
use Tarek\LaravelUniqueSlug\Facades\UniqueSlug;
```

```php
UniqueSlug::generate(User::class,'john doe','name');
//john-doe

//After creating a new user with name john doe then again hit
UniqueSlug::generate(User::class,'john doe','name');
//john-doe-1
```


### publish configuration
```sh
php artisan vendor:publish "tarek/laravel-unique-slug"
```
## Contribution
Your are open to create any pull request.
