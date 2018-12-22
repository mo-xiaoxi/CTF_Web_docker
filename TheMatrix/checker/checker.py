#!/usr/bin/python2.7
# -*- coding: utf-8 -*-

import MySQLdb
import time
import requests
import selenium.webdriver
from selenium.webdriver.common.desired_capabilities import DesiredCapabilities
import os
import re


os.environ["QT_QPA_PLATFORM"] = "offscreen"
db = MySQLdb.connect('localhost','checker','yB2z51jw2qU5','web')
db.autocommit(True)
query_select = 'SELECT id,message FROM `feedbacks` WHERE is_checked = 0'
query_update = 'UPDATE `feedbacks` SET is_checked = 1 WHERE id = $id$'


login = "admin"
password = "0mgH@rdP@sS"
user_agent = 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:52.0) Gecko/20100101 Firefox/52.0'
admin_url = 'http://ctf.momomoxiaoxi.com/admin.php'


def check(url):
	response = requests.post(admin_url,
		data={'login':login,'password':password},
		headers={'User-Agent':user_agent})
	dcap = dict(DesiredCapabilities.PHANTOMJS)
	dcap["phantomjs.page.settings.userAgent"] = (user_agent)
	driver = selenium.webdriver.PhantomJS(desired_capabilities=dcap, service_log_path='/dev/null')
	driver.set_page_load_timeout(5)
	for cookie in response.cookies:
	    driver.add_cookie({
	    	'name': cookie.name,
	    	'value': cookie.value,
	    	'path': '/',
				'domain': '.' + cookie.domain
	    })
	driver.get(url)


while (True):
	cursor = db.cursor()
	try:
		cursor.execute(query_select)
		results = cursor.fetchall()
		print results
		for row in results:
			print row
			try:
				message = row[1]
				print message
				found = re.search('(?i)(http|https):\/\/([^ ]+)', message)
				if found:
					url = found.group(0)
					check(url)
			except Exception as e2:
				print 'except: %s' % e2
			query = query_update.replace('$id$',str(row[0]))
			cursor.execute(query)
			db.commit()
	except Exception as e:
		print 'exception: %s' % e
	time.sleep(1)


db.close()
