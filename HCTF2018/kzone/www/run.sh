#! /usr/bin/env bash
service mysql start 
service apache2 start
mysql -uroot -e "create user 'r00t'@'%' identified by 'Fish_k0u_z0ne';flush privileges;"
mysql -uroot -e "create database hctf_kouzone;"
mysql -uroot -e "grant all privileges on hctf_kouzone.* to 'r00t'@'localhost' identified by 'Fish_k0u_z0ne';flush privileges;"
mysql -ur00t -pFish_k0u_z0ne hctf_kouzone < /var/www/html/install.sql
mysql -ur00t -pFish_k0u_z0ne hctf_kouzone < /var/www/html/new.sql
rm /var/www/html/run.sh
rm /var/www/html/new.sql
/bin/bash