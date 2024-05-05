FROM php:7.4-fpm 
RUN docker-php-ext-install pdo_mysql
COPY ./app /var/www/html
EXPOSE 9000