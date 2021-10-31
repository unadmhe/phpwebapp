FROM php:8.0.6-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli