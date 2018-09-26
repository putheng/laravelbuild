#!/usr/bin/env python3.6
import os
import sys

os.system("git init --bare /home/"+ sys.argv[1] +"/"+ sys.argv[2] + ".git")

os.system("touch /home/"+ sys.argv[1] +"/"+ sys.argv[2] + ".git/hooks/post-receive")

os.system("echo \"#!/bin/sh\" >> /home/"+ sys.argv[1] +"/"+ sys.argv[2] + ".git/hooks/post-receive")

os.system("echo \"git --work-tree=/homes/"+ sys.argv[1] +"/"+ sys.argv[2] +" --git-dir=/home/"+ sys.argv[1] +"/"+ sys.argv[2] +".git checkout -f\" >> /home/"+ sys.argv[1] +"/"+ sys.argv[2] + ".git/hooks/post-receive")

os.system("chmod +x /home/"+ sys.argv[1] +"/"+ sys.argv[2] + ".git/hooks/post-receive")