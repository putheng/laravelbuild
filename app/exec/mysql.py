#!/usr/bin/env python3.5
import os
import uuid
import sys
#sys.argv[0]

def random_string(string_length=10):
	random = str(uuid.uuid4())
	random = random.replace("-","")
	return random[0:string_length]

dbuser = random_string(20)
dbname = random_string(20)
userps = random_string(50)

dbhost = "lexscorp.com"
dbport = "3306"

rootuser = sys.argv[3]
rootpassword = sys.argv[4]
rootdatabase = sys.argv[5]

createdb = "mysql -u'"+ rootuser +"' -p'"+ rootpassword +"' -e \"CREATE DATABASE "+ dbname +"\"; "

createlocal = "mysql -u'"+ rootuser +"' -p'"+ rootpassword +"' -e \"CREATE USER '"+ dbuser +"'@'localhost' IDENTIFIED BY '"+ userps +"'\"; "

createremote = "mysql -u'"+ rootuser +"' -p'"+ rootpassword +"' -e \"CREATE USER '"+ dbuser +"'@'%' IDENTIFIED BY '"+ userps +"'\"; "

grantlocal = "mysql -u'"+ rootuser +"' -p'"+ rootpassword +"' -e \"GRANT ALL PRIVILEGES ON "+ dbname +".* TO '"+ dbuser +"'@'localhost' IDENTIFIED BY '$mysqlpassword' WITH GRANT OPTION\"; "

grantremote = "mysql -u'"+ rootuser +"' -p'"+ rootpassword +"' -e \"GRANT ALL ON "+  dbname +".* TO '"+ dbuser +"'@'%' IDENTIFIED BY '$mysqlpassword' WITH GRANT OPTION\"; "

flush = "mysql -u'"+ rootuser +"' -p'"+ rootpassword +"' -e \"FLUSH PRIVILEGES\"; "

os.system(createdb)
os.system(createlocal)
os.system(createremote)
os.system(grantlocal)
os.system(grantremote)
os.system(flush)

insert = "mysql -u'"+ rootuser +"' -p'"+ rootpassword +"' -e \"INSERT INTO "+ rootdatabase +".databases (user_id, project_id, username, password, dbname, host, port) VALUES ('"+ sys.argv[1] +"', '"+ sys.argv[2] +"', '"+ dbuser +"', '"+ userps +"', '"+ dbname +"', '"+ dbhost +"', '"+ dbport +"') \"; "

os.system(insert)