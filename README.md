## Overview

1.Laravel Passport OAuth2 server

2.Provides tokens for SSO login

3.No normal login required

## Requirements

PHP 8.2 or higher.

Composer

MySQL

## Clone repository Setup Steps

git clone <auth-server-repo>

cd auth-server

composer install

copy .env.example to .env

php artisan key:generate

DB_DATABASE=auth_server_db

DB_USERNAME=root

DB_PASSWORD=

php artisan migrate

php artisan db:seed --class=UserSeeder

php artisan passport:install

php artisan passport:client --password

## You'll get:

## Client ID: <client-id>

## Client Secret: <client-secret>

## Save these values in Ecommerce and Foodpanda .env

php artisan serve --port=8000
