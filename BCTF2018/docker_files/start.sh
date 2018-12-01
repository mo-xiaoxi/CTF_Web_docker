#!/bin/bash
echo 'Starting apache2..'
service apache2 stop 2>/dev/null
service apache2 start 2>/dev/null
echo 'Starting mysql..'
service mysql stop 2>/dev/null
service mysql start 2>/dev/null
echo 'Init database..'
mysql --user=root --password="Bctf2o18123$%^" < /home/moxiaoxi/bctf2018.sql
echo 'Starting checker..'
nohup python /home/moxiaoxi/checker/checker.py > /home/moxiaoxi/checker/checker.log1 2>/home/moxiaoxi/checker/checker.log1 &

echo 'Check authority...'
find /home/moxiaoxi/ -type d -writable | xargs chmod 755
find /home/moxiaoxi/ -type f -writable | xargs chmod 644
find /var/www/html/ -type f -writable | xargs chmod 644
find /var/www/html/ -type d -writable | xargs chmod 755
chmod 620 /home/moxiaoxi/checker/checker.log
chmod 620 /home/moxiaoxi/checker/ghostdriver.log
chmod 620 /home/moxiaoxi/bctf2018.sql 

trap 'printf "\nBye!"; exit;' SIGINT SIGTERM
printf '\nEntering loop. Press Ctrl+C for exit!\n\n...'
while :
do
  sleep 1
done



