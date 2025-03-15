#!/bin/bash

# Install Composer
curl -sS https://getcomposer.org/installer | php


# Install Laravel dependencies
composer install --no-dev --optimize-autoloader

# Generate app key
php artisan key:generate

# Cache Laravel configuration
php artisan config:cache

# Run database migrations
php artisan migrate --force
