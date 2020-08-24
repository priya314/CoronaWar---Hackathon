import requests
import json
from twilio.rest import Client
from joblib import load
from sendgrid import SendGridAPIClient
from sendgrid.helpers.mail import Mail

account_sid = 'ACb064b11f5a39b82f2be5d0370becdeb6'
auth_token = '038790990e9a138840a7b1515c6d99a2'
client = Client(account_sid, auth_token)
SENDGRID_API_KEY = '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'
r = requests.get(
    "https://corona-tracker-22cc2.firebaseio.com/messages.json?orderBy=%22$key%22&limitToLast=1")
keys = r.json()
predict_data = [[]]
phone_num = "trial"
key_data = "asdasd"
patient_name = "Default"
patient_email = "default@gmail.com"
headers = {"content-type": "application/json; charset=UTF-8"}
for key in keys:
    key_data = key
    fever = int(keys[key]['fever'])
    patient_name = keys[key]['name']
    patient_email = keys[key]['email']
    tiredness = int(keys[key]['tiredness'])
    dry_cough = int(keys[key]['dryCough'])
    difficult_breathing = int(keys[key]['difficultyBreathing'])
    sore_throat = int(keys[key]['soreThroat'])
    no_symptom = int(keys[key]['noSymptom'])
    pains = int(keys[key]['pain'])
    nasal_cong = int(keys[key]['nasalCongestion'])
    runny_nose = int(keys[key]['runnyNose'])
    diarrhea = int(keys[key]['diarrhea'])
    none_exp = int(keys[key]['noneExperiencing'])
    age = keys[key]['age']
    phone_num = "+91" + keys[key]['phoneNumber']
    age_0_9 = 0
    age_10_19 = 0
    age_20_24 = 0
    age_25_59 = 0
    age_60 = 0
    if (age == "0-9"):
        age_0_9 = 1
    elif (age == "10-19"):
        age_10_19 = 1
    elif (age == "20-24"):
        age_20_24 = 1
    elif (age == "25-59"):
        age_25_59 = 1
    elif (age == "60+"):
        age_60 = 1
    gender = keys[key]['gender']
    gender_m = 0
    gender_f = 0
    gender_n = 0
    if (gender == "Male"):
        gender_m = 1
    elif (age == "Female"):
        gender_f = 1
    elif (age == "Transgender"):
        gender_n = 1
    predict_data = [[fever,
                     tiredness,
                     dry_cough,
                     difficult_breathing,
                     sore_throat,
                     no_symptom,
                     pains,
                     nasal_cong,
                     runny_nose,
                     diarrhea,
                     none_exp,
                     age_0_9,
                     age_10_19,
                     age_20_24,
                     age_25_59,
                     age_60,
                     gender_m,
                     gender_f,
                     gender_n]]
print(key_data)
message = client.messages.create(
    body='Hello ' + patient_name + ', The key is : ' + key_data,
    from_='+12057075331',
    to=phone_num
)
message = Mail(
    from_email='subhamagrawal861@gmail.com',
    to_emails=patient_email,
    subject='Key Details',
    html_content='<p>Hello, ' +
    patient_name +
    '</p> <p><br></p> <p>Greetings from Team Solace</p> <p><br></p> <p>Your unique key id is : ' +
    key_data +
    '</p> <p><br></p> <p>Have a good day.</p> <p><br></p> <p>Your Friends</p> <p>Team Solace</p>')
sg = SendGridAPIClient(SENDGRID_API_KEY)
response = sg.send(message)
print (response.status_code)
model = load('joblib_modelv2')
inference = (model.predict(predict_data))[0]
severeity = "None"
friendly_cmd = "trial"
if (inference == 1):
    severeity = "Severe"
    friendly_cmd = "Please look for our suggestions regarding the hospitals in the interface. Thank You."
    r = requests.get(
        "https://corona-tracker-22cc2.firebaseio.com/hospital_data/hospital-001.json")
    hospitals = r.json()
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-001/hospital_name.json',
            headers=headers,
            data=json.dumps(
                hospitals['hospital_name']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-001/hopital_contact.json',
            headers=headers,
            data=json.dumps(
                hospitals['hopital_contact']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-001/hospital_address.json',
            headers=headers,
            data=json.dumps(
                hospitals['hospital_address']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-001/hopital_bed_vacant.json',
            headers=headers,
            data=json.dumps(
                hospitals['hopital_bed_vacant']).encode("utf-8")))
    r = requests.get(
        "https://corona-tracker-22cc2.firebaseio.com/hospital_data/hospital-002.json")
    hospitals = r.json()
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-002/hospital_name.json',
            headers=headers,
            data=json.dumps(
                hospitals['hospital_name']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-002/hopital_contact.json',
            headers=headers,
            data=json.dumps(
                hospitals['hopital_contact']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-002/hospital_address.json',
            headers=headers,
            data=json.dumps(
                hospitals['hospital_address']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-002/hopital_bed_vacant.json',
            headers=headers,
            data=json.dumps(
                hospitals['hopital_bed_vacant']).encode("utf-8")))
    r = requests.get(
        "https://corona-tracker-22cc2.firebaseio.com/hospital_data/hospital-003.json")
    hospitals = r.json()
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-003/hospital_name.json',
            headers=headers,
            data=json.dumps(
                hospitals['hospital_name']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-003/hopital_contact.json',
            headers=headers,
            data=json.dumps(
                hospitals['hopital_contact']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-003/hospital_address.json',
            headers=headers,
            data=json.dumps(
                hospitals['hospital_address']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-003/hopital_bed_vacant.json',
            headers=headers,
            data=json.dumps(
                hospitals['hopital_bed_vacant']).encode("utf-8")))
elif (inference == 2):
    severeity = "Moderate"
    friendly_cmd = "Please look for our suggestions regarding the hospitals in the interface. Thank You."
    r = requests.get(
        "https://corona-tracker-22cc2.firebaseio.com/hospital_data/hospital-011.json")
    hospitals = r.json()
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-001/hospital_name.json',
            headers=headers,
            data=json.dumps(
                hospitals['hospital_name']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-001/hopital_contact.json',
            headers=headers,
            data=json.dumps(
                hospitals['hopital_contact']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-001/hospital_address.json',
            headers=headers,
            data=json.dumps(
                hospitals['hospital_address']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-001/hopital_bed_vacant.json',
            headers=headers,
            data=json.dumps(
                hospitals['hopital_bed_vacant']).encode("utf-8")))
    r = requests.get(
        "https://corona-tracker-22cc2.firebaseio.com/hospital_data/hospital-012.json")
    hospitals = r.json()
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-002/hospital_name.json',
            headers=headers,
            data=json.dumps(
                hospitals['hospital_name']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-002/hopital_contact.json',
            headers=headers,
            data=json.dumps(
                hospitals['hopital_contact']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-002/hospital_address.json',
            headers=headers,
            data=json.dumps(
                hospitals['hospital_address']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-002/hopital_bed_vacant.json',
            headers=headers,
            data=json.dumps(
                hospitals['hopital_bed_vacant']).encode("utf-8")))
    r = requests.get(
        "https://corona-tracker-22cc2.firebaseio.com/hospital_data/hospital-013.json")
    hospitals = r.json()
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-003/hospital_name.json',
            headers=headers,
            data=json.dumps(
                hospitals['hospital_name']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-003/hopital_contact.json',
            headers=headers,
            data=json.dumps(
                hospitals['hopital_contact']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-003/hospital_address.json',
            headers=headers,
            data=json.dumps(
                hospitals['hospital_address']).encode("utf-8")))
    print(
        requests.put(
            'https://corona-tracker-22cc2.firebaseio.com/messages/' +
            key_data +
            '/recommended_hospitals/hospital-003/hopital_bed_vacant.json',
            headers=headers,
            data=json.dumps(
                hospitals['hopital_bed_vacant']).encode("utf-8")))
elif (inference == 3):
    severeity = "Mild"
    friendly_cmd = "You are safe right now. But be careful and follow government procedures for home quarantine, just in case !!"
elif (inference == 4):
    severeity = "No Risk"
    friendly_cmd = "Hey, You are fit and ready to rock and roll. But do  your part in going through this crisis by staying at home."
print(
    requests.put(
        'https://corona-tracker-22cc2.firebaseio.com/messages/' +
        key_data +
        '/inference.json',
        headers=headers,
        data=json.dumps(
            severeity).encode("utf-8")))
print(
    requests.put(
        'https://corona-tracker-22cc2.firebaseio.com/messages/' +
        key_data +
        '/friendly_info.json',
        headers=headers,
        data=json.dumps(
            friendly_cmd).encode("utf-8")))
message = client.messages.create(
    body='Hello ' + patient_name +
    ', The inference is ready. Please check the results in the website. Thank You from Team Solace',
    from_='+12057075331', to=phone_num)
message = Mail(
    from_email='subhamagrawal861@gmail.com',
    to_emails=patient_email,
    subject='Inference Updates',
    html_content='<p>Hello, ' +
    patient_name +
    '</p> <p><br></p> <p>Greetings from Team Solace</p> <p><br></p> <p>Your Inference has been updated in the webiste. Please have a look using your key - ' +
    key_data +
    '</p> <p><br></p> <p>Have a good day.</p> <p><br></p> <p>Your Friends</p> <p>Team Solace</p>')
sg = SendGridAPIClient(SENDGRID_API_KEY)
response = sg.send(message)
print (response.status_code)
