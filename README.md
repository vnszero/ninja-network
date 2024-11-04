# docker useful commands

## build and start services
docker-compose up -d

## stop services
docker-compose down

## view running containers
docker-compose ps

## to generate aplication key
docker-compose exec app php artisan key:generate

## to install composer dependencies
docker-compose exec app composer install

## to cache configurations after making changes
docker-compose exec app php artisan config:cache

## to run database migrations through docker
docker-compose exec app php artisan migrate

## to access database
docker compose exec db mysql -u laravel -p