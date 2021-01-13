# Datatables Dropdown Filter

[Laravel Datatables Filter with Dropdown Example](https://www.itsolutionstuff.com/post/laravel-datatables-filter-with-dropdown-exampleexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
composer require yajra/laravel-datatables-oracle
php artisan make:migration add_status_column
php artisan migrate
php artisan tinker
factory(App\User::class, 200)->create();
php artisan serve
```

### Run Project
[http://localhost:8000/users](http://localhost:8000/users)
