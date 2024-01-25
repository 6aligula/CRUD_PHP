FROM php:7.4-apache

# Cambia el propietario del directorio /var/www
RUN chown -R www-data:www-data /var/www

COPY . /var/www/html

# Otros comandos que necesites...
