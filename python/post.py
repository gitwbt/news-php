import  json
import requests

def post():
    url = 'http://news.aaja.co/api/news.php';
    payload = {
        "nid": "1254",
        "title":"From python",
        "description":"testing",
        "image":"https://assets-cdn.ekantipur.com/images/third-party/entertainment/Bijaya-10052019013422-600x0.jpg",
        "publish":"true",
    }
    headers = {'Content-Type': 'application/json', 'user-agent':''}
    r = requests.post(url=url, data=payload, headers=headers)
    print('hello', r);

post();