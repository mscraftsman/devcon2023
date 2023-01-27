FROM php:8.2-apache-bullseye as production

ENV APP_NAME="Developers Conference 2023"
ENV APP_ENV=prod
ENV APP_DEBUG=false
ENV APP_URL=http://devcon2023.hacklog.in

WORKDIR /app

RUN docker-php-ext-configure opcache --enable-opcache

COPY docker/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY . /app
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN cd /app && php artisan config:cache && \
    php artisan route:cache && \
    chmod 775 -R /app/storage && \
    chown -R www-data:www-data /app && \
    cp .env.example .env && \
    php artisan key:generate && \
    a2enmod rewrite
