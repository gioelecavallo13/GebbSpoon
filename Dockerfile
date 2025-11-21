FROM webdevops/php-nginx:8.4

# Estensioni PHP necessarie per Laravel (MySQL + SQLite)
RUN apt-get update && apt-get install -y libsqlite3-dev \
    && docker-php-ext-install pdo_mysql pdo_sqlite

WORKDIR /app

COPY . .

# Config Nginx personalizzata
COPY nginx.conf /opt/docker/etc/nginx/vhost.conf

RUN composer install --no-dev --optimize-autoloader

# Permessi Laravel
RUN chown -R application:application storage bootstrap/cache
RUN chmod -R 775 storage
RUN chmod -R 775 bootstrap/cache

EXPOSE 8080
