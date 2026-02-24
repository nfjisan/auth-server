## Overview

1.Laravel Passport OAuth2 server

2.Provides tokens for SSO login

3.No normal login required

## Requirements

1.PHP 8.2 or higher.

2.Composer

3.MySQL

# Clone repository Setup Steps

git clone <auth-server-repo>

cd auth-server

composer install

Copy .env.example to .env

php artisan key:generate

DB_DATABASE=auth_server_db

DB_USERNAME=root

DB_PASSWORD=

php artisan migrate

php artisan passport:install

php artisan passport:client --password

## You'll get:

## Client ID:

## Client Secret:

## Save these Client values in Ecommerce and Foodpanda .env

php artisan serve --port=8000
