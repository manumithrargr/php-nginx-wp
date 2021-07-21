FROM php:7.3-fpm-alpine

RUN apk add git

RUN git clone -b 5.7.2 https://github.com/WordPress/WordPress /var/www/html && apk del git && rm -rf /var/www/html/.git && chown -R www-data:www-data /var/www/html && docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY --chown=www-data:www-data ./wp-config.php /var/www/html
#RUN apk del git
##
#RUN rm -rf /var/www/html/.git

USER www-data
