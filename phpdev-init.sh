#!/bin/bash

sudo apt install curl git php-fpm nginx mysql-server phpmyadmin memcached redis-server php-redis php-memcached
sudo mysql -uroot
sudo snap install --classic code
#mysql > source i.sql
sudo systemctl restart mysql.service
