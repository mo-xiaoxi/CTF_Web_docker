FROM nickistre/ubuntu-lamp
MAINTAINER moxiaoxi  "momomomoxiaoxi@gmail.com"
RUN apt-get update && apt-get dist-upgrade -y
ADD ./html/ /var/www/html/
RUN chown www-data:www-data /var/www/html/* -R
EXPOSE 80
