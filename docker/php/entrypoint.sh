#!/bin/bash

# Espera o banco ficar pronto e roda as migrations
until php artisan migrate --force; do
  echo "Aguardando o banco de dados ficar pronto..."
  sleep 3
done

# Inicia o PHP-FPM
exec php-fpm