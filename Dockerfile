FROM php:8.2-cli

RUN apt-get update && apt-get install -y git unzip libzip-dev libpng-dev libonig-dev libxml2-dev libsqlite3-dev zlib1g-dev && docker-php-ext-install pdo_sqlite zip gd

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && apt-get install -y nodejs

WORKDIR /app
COPY . .

RUN cp .env.example .env

RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

RUN touch database/database.sqlite
RUN php artisan key:generate --force
RUN php artisan storage:link || true

EXPOSE 10000

CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=10000