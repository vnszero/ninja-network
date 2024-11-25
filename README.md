# Laravel 11 Project with Docker

## Overview
This project is a small crud web sistem. It will use Laravel 11, MySQL, Blade Components and Docker.

---

## Credits
- **YouTube Playlist**: [Laravel 11 for Beginners](https://www.youtube.com/playlist?list=PL4cUxeGkcC9gF5Gez17eHcDIxrpVSBuVt)  
- **Creator**: [NetNinja](https://www.youtube.com/@NetNinja) channel.   
- **Official Repository**: [GitHub](https://github.com/iamshaunjp/laravel-11-for-beginners)

---

## docker useful commands

### build and start services
docker compose up -d

### stop services
docker compose down

### view running containers
docker compose ps

### to generate aplication key
docker compose exec app php artisan key:generate

### to install composer dependencies
docker compose exec app composer install

### to cache configurations after making changes
docker compose exec app php artisan config:cache

### to run database migrations through docker
docker compose exec app php artisan migrate

### to access database
docker compose exec db mysql -u laravel -p

## Artisan useful commands

### make:migration
php artisan make:migration create_[name]s_table

### make:model -mfs
php artisan make:model [ModelName] -mfs
    <!-- -mfs flag stands for: 
        m to migration, 
        f to factory and 
        s to seed -->

## artisan tinker
docker compose exec app php artisan tinker

### to use a model
use App\Models\Ninja

### to create a register
Ninja::create(['name' => 'Wario', 'skill' => 80, 'bio' => 'Lorem Ipsum'])
Ninja::create(['name' => 'Mario', 'skill' => 70, 'bio' => 'Ipsum Lorem'])

### use factory in tinker
<!-- it will create 50 records -->
Ninja::factory()->count(50)->create() 

### fresh and seed
<!-- This will delete all old values in database -->
docker compose exec app php artisan migrate:fresh --seed

## Create pagination config file
php artisan vendor:publish --tag=laravel-pagination