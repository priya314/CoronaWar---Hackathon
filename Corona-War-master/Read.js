
  var firebaseConfig = {
    apiKey: "AIzaSyDj2YripvJN9IBi94TffvkJut9Z1Gjqfj8",
    authDomain: "corona-tracker-22cc2.firebaseapp.com",
    databaseURL: "https://corona-tracker-22cc2.firebaseio.com",
    projectId: "corona-tracker-22cc2",
    storageBucket: "corona-tracker-22cc2.appspot.com",
    messagingSenderId: "734879244308",
    appId: "1:734879244308:web:57f8ab2ce275235e578701",
    measurementId: "G-J9SHDD94QW"
  };
  
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

function getdata() {

  var user = document.getElementById("user").value;

  firebase.database().ref('/messages/'+user).once('value').then(function (snapshot) {

    var names= (snapshot.val() && snapshot.val().inference)
    // var genders=(snapshot.val() && snapshot.val().recommended_hospitals)
    var suggestions=(snapshot.val() && snapshot.val().friendly_info)
    // var clinics=(snapshot.val() && snapshot.val().clinic)
    // var suggestions=(snapshot.val() && snapshot.val().suggestion)
    // var addresss=(snapshot.val() && snapshot.val().haddress)
    // var contacts=(snapshot.val() && snapshot.val().contact)
    // var beds=(snapshot.val() && snapshot.val().bed)


    document.getElementById("names").innerHTML=names;
    // document.getElementById("genders").innerHTML=genders;
    document.getElementById("suggestions").innerHTML=suggestions;
    // document.getElementById("clinics").innerHTML=clinics;
    // document.getElementById("suggestions").innerHTML=suggestions;
    // document.getElementById("addresss").innerHTML=addresss;
    // document.getElementById("contacts").innerHTML=contacts;
    // document.getElementById("beds").innerHTML=beds;
  })

  firebase.database().ref('/messages/'+user+'/recommended_hospitals/hospital-001').once('value').then(function (snapshot) {
    var genders=(snapshot.val() && snapshot.val().hospital_name)
    var h1address=(snapshot.val() && snapshot.val().hospital_address)
    var h1contact=(snapshot.val() && snapshot.val().hopital_contact)
    var h1bed=(snapshot.val() && snapshot.val().hopital_bed_vacant)

    document.getElementById("genders").innerHTML=genders;
    document.getElementById("h1address").innerHTML=h1address;
    document.getElementById("h1contact").innerHTML=h1contact;
    document.getElementById("h1bed").innerHTML=h1bed;
  })

  firebase.database().ref('/messages/'+user+'/recommended_hospitals/hospital-002').once('value').then(function (snapshot) {
    var h2name=(snapshot.val() && snapshot.val().hospital_name)
    var h2address=(snapshot.val() && snapshot.val().hospital_address)
    var h2contact=(snapshot.val() && snapshot.val().hopital_contact)
    var h2bed=(snapshot.val() && snapshot.val().hopital_bed_vacant)

    document.getElementById("h2name").innerHTML=h2name;
    document.getElementById("h2address").innerHTML=h2address;
    document.getElementById("h2contact").innerHTML=h2contact;
    document.getElementById("h2bed").innerHTML=h2bed;
  })

  firebase.database().ref('/messages/'+user+'/recommended_hospitals/hospital-003').once('value').then(function (snapshot) {
    var h3name=(snapshot.val() && snapshot.val().hospital_name)
    var h3address=(snapshot.val() && snapshot.val().hospital_address)
    var h3contact=(snapshot.val() && snapshot.val().hopital_contact)
    var h3bed=(snapshot.val() && snapshot.val().hopital_bed_vacant)

    document.getElementById("h3name").innerHTML=h3name;
    document.getElementById("h3address").innerHTML=h3address;
    document.getElementById("h3contact").innerHTML=h3contact;
    document.getElementById("h3bed").innerHTML=h3bed;
  })



}

