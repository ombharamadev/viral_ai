from tensorflow.keras.models import load_model
from tensorflow.keras.preprocessing import image
from tensorflow.keras.applications.inception_v3 import preprocess_input
import sys
import numpy as np

arr_sys = sys.argv
img_file = arr_sys[1]
url_id = arr_sys[2]
model=load_model('/home/aryan/_myproject/viral_ai_web3o.cloud/model_check/main/viral_ai/public/model/model_inception.h5')
img=image.load_img(img_file,target_size=(240,240))

x=image.img_to_array(img)
x.shape
x=x/255


x=np.expand_dims(x,axis=0)
img_data=preprocess_input(x)
img_data.shape

pred = model.predict(img_data)
#print(pred)
num_pred = pred[0]
arr_pred=np.argmax(model.predict(img_data), axis=1)
max_arr = arr_pred[0]
cat_js = ["0 to 1,000","10,000 to 25,000","1,000 to 5,000","25,000 to 50,000","Above 50,000 (Viral)","5,000 to 10,000"]

new_js = {
    "pred_1":str(int(pred[0][0]*100)),
    "pred_2":str(int(pred[0][1]*100)),
    "pred_3":str(int(pred[0][2]*100)),
    "pred_4":str(int(pred[0][3]*100)),
    "pred_5":str(int(pred[0][4]*100)),
    "pred_6":str(int(pred[0][5]*100)),
    "max_acc":str(int(num_pred[max_arr]*100)),
    "views":str(cat_js[max_arr])
    
}
import json
import requests
abc =  new_js
url = "http://localhost:8000/upload/ai?url_id="+str(url_id)+"&pred_1="+str(abc["pred_1"])+"&pred_2="+str(abc["pred_2"])+"&pred_3="+str(abc["pred_3"])+"&pred_4="+str(abc["pred_4"])+"&pred_5="+str(abc["pred_5"])+"&pred_6="+str(abc["pred_6"])+"&max_acc="+str(abc["max_acc"])+"&view="+str(abc["views"])+""
header = {
    "User-Agent":"Nasa"
}
data = requests.get(url,headers=header)


#cat wise 
#0 -> 0_1,000
#1 -> 10,000_25,000
#2 -> 1,000_5,000
#3 -> 25,000_50,000
#4 -> 50,000_100,000
#5 -> 5,000_10,000