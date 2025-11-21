FROM webdevops/php-nginx:8.5

# Install MySQL PDO extension
RUN docker-php-ext-install pdo pdo_mysql

WORKDIR /app

COPY . .

RUN composer install --no-dev --optimize-autoloader

# Laravel permissions
RUN chown -R application:application storage bootstrap/cache
RUN chmod -R 775 storage/bootstrap/cache

EXPOSE 8080
