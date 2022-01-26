#!/bin/bash

sudo apt install curl git php-fpm nginx mysql-server phpmyadmin memcached redis-server php-redis php-memcached
sudo snap install --classic code
sudo mysql -uroot
#mysql > source i.sql
sudo systemctl restart mysql.service
