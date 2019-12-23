FROM ubuntu:18.04

ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y php-fpm php-sqlite3
RUN apt-get install -y sqlite
RUN apt-get install -y sysstat bc tzdata
RUN apt-get clean

# Set timezone to Taiwan
RUN ln -fs /usr/share/zoneinfo/Asia/Taipei /etc/localtime

RUN mkdir -p /run/php/
RUN mkdir -p /var/www/ && chown www-data:www-data /var/www

RUN sed -i -e "s/;daemonize = .*/daemonize = no/g" /etc/php/7.2/fpm/php-fpm.conf
RUN sed -i "s/listen = .*/listen = 9000/" /etc/php/7.2/fpm/pool.d/www.conf
RUN sed -i "s/;catch_workers_output = .*/catch_workers_output = yes/" /etc/php/7.2/fpm/pool.d/www.conf
RUN sed -i "s/auto_prepend_file =/auto_prepend_file = \/var\/www\/waf.php/" /etc/php/7.2/fpm/php.ini

# forward request and error logs to docker log collector
RUN ln -sf /dev/stdout /var/log/php7.2-fpm.log

CMD ["php-fpm7.2"]
