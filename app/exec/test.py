#!/usr/bin/env python3.6
import os
import sys

os.system("cd /home/"+ sys.argv[1] +"/"+ sys.argv[2] + ".git")

os.system("git init --bare")

os.system("touch hooks/post-receive")

os.system("echo \"#!/bin/sh\" >> hooks/post-receive")

os.system("echo \"git --work-tree=/homes/"+ sys.argv[1] +"/"+ sys.argv[2] +" --git-dir=/home/"+ sys.argv[1] +"/"+ sys.argv[2] +".git checkout -f\" >> hooks/post-receive")

os.system("chmod +x hooks/post-receive")