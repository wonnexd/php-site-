FROM php:7.4-apache
RUN apt-get update && apt-get install -y apt-transport-https
RUN echo "deb http://ftp.de.debian.org/debian/ stretch main contrib non-free" > /etc/apt/sources.list.d/debian.list
RUN apt-get update && apt-get install -y --no-install-recommends \
        nano \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libxslt-dev \
        libcurl4-gnutls-dev \
        libmagickwand-6.q16-dev \
        libssl-dev \
        libc-dev \
        zlib1g-dev \
        libmemcached-dev \
        libicu-dev \
        libzip-dev \
        zip \
        unzip \
        wget \
        mysql-client \
        imagemagick \
        ghostscript \
        curl \
        build-essential \
        git \
        ca-certificates \
        gcc \
        make \
        autoconf \
        pkg-config \
        cron \
        supervisor \
    && ln -s /usr/lib/x86_64-linux-gnu/ImageMagick-6.8.9/bin-Q16/MagickWand-config /usr/bin/ \
    && docker-php-ext-install \
            iconv \
            opcache \
            zip \
            curl \
            pdo \
            pdo_mysql \
            mysqli \
            soap \
            ftp \
            intl \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install gd

RUN adduser --disabled-password --home /var/www --shell /usr/sbin/nologin --gecos '' --ingroup www-data tran
RUN mkdir -p /var/www/.opcache && chown tran:www-data /var/www/.opcache

RUN pecl channel-update pecl.php.net \
    && pecl install imagick \
    && echo "extension=imagick.so" > /usr/local/etc/php/conf.d/ext-imagick.ini \
    && pecl install apcu \
    && echo extension=apcu.so > /usr/local/etc/php/conf.d/apcu.ini \

COPY src/php/php.ini /usr/local/etc/php/php.ini
COPY src/php/ext-opcache.ini /usr/local/etc/php/conf.d/ext-opcache.ini

# APACHE
COPY src/apache/apache.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite headers && a2ensite 000-default.conf \
    && mkdir -p /usr/local/etc/php/apache2 \
    && cp -R /usr/local/etc/php/conf.d /usr/local/etc/php/apache2 \
    && echo 'export PHP_INI_SCAN_DIR=/usr/local/etc/php/apache2/conf.d' >> /etc/apache2/envvars
ENV APACHE_RUN_USER tran

# CRON
ADD src/cron/application /etc/cron.d/application
RUN chmod 0644 /etc/cron.d/application

# COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && mkdir -p /var/www/.composer && chown tran:www-data /var/www/.composer  \
    && mkdir -p /var/www/.npm && chown tran:www-data /var/www/.npm  \
    && mkdir -p /var/www/.config && chown tran:www-data /var/www/.config

# SUPERVISOR
COPY src/supervisor/supervisor.conf /etc/supervisor/
COPY src/supervisor/conf.d/ /etc/supervisor/conf.d/

VOLUME ["/var/www/html", "/var/log/apache"]

COPY src/entrypoint.sh /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]

EXPOSE 80

ENV TERM xterm
