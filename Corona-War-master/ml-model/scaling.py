sns.countplot(x="Severity_Moderate",data=CoronaData)
sns.countplot(x="Severity_Severe",data=CoronaData)
sns.countplot(x="Severity_None",data=CoronaData)
sns.countplot(x="Severity_None",hue="Gender_Female",data=CoronaData)
sns.countplot(x="Severity_None",hue="Gender_Male",data=CoronaData)
sns.countplot(x="Severity_None",hue="Gender_Transgender",data=CoronaData)
sns.countplot(x="Severity_None",hue="Gender_Transgender",data=CoronaData)
sns.countplot(x="Severity_Severe",hue="None_Sympton",data=CoronaData)
sns.countplot(x="Severity_Severe",hue="Country",data=CoronaData)
CoronaData.drop(["Country","Contact_Dont-Know","Contact_No","Contact_Yes"],axis=1,inplace=True)
CoronaData.head()
sns.heatmap(CoronaData.corr())
input_features=['Fever', 'Tiredness', 'Dry-Cough', 'Difficulty-in-Breathing',
       'Sore-Throat', 'None_Sympton', 'Pains', 'Nasal-Congestion',
       'Runny-Nose', 'Diarrhea', 'None_Experiencing', 'Age_0-9', 'Age_10-19',
       'Age_20-24', 'Age_25-59', 'Age_60+', 'Gender_Female', 'Gender_Male',
       'Gender_Transgender']
for feature in input_features:
    plt.hist(CoronaData[feature],bins=10)
    plt.show()
for feature in input_features:
    CoronaData[feature]=np.log(CoronaData[feature])
CoronaData
for feature in CoronaData.columns:
    print(Counter(CoronaData[feature]))
for feature in input_features:
    plt.hist(CoronaData[feature],bins=20)
    plt.show()
scaler=preprocessing.StandardScaler()
X=CoronaData.drop(['Severity_Severe'],axis=1)
y=np.array(CoronaData['Severity_Severe'])
scaler.fit(X)
X=scaler.transform(X)
X