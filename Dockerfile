FROM richarvey/nginx-php-fpm:3.1.6

COPY . /var/www/html
COPY conf/nginx/nginx-site.conf /etc/nginx/sites-available/default.conf

WORKDIR /var/www/html

ENV SKIP_COMPOSER=1
ENV WEBROOT=/var/www/html/public
ENV PHP_ERRORS_STDERR=1
ENV RUN_SCRIPTS=1
ENV REAL_IP_HEADER=1
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV LOG_CHANNEL=stderr
ENV COMPOSER_ALLOW_SUPERUSER=1

RUN chmod +x /var/www/html/scripts/*.sh \
    && mkdir -p storage/framework/cache/data storage/framework/sessions storage/framework/views storage/logs bootstrap/cache \
    && chown -R nginx:nginx storage bootstrap/cache

CMD ["/start.sh"]
