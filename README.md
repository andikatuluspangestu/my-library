<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects. Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Quick Start

1. Clone the repository
2. Run `composer install` to install dependencies
3. Run `composer update` to update dependencies
4. Run `php artisan migrate` to create tables
5. Run `php artisan db:seed` to seed the database

If you can't run `php artisan migrate` or `php artisan db:seed` commands, you can run `php artisan migrate:fresh --seed` to drop all tables and re-run all migrations. This will also seed the database.

If same error occurs, you can run `php artisan migrate:fresh --seed --force` to drop all tables and re-run all migrations. This will also seed the database.

```bash

php artisan migrate:fresh --seed --seeder=CategorySeeder

php artisan migrate:fresh --seed --seeder=RoleSeeder

php artisan migrate:fresh --seed --seeder=UserSeeder

```

7. Run `php artisan serve` to start the local development server

For view the project, open your browser and go to [http://localhost:8000](http://localhost:8000)

8. For login, use the following credentials:

```bash

# Admin
admin - admin

# Client
client - client

```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
