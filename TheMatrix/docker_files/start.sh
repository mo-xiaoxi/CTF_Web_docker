#!/bin/bash

echo 'Starting nginx..'
service nginx start 2>/dev/null
echo 'Starting apache2..'
service apache2 start 2>/dev/null
echo 'Starting mysql..'
service mysql start 2>/dev/null
echo 'Starting checker..'
sudo -u checker nohup /home/checker/checker.py > /home/checker/checker.log 2>/home/checker/checker.log &

trap 'printf "\nBye!"; exit;' SIGINT SIGTERM
printf '\nEntering loop. Press Ctrl+C for exit!\n\n...'
while :
do
  sleep 1
done