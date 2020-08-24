def display_scores(scores):
    print("Scores:", scores)
    print("Mean:", scores.mean())
    print("Standard deviation:", scores.std())


from xgboost import XGBRegressor


xgb =  XGBRegressor()
from sklearn.model_selection import cross_val_score


xforest_scores = cross_val_score(xgb,X_train,y_train ,
                                scoring="neg_mean_squared_error", cv=8)
xforest_rmse_scores = np.sqrt(-xforest_scores)
display_scores(xforest_rmse_scores)
X_train,X_test,y_train,y_test=train_test_split(X,y,test_size=0.5)
clf=svm.SVC(verbose=True)
clf.fit(X_train,y_train)
acc=clf.score(X_train,y_train)
print(acc)
train_preds=clf.predict(X_train)
test_preds=clf.predict(X_test)
clf=RandomForestClassifier()
clf.fit(X_train,y_train)
acc=clf.score(X_test,y_test)
print(acc)
train_preds=clf.predict(X_train)
test_preds=clf.predict(X_test)
print("cost of training model\n",metrics.confusion_matrix(y_train,train_preds))
print("cost of training model\n",metrics.classification_report(y_train,train_preds))
print("cost of testing model\n",metrics.confusion_matrix(y_test,test_preds))
print("cost of training model\n",metrics.classification_report(y_train,train_preds))
from sklearn.tree import DecisionTreeRegressor


tree_reg = DecisionTreeRegressor()
tree_reg.fit(X_train, y_train)
acc=tree_reg.score(X_test,y_test)
print(acc)
from xgboost import XGBRegressor


xgb =  XGBRegressor()
from sklearn.model_selection import cross_val_score


xforest_scores = cross_val_score(xgb, X_train, y_train,
                                scoring="neg_mean_squared_error", cv=8)
xforest_rmse_scores = np.sqrt(-xforest_scores)
display_scores(xforest_rmse_scores)
param_grid = [
    {'n_estimators': [3, 10, 30], 'max_features': [2, 4, 6, 8]},
    {'bootstrap': [False], 'n_estimators': [3, 10], 'max_features': [2, 3, 4]},
]


count = 0;
for i in [3, 10, 30]:
    for j in  [2, 4, 6, 8]:
        print("  %d <> %d" % (i, j) )
        count += 1
        


for k in [False]:
    for i in [3, 10]:
        for j in  [2, 3, 4]:
            print("  %d <> %d <> %s" % (i, j, k) )
            count += 1
print(count)
from sklearn.model_selection import GridSearchCV


param_grid = [
    {'n_estimators': [3, 10, 30], 'max_features': [2, 4, 6, 8]},
    {'bootstrap': [False], 'n_estimators': [3, 10], 'max_features': [2, 3, 4]},
]


forest_reg = RandomForestClassifier() 
grid_search = GridSearchCV(forest_reg, param_grid, cv=5,
                           scoring='neg_mean_squared_error')
grid_search.fit(X_train,y_train)
grid_search.best_params_
grid_search.best_estimator_
cvres = grid_search.cv_results_
for mean_score, params in zip(cvres["mean_test_score"], cvres["params"]):
    print(np.sqrt(-mean_score), params)
from sklearn.model_selection import RandomizedSearchCV
from scipy.stats import randint


param_distribs = {
        'n_estimators': randint(low=1, high=200),
        'max_features': randint(low=1, high=8),
    }


forest_reg = RandomForestClassifier(random_state=42)
rnd_search = RandomizedSearchCV(forest_reg, param_distributions=param_distribs,
                                n_iter=1, cv=8, scoring='neg_mean_squared_error', random_state=42)
rnd_search.fit(X_train,y_train)
feature_importances = grid_search.best_estimator_.feature_importances_
print(feature_importances)
clf=RandomForestClassifier(bootstrap=False, ccp_alpha=0.0, class_weight=None,
                       criterion='gini', max_depth=None, max_features=2,
                       max_leaf_nodes=None, max_samples=None,
                       min_impurity_decrease=0.0, min_impurity_split=None,
                       min_samples_leaf=1, min_samples_split=2,
                       min_weight_fraction_leaf=0.0, n_estimators=3,
                       n_jobs=None, oob_score=False, random_state=None,
                       verbose=0, warm_start=False)
clf.fit(X_train,y_train)
acc=clf.score(X_test,y_test)
print(acc)
train_preds=clf.predict(X_train)
test_preds=clf.predict(X_test)
print("cost of training model\n",metrics.confusion_matrix(y_train,train_preds))
print("cost of training model\n",metrics.classification_report(y_train,train_preds))
print("cost of testing model\n",metrics.confusion_matrix(y_test,test_preds))
print("cost of training model\n",metrics.classification_report(y_train,train_preds))