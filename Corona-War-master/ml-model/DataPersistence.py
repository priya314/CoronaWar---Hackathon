from sklearn.externals import joblib
joblib.dump(model,"joblib_modelv3")
jm=joblib.load("joblib_modelv3")
print(jm.predict(predict_data))