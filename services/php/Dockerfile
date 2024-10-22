FROM php:fpm

WORKDIR /app

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

