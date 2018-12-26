FROM ubuntu:16.04
MAINTAINER Litvinenko Arkadiy <al@bi.zone>

# RUN sed -i 's/archive.ubuntu.com/mirrors.ustc.edu.cn/g' /etc/apt/sources.list  && \
    # sed -i 's/security.ubuntu.com/mirrors.ustc.edu.cn/g' /etc/apt/sources.list  && \
    # apt-get update
RUN apt-get update

# configurating vuln web-server
RUN { \
        echo mysql-server mysql-server/root_password password 'n1Yq3IOz7nq2'; \
        echo mysql-server mysql-server/root_password_again password 'n1Yq3IOz7nq2'; \
    } | debconf-set-selections
RUN export DEBIAN_FRONTEND="noninteractive"
RUN apt-get install -y mysql-server && \
    apt-get install -y nginx && \
    apt-get install -y apache2 && \
    apt-get install -y php && \
    apt-get install -y libapache2-mod-php && \
    apt-get install -y php-mcrypt && \
    apt-get install -y php-gd && \
    apt-get install -y php7.0-mysql && \
    a2dismod -f deflate && \
    a2enmod headers
COPY docker_files/ports.conf /etc/apache2/ports.conf
COPY docker_files/default /etc/nginx/sites-available/default 
COPY docker_files/nginx.conf /etc/nginx/nginx.conf
COPY docker_files/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY docker_files/apache2.conf /etc/apache2/apache2.conf
COPY docker_files/status.conf /etc/apache2/mods-available/status.conf
COPY docker_files/db_init.sh /root/db_init.sh
RUN chmod 700 /root/db_init.sh && \
    /root/db_init.sh
COPY web /var/www/html
RUN rm /var/www/html/index.html
VOLUME /var/lib/mysql
# configurating checker
RUN apt-get install -y python2.7 && \
    apt-get install -y phantomjs && \
    apt-get install -y python-pip && \
    pip install selenium==3.4.3 && \
    apt-get install -y python-mysqldb && \
    pip install requests==2.13.0 && \
    apt-get install sudo && \
    mkdir /home/checker
COPY checker /home/checker
RUN adduser --disabled-password --gecos "" checker && \
    chmod 620 /home/checker/checker.log && \
    chmod 620 /home/checker/ghostdriver.log && \
    chmod 750 /home/checker/checker.py && \
    chown -R root:checker /home/checker
 
# adding flag
RUN mkdir /flag && \
    echo 'flag{Xss_CsRF_Ng1nx_CACH@}' > '/flag/Th3_M0sT_S3cR3T_fL@g'

# clean caches

# run services
EXPOSE 80 8080
COPY docker_files/start.sh /root/start.sh
RUN chmod 700 /root/start.sh
CMD ["/root/start.sh"]