#!/bin/bash

service mysql start

mysql --user=root --password="n1Yq3IOz7nq2" -e " \
        CREATE DATABASE web;
        USE web;
        CREATE TABLE feedbacks(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, message TEXT, timestamp TIMESTAMP, session_id TEXT, uid TEXT, is_checked INT);
        CREATE TABLE users(user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, username TEXT, password TEXT, email TEXT);
        CREATE USER 'web'@'localhost' IDENTIFIED BY 'N8zu3Qt2w5Vh';
        CREATE USER 'checker'@'localhost' IDENTIFIED BY 'yB2z51jw2qU5';
        GRANT SELECT,INSERT ON web.feedbacks TO 'web'@'localhost';
        GRANT SELECT ON web.users TO 'web'@'localhost';
        GRANT SELECT,UPDATE ON web.feedbacks TO 'checker'@'localhost';
        INSERT INTO web.users (username, password, email) VALUES ('admin', '0mgH@rdP@sS', 'admin@timehackers');
        INSERT INTO web.users (username, password, email) VALUES ('jonny', 'j0HhNy1337', 'jonny@timehackers');
        INSERT INTO web.users (username, password, email) VALUES ('pro_hacker', 'M@kE_L0Ve_St0P_H@cK', 'pro_hacker@timehackers');"