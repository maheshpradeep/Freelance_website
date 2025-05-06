# Use official PHP image with Apache
FROM php:8.2-apache

# Copy app files
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose HTTP port
EXPOSE 80

# Install PHP extensions
RUN docker-php-ext-install mysqli

# Start Apache in foreground (optional, only if necessary)
CMD ["apache2-foreground"]
