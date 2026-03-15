FROM php:8.2-apache

COPY apache.conf /etc/apache2/sites-available/000-default.conf
COPY . /var/www/html/

RUN a2enmod rewrite

ENV PORT 8080
RUN sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

CMD ["apache2-foreground"]