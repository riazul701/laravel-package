# Modular Structure

[Laravel 5 - Create modular structure application example using L5Modular package](https://www.itsolutionstuff.com/post/laravel-5-create-modular-structure-application-example-using-l5modular-packageexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
composer require artem-schander/l5-modular
php artisan make:module Tags
php artisan serve
```

### Syntax for create module
```shell script
php artisan make:module module_name [--no-migration] [--no-translation]
```

### Run Project
[http://localhost:8000/tags](http://localhost:8000/tags)

### Related Web Address
* [https://github.com/Artem-Schander/L5Modular](https://github.com/Artem-Schander/L5Modular)
