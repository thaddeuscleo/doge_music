FROM composer:2.1.9 as build

WORKDIR /app
COPY . /app
RUN composer install

FROM node:16
WORKDIR /app
COPY . /app
RUN npm install
RUN npm run prod

FROM php:7.3-apache-stretch
RUN docker-php-ext-install pdo pdo_mysql

FROM ubuntu:20.04
RUN echo "mysql-server mysql-server/root_password password root" | debconf-set-selections
RUN echo "mysql-server mysql-server/root_password_again password root" | debconf-set-selections
RUN apt-get update && sudo apt-get dist-upgrade
RUN apt-get -y install mysql-server

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
