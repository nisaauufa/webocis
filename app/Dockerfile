FROM php:8.2-apache
RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite
COPY . /var/www/html
RUN chown -www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache -R