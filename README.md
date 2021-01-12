# URL Shortener

[How to create url shortener using Laravel?](https://www.itsolutionstuff.com/post/how-to-create-url-shortener-using-laravelexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
php artisan make:migration create_short_links_table
php artisan migrate
php artisan make:model ShortLink
php artisan serve
composer require laravel/helpers
```

### Run Project
[http://localhost:8000/generate-shorten-link](http://localhost:8000/generate-shorten-link)

### Related Web Address
* [After upgrading Laravel from 5.6 to 6.0, Call to undefined str_random() function not working](https://stackoverflow.com/questions/58163406/after-upgrading-laravel-from-5-6-to-6-0-call-to-undefined-str-random-function)
* [https://laravel.com/docs/master/helpers#method-str-random](https://laravel.com/docs/master/helpers#method-str-random)
