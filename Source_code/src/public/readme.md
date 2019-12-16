# NEURONATION TASK

Task is completed.

I used Laravel 5.7 MVC framework and OOP Concepts to write my code.
PHP Version: 7.1.3
Mysql Version: 5.7.2

#### Project also hosted live for easy testing
GET Sessions Array
```bash

```

GET Session Detail
```bash

```

You can test this api using Postman,Direct browser or any other service

## Files Included
database design (jpg image)
database sql file
laravel project files

## Database Migrations Location
 src/database/migrations

## Database Seeders(for dummy data) Location
 src/database/seeders

## Models & Controllers
  src/app/Models
  src/app/Controllers

## API Routes
src/routes/api/.php

## Installation

Project is composed in Docker.

## Manual Installation
Install Composer
```bash
Install Composer
```

Install PHP,Mysql in your Machine OR you can use (XAMPP,WAMP etc)

Install Laravel
```bash
composer global require laravel/installer
```


Clone Git Repo
```bash
git clone
```

Run Following commands one by one after coming into project folder
```bash
composer update

php artisan migrate

php artisan migrate:fresh --seed

php artisan serve
```

Now you will get localhost link.

Just copy the link and run in your browser

## Call API now
```bash
{link}/api/sessions
{link}/api/session/detail/{id}
```
