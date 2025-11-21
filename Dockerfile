FROM webdevops/php-nginx:8.4

# Install MySQL PDO extension
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /app

COPY . .

# Copy custom nginx config
COPY nginx.conf /opt/docker/etc/nginx/vhost.conf

RUN composer install --no-dev --optimize-autoloader

# Laravel permissions
RUN chown -R application:application storage bootstrap/cache
RUN chmod -R 775 storage
RUN chmod -R 775 bootstrap/cache

EXPOSE 8080
