FROM ubuntu:18.04

ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y nginx
RUN apt-get install -y sysstat bc tzdata
RUN apt-get clean

# Set timezone to Taiwan
RUN ln -fs /usr/share/zoneinfo/Asia/Taipei /etc/localtime

# Enable php-fpm in default config
COPY nginx-site.conf /etc/nginx/sites-available/default

# forward request and error logs to docker log collector
RUN ln -sf /dev/stdout /var/log/nginx/access.log && \
    ln -sf /dev/stdout /var/log/nginx/error.log

CMD ["nginx", "-g", "daemon off;"]
