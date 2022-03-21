FROM php:fpm

RUN apt-get update && \
    apt-get install -y git zip nodejs npm yarn

RUN curl --silent --show-error https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Uncomment to have mysqli extension installed and enabled
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

RUN pecl install xdebug && docker-php-ext-enable xdebug
