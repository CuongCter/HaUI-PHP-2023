FROM php:8.2.1-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

COPY ./src /var/www/html

WORKDIR /var/www/html