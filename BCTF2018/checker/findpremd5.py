# coding:utf-8
#/usr/bin/env python
import hashlib
import os
import json
BASE_DIR = os.path.dirname(os.path.abspath(__file__))

maxnum = 100000
prenum = 4
filename = BASE_DIR+'/tmppremd5.txt'

def check_init():
    if os.path.exists(filename):
        return 
    tmppremdlib = {}
    for i in range(maxnum):
        h = hashlib.md5(str(i)).hexdigest()[:prenum]
        tmppremdlib[h] = i
    fp = open(filename,'w')
    json.dump(tmppremdlib, fp)
    return 

def getpremd5(s):
    check_init()
    fp = open(filename,'r')
    tmppremdlib = json.load(fp)
    s = s.lower()
    return tmppremdlib[s]
