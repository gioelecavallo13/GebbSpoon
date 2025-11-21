FROM webdevops/php-nginx:8.2

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader

# Laravel permissions
RUN chown -R application:application storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Expose the port Render expects
EXPOSE 8080
