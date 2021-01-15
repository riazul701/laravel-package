# Datatables Export To PDF

[Laravel Datatables Export to PDF File Example](https://www.itsolutionstuff.com/post/laravel-datatables-export-to-pdf-file-exampleexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
composer require yajra/laravel-datatables-oracle
composer require yajra/laravel-datatables-buttons
php artisan vendor:publish --tag=datatables-buttons
# Note : If you have 32-bit system then install this dependencies
composer require h4cc/wkhtmltopdf-i386 0.12.x
composer require h4cc/wkhtmltoimage-i386 0.12.x
# Note : If you have 64-bit system then install this dependencies
composer require h4cc/wkhtmltopdf-amd64 0.12.x
composer require h4cc/wkhtmltoimage-amd64 0.12.x
# Another package
composer require barryvdh/laravel-snappy
php artisan vendor:publish --provider="Barryvdh\Snappy\ServiceProvider"
php artisan tinker
factory(App\User::class, 200)->create();
php artisan datatables:make Users
php artisan serve
```

### Run Project
[http://localhost:8000/users](http://localhost:8000/users)
