FROM php:7.2.2-apache
 
RUN docker-php-ext-install mysqli

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git