FROM php:7.4-apache
COPY  code/ /var/www/html/
EXPOSE 80

RUN apt-get update -y && apt-get install -y libmariadb-dev
RUN docker-php-ext-install mysqli
