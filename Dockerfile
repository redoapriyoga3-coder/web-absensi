FROM php:8.2-apache

# Install mysqli dan aktifkan
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy semua file ke folder default Apache
COPY . /var/www/html/

# Pastikan hak akses benar untuk Apache
RUN chown -R www-data:www-data /var/www/html
