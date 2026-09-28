#!/bin/sh

cd /var/www/html

php artisan config:clear
php artisan route:clear
php artisan view:clear

exec /start.sh
