import json
import requests
import sys

js_data =""
with open('./feed/'+sys.argv[1], 'r') as f:
    js_data = json.load(f)

# for data in js_data:
requests.post('http://localhost:4000/api/product', json=js_data)

# requests.get("http://localhost:4000/api/product/categorizeProducts")