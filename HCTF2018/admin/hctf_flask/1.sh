#! /bin/bash 
# while loops 
n=1 
  
while ((1))
do
  mysql -uroot -padsl1234 test < user.sql
  sleep 30m
  
done