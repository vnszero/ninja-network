# docker useful commands

## build and start services
docker compose up -d

## stop services
docker compose down

## view running containers
docker compose ps

## to generate aplication key
docker compose exec app php artisan key:generate

## to install composer dependencies
docker compose exec app composer install

## to cache configurations after making changes
docker compose exec app php artisan config:cache

## to run database migrations through docker
docker compose exec app php artisan migrate

## to access database
docker compose exec db mysql -u laravel -p

# Artisan useful commands

## make:migration
php artisan make:migration create_[name]s_table

## make:model -mfs
php artisan make:model [ModelName] -mfs
    <!-- -mfs flag stands for: 
        m to migration, 
        f to factory and 
        s to seed -->

# artisan tinker
docker compose exec app php artisan tinker

## to use a model
use App\Models\Ninja

## to create a register
Ninja::create(['name' => 'Wario', 'skill' => 80, 'bio' => 'Lorem Ipsum'])
Ninja::create(['name' => 'Mario', 'skill' => 70, 'bio' => 'Ipsum Lorem'])