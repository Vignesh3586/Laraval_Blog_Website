#!/bin/bash

# Install PHP (Change version if needed)
sudo apt update && sudo apt install -y php-cli php-mbstring php-xml unzip curl

# Install Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

# Install Laravel dependencies
composer install --no-dev --optimize-autoloader

# Generate app key
php artisan key:generate

# Cache Laravel configuration
php artisan config:cache

# Run database migrations
php artisan migrate --force
