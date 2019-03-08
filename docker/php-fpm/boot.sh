#! /bin/bash

composer install
php bin/console doctrine:migrations:migrate --no-interaction --all-or-nothing
php bin/console doctrine:fixtures:load --no-interaction --append
/usr/bin/php-fpm

