#!/usr/bin/env python3.5
import os
import sys

username = sys.argv[1]
appname = sys.argv[2]
public = sys.argv[3]
php = sys.argv[4]

## Clear the console.
os.system("clear")

os.system("cd ~")

server_parent_dir = "/homes/"+ username;

## Domain directory
domain_dir = appname

## Nginx vhost
nginxhost = username +"-"+ appname

## Domain name
domain = appname +"-"+ username +".laravelbuild.com"

## Chceck and set name of the public directory.
public_dir = public

## Creating the Directory Structure
os.system("sudo mkdir -p "+server_parent_dir+"/"+domain_dir+"/"+public_dir)

## Granting Proper Permissions
os.system("sudo chown -R $USER:$USER "+server_parent_dir+"/"+domain_dir+"/"+public_dir)

## Making Sure Read Access is Permitted
os.system("sudo chmod -R 755 "+server_parent_dir+"/"+domain_dir+"/"+public_dir)

## Adding A Demo Page

file_object = open(server_parent_dir+"/"+domain_dir+"/"+public_dir+"/index.php", "w")
file_object.write("<?php \n\tphpinfo(); \n?>")
file_object.close()

## Creating Virtual Host File
host_file = open("/tmp/"+ nginxhost, "w")
host_file.write("server {\n\tlisten 80;\n\n\troot "+ server_parent_dir +"/"+ domain_dir +"/"+ public_dir +";\n\tindex index.php index.html;\n\n\tserver_name "+ domain +";\n\n\tlocation ~* \.php$ {\n\t\tfastcgi_pass "+ php +";\n\t\tfastcgi_index	index.php;\n\t\tinclude			fastcgi_params;\n\t\tfastcgi_param   SCRIPT_FILENAME    $document_root$fastcgi_script_name;\n\t\tfastcgi_param   SCRIPT_NAME        $fastcgi_script_name;\n\t}\n}")
host_file.close()
os.system("sudo mv \"/tmp/"+ nginxhost +"\" \"/etc/nginx/sites-available/\"")

## Activating New Virtual Host
os.system("sudo ln -s /etc/nginx/sites-available/"+nginxhost+" /etc/nginx/sites-enabled/")

# Restart Nginx
os.system("sudo service nginx restart")

### Setup git
os.system("sudo mkdir -p /home/"+ username +"/"+ appname + ".git")

os.system("git init --bare /home/"+ username +"/"+ appname + ".git")

os.system("touch /home/"+ username +"/"+ appname + ".git/hooks/post-receive")

os.system("echo \"#!/bin/sh\" >> /home/"+ username +"/"+ appname + ".git/hooks/post-receive")

os.system("echo \"git --work-tree=/homes/"+ username +"/"+ appname +" --git-dir=/home/"+ username +"/"+ appname +".git checkout -f\" >> /home/"+ username +"/"+ appname + ".git/hooks/post-receive")

os.system("chmod +x /home/"+ username +"/"+ appname + ".git/hooks/post-receive")

# Update user dir /home permission after setup
os.system("sudo chown -R "+ username +":"+ username +" /home/"+ username)

# Update user dir /homes permission after setup
os.system("sudo chown -R "+ username +":"+ username +" /homes/"+ username)







