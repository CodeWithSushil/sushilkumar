#!/usr/bin/env bash

set -e

echo "==> Creating .env..."
if [ ! -f .env ]; then
    cp .env.example .env
fi

echo "==> Setting production environment..."
php spark env production

echo "==> Generating application key..."
php spark key:generate

echo "==> Starting CodeIgniter..."
exec php -S 0.0.0.0:8000 -t public
