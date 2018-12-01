#!/usr/bin/python2.7
# -*- coding: utf-8 -*-

import MySQLdb
import time
import selenium.webdriver
from selenium.webdriver.common.desired_capabilities import DesiredCapabilities
import os
import re

from findpremd5 import getpremd5

os.environ["QT_QPA_PLATFORM"] = "offscreen"
db = MySQLdb.connect('localhost', 'root', 'Bctf2o18123$%^', 'bctf2018')
db.autocommit(True)
query_select = 'SELECT id,message FROM `feedbacks` WHERE is_checked = 0'
query_update = 'UPDATE `feedbacks` SET is_checked = 1 WHERE id = $id$'

username = "admin"
password = "m0xiaox1_BcTF_p@ss"
user_agent = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.77 Safari/537.36"
admin_url = 'http://ctf.momomoxiaoxi.com:9999/admin/index.php'
login_url = 'http://ctf.momomoxiaoxi.com:9999/login.php'
driver_url = 'http://selenium-firefox:4444/wd/hub'




def login(driver):
    driver.get(login_url)
    # username
    username_form = driver.find_element_by_xpath('//*[@id="username"]')
    username_form.send_keys(username)
    # password
    password_form = driver.find_element_by_xpath('//*[@id="userpwd"]')
    password_form.send_keys(password)
    # captcha
    captcha = driver.find_element_by_xpath('//*[@id="login_model"]/h2[3]').text
    captcha = captcha.split("SUBSTR(MD5($CODE),0,4) =='")[1].split("'")[0]
    try:
        answer = getpremd5(captcha)
        code_form = driver.find_element_by_xpath('//*[@id="code"]')
        code_form.send_keys(answer)
    except Exception as e:
        print("[-] code error:{}".format(e))
        return login(driver)
    # sign in
    signin_button = driver.find_element_by_xpath('//*[@id="button"]')
    signin_button.click()
    if driver.find_element_by_xpath('/html/body/div[4]/div/div/div[2]/ul/li[2]/a').text=='admin':
        print("[+] login succ!")
        return driver
    print("[-] login error!")
    time.sleep(2)
    return login(driver)


def check(url):
    driver = selenium.webdriver.Remote(command_executor=driver_url, desired_capabilities=DesiredCapabilities.FIREFOX)
    print("[+] driver init succ...")
    try:
        # driver = selenium.webdriver.Chrome()
        driver.implicitly_wait(10)
        driver = login(driver)
        driver.get(url)
        print("[+] get url:{}".format(url))
        time.sleep(20)
    except Exception as e:
        print('[-] check error : %s' % e)
    driver.quit()

while (True):
    cursor = db.cursor()
    try:
        cursor.execute(query_select)
        results = cursor.fetchall()
        if len(results):
            print("[+] New message: {}".format(results))
            for row in results:
                print("[+] row: {}".format(row))
                try:
                    message = row[1]
                    print("[+] message {}".format(message))
                    found = re.search('(?i)(http|https):\/\/([^ ]+)', message)
                    if found:
                        url = found.group(0)
                        print("[+] found url: {}".format(url))
                        check(url)
                except Exception as e2:
                    print('[-] except: %s' % e2)
                query = query_update.replace('$id$', str(row[0]))
                cursor.execute(query)
                db.commit()
        else:
            print("[+] waiting...")
    except Exception as e:
        print('[-] exception: %s' % e)
    time.sleep(1)

db.close()
