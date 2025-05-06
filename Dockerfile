#official PHP image from DockerHub
FROM php:8.2-apache

# Copy project files into the container's web server root
COPY . /var/www/html/

# Give necessary permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (HTTP)
EXPOSE 80

# Install mysqli and other needed extensions
RUN docker-php-ext-install mysqli
