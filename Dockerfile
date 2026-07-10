FROM php:8.2-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
# Mengarahkan Apache ke folder kerja yang tepat
COPY . /var/www/html/
# Memastikan port 80 terbuka
EXPOSE 80
