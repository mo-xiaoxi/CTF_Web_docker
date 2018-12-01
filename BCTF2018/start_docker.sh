#!/bin/bash
# clean
rm -rf moxiaoxi/*

# configurating vuln web-server
cp docker_files/bctf2018.sql  moxiaoxi/bctf2018.sql
cp docker_files/start.sh moxiaoxi/start.sh
cp docker_files/backup.sh moxiaoxi/backup.sh
chmod +x moxiaoxi/start.sh
chmod +x moxiaoxi/backup.sh
cp -r checker moxiaoxi/checker


# start docker
# docker run -it --rm -p 80:80 -p 8081:8080 -v `pwd`/moxiaoxi:/moxiaoxi -v `pwd`/www:/var/www/html --name seafaring  moxiaoxi/bctf_seafaring /moxiaoxi/start.sh
docker-compose down
docker-compose up -d 

# init selenium
docker cp ./selenium  selenium-firefox:/tmp/
docker exec selenium-firefox /tmp/selenium/run.sh

# clean