# Chart Using ConsoleTV

[Laravel Ajax ConsoleTvs Charts Tutorial](https://www.itsolutionstuff.com/post/laravel-ajax-consoletvs-charts-tutorialexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
composer require consoletvs/charts
php artisan make:chart UserLineChart Chartjs
php artisan tinker
factory(App\User::class, 200)->create();
```

### Related Web Address
* [https://github.com/ConsoleTVs/Charts](https://github.com/ConsoleTVs/Charts)
