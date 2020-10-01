# Import Export Excel & CSV File

[Laravel 7/6 Import Export Excel & CSV File Tutorial](https://www.itsolutionstuff.com/post/laravel-6-import-export-excel-csv-file-tutorialexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
composer require maatwebsite/excel
php artisan migrate
php artisan tinker
factory(App\User::class, 20)->create();
php artisan make:import UsersImport --model=User
php artisan make:export UsersExport --model=User
php artisan make:controller MyController
php artisan serve
```

### Run Project
[http://localhost:8000/importExportView](http://localhost:8000/importExportView)

### Related Web Address
* [GitHub Reporsitory: Maatwebsite/Laravel-Excel](https://github.com/Maatwebsite/Laravel-Excel)
