#!/bin/sh

cd /var/www/html

php artisan config:clear
php artisan route:clear
php artisan view:clear

exec /usr/local/bin/supervisord -c /etc/supervisor/supervisord.conf
