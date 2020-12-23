# Typeahead Search

[Laravel Typeahead Search Tutorial](https://www.itsolutionstuff.com/post/laravel-typeahead-search-tutorialexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
php artisan make:migration create_items_table
php artisan migrate
php artisan serve
```

### Error and Solution
**Error Message:** 
Object of class Symfony\Component\HttpFoundation\InputBag could not be converted to string

**Solution:** 
[ParameterBag could not be converted to string laravel 5.5](https://stackoverflow.com/questions/48007222/parameterbag-could-not-be-converted-to-string-laravel-5-5)

You are probably doing something like $request->query

$request->query is an object of type ParameterBag which contains the Query Params for GET Requests.

You should rather use $request->get('query') in these circumstances

### Run Project
[http://localhost:8000/search](http://localhost:8000/search)
