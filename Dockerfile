FROM php:7.4-apache

COPY ./src/ /var/www/html/
COPY ./apache.conf /etc/apache2/conf-available/

WORKDIR /var/www/html/

RUN a2enconf apache

EXPOSE 80
