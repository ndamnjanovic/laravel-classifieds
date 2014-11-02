laravel-classifieds
===================

Simple classifieds application written in Laravel Framework

Contributions are welcome!

## Installation

- Clone the repository
- Install dependencies (from console)
    - run ```composer install```
- To set permissions: ```chmod -R 777 app/storage && chmod -R 777 public/uploads```
- Create database: ```mysqladmin -u root -p password YOUR PASSWORD create NAME_FROM_DATABASE_CONFIG```
- Run migrations: ```php artisan migrate```
- Run seeder: ```php artisan db:seed```

Note:
css files are missing, but you can get basic layout, by using Twitter Bootstrap 3, which is used in views pages.
