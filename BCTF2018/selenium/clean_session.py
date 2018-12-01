import requests
import json
import time

# base_url = "http://seafaring.xctf.org.cn:4444"
base_url = "http://127.0.0.1:4444"


def get_all_sessions_id():
    target_url = base_url + '/wd/hub/sessions'
    session = requests.Session()
    response = session.get(target_url)
    assert response.status_code == 200
    # print("Status code:   %i" % response.status_code)
    # print("Response body: %s" % response.content)
    data = json.loads(response.content)
    ids = []
    for d in data['value']:
        ids.append(d['id'])
    return ids


def get_session_url(id):
    target_url = base_url + '/wd/hub/session/{}/url'.format(id)
    session = requests.Session()
    response = session.get(target_url)
    assert response.status_code == 200
    print("Status code:   %i" % response.status_code)
    print("Response body: %s" % response.content)


def clean_session(id):
    session = requests.Session()
    headers = {"Accept": "application/json; charset=utf-8",
               "User-Agent": "Mozilla/5.0 (Android 9.0; Mobile; rv:61.0) Gecko/61.0 Firefox/61.0",
               "Referer": "http://dbseafaring.xctf.org.cn:4444/wd/hub/static/resource/hub.html", "Connection": "close",
               "Accept-Language": "zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3", "DNT": "1",
               "Content-Type": "text/plain;charset=UTF-8"}

    response = session.delete(base_url+"/wd/hub/session/{}".format(id),
                              headers=headers)
    print("Status code:   %i" % response.status_code)
    print("Response body: %s" % response.content)

while True:
    ids = get_all_sessions_id()
    for i in ids:
        clean_session(i)
    break
    time.sleep(10*60)

    
