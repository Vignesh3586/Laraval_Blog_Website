#!/bin/bash
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
composer install --no-dev --optimize-autoloader
php artisan config:cache
php artisan migrate --force
