FROM ubuntu:18.04
ENV DEBIAN_FRONTEND=noninteractive
RUN apt update && apt dist-upgrade -y
RUN apt install php7.2-fpm php-imagick nginx strace -y
ADD default /etc/nginx/sites-available/default
ADD php.ini /etc/php/7.2/fpm/php.ini
ADD ./www/ /var/www/html/
ADD flag /flag
RUN chmod 600 /flag
ADD readflag.c /readflag.c
RUN apt -y install gcc && \
    gcc /readflag.c -o /readflag && \
    chmod +s /readflag
CMD  ["bash", "-c", "service nginx start && service php7.2-fpm start && tail -f /var/log/nginx/error.log"]
EXPOSE 80