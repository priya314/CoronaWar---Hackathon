import numpy as np
import pandas as pd
from sklearn import preprocessing
from sklearn.preprocessing import StandardScaler
from sklearn.metrics import mean_squared_error 
from sklearn import linear_model
import matplotlib.pyplot as plt
import os
import seaborn as sns
import math
CoronaData = pd.read_csv('Cleaned-Data.csv')
CoronaData = CoronaData[:316800]
print(CoronaData.info())
ls
CoronaData.head()
CoronaData.head()
for i in range(316800):
    if CoronaData.at[i,"Severity_Moderate"] == 1:
        CoronaData.at[i,"Severity_Severe"]= 2
    elif CoronaData.at[i,"Severity_Mild"] == 1:
        CoronaData.at[i,"Severity_Severe"]= 3
    elif CoronaData.at[i,"Severity_None"] == 1:
        CoronaData.at[i,"Severity_Severe"]= 4
CoronaData.head()
CoronaData.describe()
CoronaData.columns
sns.countplot(x="Severity_Moderate",data=CoronaData)
print("patients"+str(len(CoronaData.index)))
sns.countplot(x="Severity_None",data=CoronaData)


