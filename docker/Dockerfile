FROM php:7.2-apache
#COPY web/ /var/www/html/

RUN install -d /data/php-deploy

COPY src/scripts/docker-php-* /usr/local/bin/
RUN chmod 777 /usr/local/bin/docker-php-*

COPY 000-default.conf /etc/apache2/sites-available/

#FIXME:
#We are copying the php.ini because the docker-php-configure script within the container is not working
#  The script is perfectly able to create the conf file unser /usr/loca/etc/php/conf.d , but it never gets included during php boot
COPY php.ini /usr/local/etc/php/php.ini

