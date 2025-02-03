FROM php:8.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY ./ /var/www/html

WORKDIR /var/www/html

USER www-data

EXPOSE 80