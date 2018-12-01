FROM php:7.0-apache
RUN apt-get update && \
    apt-get install -y mysql-server && \
    apt-get clean
ADD www /var/www/html
EXPOSE 80
