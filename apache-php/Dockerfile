# PHP 8.4 with Apache (multi-arch official image)
FROM php:8.4-apache

# Install common extensions you’d get with XAMPP
RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends \
        libpng-dev libjpeg-dev libonig-dev libzip-dev \
        libmariadb-dev; \
    docker-php-ext-install mysqli pdo pdo_mysql gd zip; \
    rm -rf /var/lib/apt/lists/*

# Enable mod_rewrite like XAMPP
RUN a2enmod rewrite

# Custom vhost
COPY vhosts.conf /etc/apache2/sites-available/000-default.conf
