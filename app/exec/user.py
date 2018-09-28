#!/usr/bin/env python3.5
import os
import uuid
import sys
#sys.argv[1]

os.system('useradd -m -d /home/'+ sys.argv[1] +' '+ sys.argv[1] +'');

os.system("usermod -a -G git "+ sys.argv[1])