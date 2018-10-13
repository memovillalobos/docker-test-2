FROM php:7.1.22-apache-stretch
RUN docker-php-ext-install mysqli
WORKDIR /var/www/html
COPY src/ /var/www/html
EXPOSE 80
