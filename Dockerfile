# Use official PHP + Apache image
FROM php:8.2-apache

# Enable mysqli and PDO for MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files into the container
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
