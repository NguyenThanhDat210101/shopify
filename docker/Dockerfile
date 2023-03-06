FROM php:8.1-fpm

# RUN cp /usr/local/etc/php/php.ini-production /usr/local/etc/php/php.ini
# Install selected extensions and other stuff
RUN apt-get update \
    && apt-get -y --no-install-recommends install sudo php8.1-mysql php8.1-gd php8.1-imagick php8.1-xml php-redis mysql-client \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

RUN docker-php-ext-install pdo pdo_mysql

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Install git
RUN apt-get update \
    && apt-get -y install git \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*