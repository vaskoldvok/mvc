FROM ubuntu:latest

ENV DEBIAN_FRONTEND="noninteractive"

RUN apt-get update
RUN apt-get install -y \
    systemd \
    bash \
    vim \
    dialog \
    lsof \
    nginx \
    mariadb-server \
    php-fpm \
    php-mysql

COPY .docker/nginx.conf /etc/nginx/sites-available/default
COPY .docker/www.conf /etc/php/7.4/fpm/pool.d/www.conf
COPY app /var/www/html

EXPOSE 1337 80
EXPOSE 9001 9000

COPY .docker/startup.sh /
RUN chmod +x /startup.sh

RUN apt-get install -y wget

COPY .docker/install-composer.sh /
RUN chmod +x /install-composer.sh
RUN sh /install-composer.sh \
    && rm /install-composer.sh

WORKDIR /

CMD ["./startup.sh"]
