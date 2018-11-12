#! /bin/bash 
# while loops 
mysql  -uroot -padsl1234 -hdb -e 'create database test';
mysql -uroot -padsl1234 -hdb test  < user.sql
python run.py
