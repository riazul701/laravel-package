# Adminer

[Install Adminer In PHP Laravel](https://www.itsolutionstuff.com/post/-install-adminer-in-php-laravel-5example.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
composer require onecentlin/laravel-adminer
php artisan vendor:publish --provider="Onecentlin\Adminer\ServiceProvider"
php artisan serve
```

### Run Project
[http://localhost:8000/adminer](http://localhost:8000/adminer)
