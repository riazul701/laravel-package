# Database Backup

[Laravel Database Backup using Laravel Backup Package](https://www.itsolutionstuff.com/post/laravel-5-database-backup-using-laravel-backup-packageexample.html)

### Composer and Artisan Commands
```shell script
composer create-project --prefer-dist laravel/laravel blog
composer require spatie/laravel-backup
php artisan vendor:publish --provider="Spatie\Backup\BackupServiceProvider"
# Check backup file in "storage/app/backupfile" directory
php artisan backup:run
```
