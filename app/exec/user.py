#!/usr/bin/env python3.5
import os
import sys

username = sys.argv[1]

os.system("sudo mkdir -p /home/"+ username)
# Create user home/user directory

os.system('sudo useradd -m -d /home/'+ username +' '+ username +'')
# Create user and assign home directory

#os.system("sudo usermod -a -G git "+ username)
# Assign user to Git group

os.system("sudo chown -R "+ username +":"+ username +" /home/"+ username)
# Assign owner homes dir to directory to user

os.system("sudo mkdir -p /homes/"+ username)
# Create user homes/user directory for Nginx

os.system("sudo chown -R "+ username +":"+ username +" /homes/"+ username)
# Assign owner homes dir to directory to user