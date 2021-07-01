ARG PHP_VERSION="7.4"
FROM php:${PHP_VERSION:+${PHP_VERSION}-}fpm-alpine

RUN apk update; \
    apk upgrade;




RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql


COPY php.ini /usr/local/etc/php/conf.d/php.ini