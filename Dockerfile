FROM composer:2.1.9 as build
WORKDIR /app
COPY . /app
RUN composer install

FROM node:16
WORKDIR /app
COPY . /app
RUN npm install
RUN npm run prod

# FROM ubuntu:20.04

FROM php:8.1.1-apache
# RUN docker-php-ext-install pdo pdo_mysql
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update \
  && apt-get install -y mysql-server mysql-client libmysqlclient-dev --no-install-recommends \
  && docker-php-ext-install pdo pdo_mysql \
  && apt-get clean

EXPOSE 8080
COPY --from=build /app /var/www/
COPY docker/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY .env.example /var/www/.env
RUN chmod 777 -R /var/www/storage/ && \
    echo "Listen 8080" >> /etc/apache2/ports.conf && \
    chown -R www-data:www-data /var/www/ && \
    a2enmod rewrite
 
RUN php /var/www/artisan storage:link
RUN php /var/www/artisan migrate --force
