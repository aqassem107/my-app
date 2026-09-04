FROM php:8.2-apache

WORKDIR /var/www/html/

RUN docker-php-ext-install mysqli pdo_mysql

COPY register* .
