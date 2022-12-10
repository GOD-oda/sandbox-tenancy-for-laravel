FROM php:8.2-apache-buster

WORKDIR /var/www/html

ENV COMPOSER_ALLOW_SUPERUSER=1 \
	COMPOSER_HOME=/composer

COPY --from=composer:2.1 /usr/bin/composer /usr/bin/composer

COPY ./docker/php/default.conf /etc/apache2/sites-enabled/000-default.conf

RUN apt-get update && \
    apt-get -y install git zip unzip libzip-dev libicu-dev libonig-dev && \
    docker-php-ext-install pdo_mysql intl zip bcmath && \
    a2enmod rewrite
