FROM php:7.4-fpm

LABEL maintainer="toki"

ARG PROJECT_ROOT
RUN echo ${PROJECT_ROOT}

RUN apt-get update -y && apt-get install -y \
    libpq-dev \
    libmcrypt-dev \
    default-mysql-client \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    zlib1g-dev \
    libzip-dev\
    zip \
    unzip \
    git \
    libxrender1 libfontconfig1 libxext6 fonts-ipafont\
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql \
    && docker-php-ext-install bcmath \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install zip\
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

COPY . /var/www/

WORKDIR /var/www/${PROJECT_ROOT}/