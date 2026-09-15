FROM php:8.5-cli

# Install required system packages and PHP extensions
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libsqlite3-dev \
    unzip \
    git \
    && docker-php-ext-configure pdo_sqlite --with-pdo-sqlite=/usr \
    && docker-php-ext-install \
        intl \
        pdo \
        pdo_sqlite \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy Composer files first for better Docker caching
COPY composer.json composer.lock ./

# Install production dependencies
RUN composer install \
    --no-dev \
    --prefer-dist \
    --no-interaction \
    --no-progress \
    --optimize-autoloader

# Copy application
COPY . .

# Make CodeIgniter writable directory available
RUN mkdir -p \
    writable/cache \
    writable/logs \
    writable/session \
    writable/uploads \
    && chmod -R 775 writable

RUN chmod +x docker/entrypoint.sh
# Render provides PORT
EXPOSE 10000

# CodeIgniter 4 public directory
#CMD ["sh", "-c", "php -S 0.0.0.0:${PORT:-10000} -t public"]
ENTRYPOINT ["./docker/entrypoint.sh"]
