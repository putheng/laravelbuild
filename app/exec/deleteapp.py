#!/usr/bin/env python3.5
import os
import sys

#Delete nginx vhost
os.system("sudo rm -r /etc/nginx/sites-enabled/myapp")
os.system("sudo rm -r /etc/nginx/sites-available/myapp");

#Delete user git repository
os.system("sudo rm -r /home/username/myapp.git")

#Delete user public html directory
os.system("sudo rm -r /homes/putheng/myapp")

#Delete database
os.system("mysql -u'root' -p'root' -e \"DROP DATABASE dbname\"; ")

#Delete localhost mysql user
os.system("mysql -u'root' -p'root' -e \"DROP USER IF EXISTS 'dbuser'@'localhost'\"; ")

#Delete remote mysql user 
os.system("mysql -u'root' -p'root' -e \"DROP USER IF EXISTS 'dbuser'@'%'\"; ")

#Restart Mysql
os.system("sudo service mysql restart")

#Restart Nginx
os.system("sudo service nginx restat")