FROM php:7.0-apache

# Set the locale
ENV DEBIAN_FRONTEND noninteractive
RUN apt-get update -qq && \
    apt-get install -y locales -qq

RUN echo "Europe/Berlin" > /etc/timezone && \
    dpkg-reconfigure -f noninteractive tzdata && \
    sed -i -e 's/# en_US.UTF-8 UTF-8/en_US.UTF-8 UTF-8/' /etc/locale.gen && \
    echo 'LANG="en_US.UTF-8"'>/etc/default/locale && \
    dpkg-reconfigure --frontend=noninteractive locales && \
    update-locale LANG=en_US.UTF-8

ENV LANG en_US.UTF-8
ENV LANGUAGE en_US.UTF-8
ENV LC_ALL en_US.UTF-8

RUN apt-get update && \
    apt-get install -y libpng12-dev && \
    docker-php-ext-install mysqli &&\
    docker-php-ext-install gd

RUN cd /etc/apache2/mods-enabled/ && \
    ln -s ../mods-available/headers.load headers.load && \
    ln -s ../mods-available/rewrite.load rewrite.load && \
    cd /var/www/html

COPY app/public_html /var/www/html/

RUN chown -R www-data:www-data /var/www/html
