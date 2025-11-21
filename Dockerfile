FROM webdevops/php-nginx:8.4

# Estensioni PHP necessarie
RUN apt-get update && apt-get install -y libsqlite3-dev \
    && docker-php-ext-install pdo_mysql pdo_sqlite

WORKDIR /app

COPY . .

# Se hai questo file, tienilo. Se ti crea dubbi, COMMENTALO per provare.
#COPY nginx.conf /opt/docker/etc/nginx/vhost.conf

RUN composer install --no-dev --optimize-autoloader

RUN chown -R application:application storage bootstrap/cache
RUN chmod -R 775 storage
RUN chmod -R 775 bootstrap/cache

EXPOSE 8080
