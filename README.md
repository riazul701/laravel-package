# API Testing Tool

[API Testing Tools in Laravel](https://www.itsolutionstuff.com/post/api-testing-tools-in-laravel-5example.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
composer require asvae/laravel-api-tester
php artisan vendor:publish --provider="Asvae\ApiTester\ServiceProvider"
php artisan serve
```

### Run Project
[http://localhost:8000/api-tester](http://localhost:8000/api-tester)
