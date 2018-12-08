# from flask import Flask, request, jsonify, json
#
#
# app = Flask(__name__)
#
#
# @app.route('/', methods = ['GET', 'POST'])
# def hello_world():
#
#
# if __name__ == '__main__':
#     app.run()

from flask import Flask
from flask import request
import boto3
import json

app = Flask(__name__)


@app.route('/', methods=['POST'])
def postJsonHandler():
    print (request.is_json)
    content = request.get_json()
    text = content['search']
    print (text)

    comprehend = boto3.client(service_name='comprehend', region_name='us-east-2')
    # text = "It is raining today in Seattle"

    print('Calling DetectEntities')
    return (json.dumps(comprehend.detect_entities(Text=text, LanguageCode='en'), sort_keys=True, indent=4))

app.run(host='0.0.0.0', port=5000)