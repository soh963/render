# docker/php/Dockerfile
FROM php:8.2-apache
COPY ./app/php /var/www/html
RUN docker-php-ext-install pdo pdo_mysql