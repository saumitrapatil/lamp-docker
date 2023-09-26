# Dockerfile for Apache service
FROM php:apache

# Install php-mysqlnd extension
RUN docker-php-ext-install mysqli pdo pdo_mysql
