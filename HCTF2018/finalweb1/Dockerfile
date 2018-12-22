FROM ubuntu:18.04

ENV DEBIAN_FRONTEND=noninteractive

RUN { \
        echo mysql-server mysql-server/root_password password 'hctf2018$%^'; \
        echo mysql-server mysql-server/root_password_again password 'hctf2018$%^'; \
    } | debconf-set-selections
RUN apt-get update \
  && apt-get install -y nginx mysql-server php-fpm php-mysql \
  && rm -rf /var/lib/apt/lists/*

# nginx config
RUN rm /etc/nginx/sites-available/default
ADD default /etc/nginx/sites-available/default
RUN echo "\ndaemon off;" >> /etc/nginx/nginx.conf

RUN groupadd -r team && useradd -r -g team team \
  && mkdir -p /home/team/workdir \
  && chown -R team:team /home/team

ADD flag /flag

USER team

WORKDIR /home/team/
# COPY --chown=team ./html ./workdir
COPY ./html ./workdir

USER root
RUN chown -R team:team /home/team/workdir \
  && chmod -R 777 /home/team/workdir/function \
  && chmod -R 777 /home/team/workdir/skin

CMD service php7.2-fpm start && nginx
EXPOSE 80