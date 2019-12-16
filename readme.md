# NEURONATION TASK

Task is completed.

I used Laravel 5.7 MVC framework and OOP Concepts to write my code.<br/>
PHP Version: 7.1.3<br/>
Mysql Version: 5.7.2

#### Project also hosted live for easy testing
GET Sessions Array
```bash
http://task.softhub.zone/task01/api/sessions
```

GET Session Detail
```bash
http://task.softhub.zone/task01/api/session/detail/10
```

GET Latest Session Categories Detail
```bash
http://task.softhub.zone/task01/api/latest/session/categories
```

You can test this api using Postman,Direct browser or any other service

## Files Included
database design (jpg image)<br/>
database sql file<br/>
laravel project files

## Database Migrations Location
 src/public/database/migrations

## Database Seeders(for dummy data) Location
 src/public/database/seeders

## Models & Controllers
  src/public/app/Models<br/>
  src/public/app/Controllers

## API Routes
src/public/routes/api.php


## Unit Tests
src/public/Test


# Installation

Project is composed in Docker.

# Manual Installation
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

Extra Task Link
{link}/api/latest/session/categories
```
