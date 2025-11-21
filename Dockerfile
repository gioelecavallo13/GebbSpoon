# ------------ PHP + Composer ------------
FROM php:8.2-fpm

# Install extensions
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libxml2-dev \
    zip unzip curl \
    && docker-php-ext-install pdo pdo_mysql mbstring tokenizer xml

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working dir
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Laravel permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# ------------ NGINX -------------
FROM nginx:alpine

COPY ./nginx.conf /etc/nginx/nginx.conf

# Copy app from previous stage
COPY --from=0 /var/www/html /var/www/html

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
