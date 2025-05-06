FROM php:8.2-apache

COPY . /var/www/html/

# Install mysqli safely (optional for now — you can remove if testing without DB)
# RUN docker-php-ext-install mysqli

# EXPOSE and CMD are handled by base image
