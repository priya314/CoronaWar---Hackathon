import xlrd
import requests
import json

loc = ("/home/subham/Solace/hospital_data.xls")
wb = xlrd.open_workbook(loc)
sheet = wb.sheet_by_index(0)
base_url = 'https://corona-tracker-22cc2.firebaseio.com/hospital_data/'
headers = {"content-type": "application/json; charset=UTF-8"}
for i in range(12, 163):
    hospital_name = sheet.cell_value(i, 1)
    hospital_address = sheet.cell_value(i, 2)
    hospital_state = sheet.cell_value(i, 3)
    hopital_contact = sheet.cell_value(i, 4)
    hopital_bed_vacant = sheet.cell_value(i, 7)
    hospital_update_time = sheet.cell_value(i, 14)
    hospital_index = (int(sheet.cell_value(i, 0)))
    hospital_ind = '000'
    if (hospital_index < 10):
        hospital_ind = '00' + str(hospital_index).replace("", '')
    elif (hospital_index >= 10 and hospital_index <= 99):
        hospital_ind = '0' + str(hospital_index).replace("", '')
    else:
        hospital_ind = str(hospital_index).replace("", '')
    print(
        requests.put(
            base_url +
            'hospital-' + hospital_ind +
            '/hospital_name.json',
            headers=headers,
            data=json.dumps(hospital_name).encode("utf-8")))
    print(
        requests.put(
            base_url +
            'hospital-' + hospital_ind +
            '/hospital_address.json',
            headers=headers,
            data=json.dumps(hospital_address).encode("utf-8")))
    print(
        requests.put(
            base_url +
            'hospital-' + hospital_ind +
            '/hopital_contact.json',
            headers=headers,
            data=json.dumps(hopital_contact).encode("utf-8")))
    print(
        requests.put(
            base_url +
            'hospital-' + hospital_ind +
            '/hopital_bed_vacant.json',
            headers=headers,
            data=json.dumps(hopital_bed_vacant).encode("utf-8")))
    print(
        requests.put(
            base_url +
            'hospital-' + hospital_ind +
            '/hospital_update_time.json',
            headers=headers,
            data=json.dumps(hospital_update_time).encode("utf-8")))
    print(
        requests.put(
            base_url +
            'hospital-' + hospital_ind +
            '/hospital_state.json',
            headers=headers,
            data=json.dumps(hospital_state).encode("utf-8")))
    print(hospital_ind + ' done')
