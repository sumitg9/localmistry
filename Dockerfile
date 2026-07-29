FROM php:8.2-apache

RUN a2enmod rewrite

COPY . /var/www/html/

ENV APACHE_DOCUMENT_ROOT=/var/www/html

EXPOSE 80

CMD ["apachectl", "-D", "FOREGROUND"]