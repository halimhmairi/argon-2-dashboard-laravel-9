
# laravel 9 CRUD , Role (repository pattern) with Argon 2 (design system)

Basic CRUD , AUTH system and Role mangment system Operation with Laravel 9 and bootstrap 5

![image](https://user-images.githubusercontent.com/26728107/174671637-d92b2c95-2e85-40e6-b11e-0ed242eb6022.png)

## What's this repo about

Simply, it's a basic create, read, update and delete operation with Laravel 9 and NICE UI (<a href="https://demos.creative-tim.com/argon-dashboard/pages/dashboard" target="_blank">argon dashboard</a>). 

## Features

- Role management

- User management

- Account settings 

- Category management

![image](https://user-images.githubusercontent.com/26728107/174672073-ddf03736-6284-4457-b52e-c99020074ef5.png)

## Tech

- BOOTSRAP 5

- LARAVEL 9

- PHP8

- Argon 2


## Requirements

- PHP >= 8.0.0

- PDO PHP Extension

- Mysql 

- Composer >= 2.2.3


# Installation
Just clone the project to anywhere in your computer.
```bash
git clone https://github.com/halimhmairi/argon-2-dashboard-laravel-9.git
``` 

Then do a composer require laravel/ui

```bash
composer require laravel/ui
``` 

Then create a environment file using this command

```bash
cp .env.example .env
``` 

```bash
php artisan key:generate
``` 

Then edit .env file with appropriate credential for your database server. Just edit these two parameter(```DB_USERNAME``` , ```DB_PASSWORD``` ).

and

```bash 
php artisan migrate
``` 

```bash
php artisan db:seed 
``` 

Now you are done.

```bash
php artisan serve
``` 
and open the project on the browser.
## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
