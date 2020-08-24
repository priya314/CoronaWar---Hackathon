 document.querySelector('.alert').style.display = 'none';
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




var messagesRef = firebase.database().ref('messages');
// var postID;


document.getElementById('patientForm').addEventListener('submit', submitForm);


function submitForm(e) {
	e.preventDefault();

	
	var name = getInputVal('name');
	var gender = $("input:radio[id=gender]:checked").val();
	var address = getInputVal('address');
	var pincode = getInputVal('pincode');
	var state = getInputVal('state');
	var age = $("input:radio[id=age]:checked").val();
	var phoneNumber = getInputVal('phoneNumber');
	var email = getInputVal('email');
	var noSymptom = $("input:radio[id=noSymptom]:checked").val();
	var fever = $("input:radio[id=fever]:checked").val();
	var tiredness = $("input:radio[id=tiredness]:checked").val();
	var dryCough = $("input:radio[id=dryCough]:checked").val();
	var difficultyBreathing = $("input:radio[id=difficultyBreathing]:checked").val();
	var soreThroat = $("input:radio[id=soreThroat]:checked").val();
	var pain = $("input:radio[id=pain]:checked").val();
	var nasalCongestion = $("input:radio[id=nasalCongestion]:checked").val();
	var runnyNose = $("input:radio[id=runnyNose]:checked").val();
	var diarrhea = $("input:radio[id=diarrhea]:checked").val();
	var noneExperiencing = $("input:radio[id=noneExperiencing]:checked").val();
	var textarea = getInputVal('textarea');
	



	
	var postID=saveMessage(name, gender, address, pincode, state, age, phoneNumber, email, noSymptom, fever, tiredness, dryCough, difficultyBreathing, soreThroat, pain, nasalCongestion, runnyNose, diarrhea, noneExperiencing, textarea);
    console.log("TOGETHER WE CAN WIN THIS WAR AGAINST CORONA");
	// // console.log(name);
	// // console.log(gender);
	// // console.log(address);
	// // console.log(pincode);
	// // console.log(state);
	// // console.log(age);
	// // console.log(phoneNumber);
	// // console.log(email);
	// // console.log(noSymptom);
	// // console.log(fever);
	// // console.log(tiredness);
	// // console.log(dryCough);
	// // console.log(difficultyBreathing);
	// // console.log(soreThroat);
	// // console.log(pain);
	// // console.log(nasalCongestion);
	// // console.log(runnyNose);
	// // console.log(diarrhea);
	// // console.log(noneExperiencing);
	// // console.log(textarea);

	 // Show alert
  document.querySelector('.alert').style.display = 'block';
  document.getElementById('newPostID').innerHTML = postID;

  // Hide alert after 3 seconds
  setTimeout(function(){
    document.querySelector('.alert').style.display = 'none';
  },600000);

  // Clear form
  document.getElementById('patientForm').reset();

}


function getInputVal(id) {
   return document.getElementById(id).value;

}


function saveMessage(name, gender, address, pincode, state, age, phoneNumber, email, noSymptom, fever, tiredness, dryCough, difficultyBreathing, soreThroat, pain, nasalCongestion, runnyNose, diarrhea, noneExperiencing, textarea) {
	var newMessageRef = messagesRef.push();
	 var postID = newMessageRef.key;
	 console.log(postID);
		newMessageRef.set({
			name:name,
			gender:gender,
			address:address,
			pincode:pincode,
			state:state,
			age:age,
			phoneNumber:phoneNumber,
			email:email,
			noSymptom:noSymptom,
			fever:fever,
			tiredness:tiredness,
			dryCough:dryCough,
			difficultyBreathing:difficultyBreathing,
			soreThroat:soreThroat,
			pain:pain,
			nasalCongestion:nasalCongestion,
			runnyNose:runnyNose,
			diarrhea:diarrhea,
			noneExperiencing:noneExperiencing,
			textarea:textarea
		});
	// myFunction(postID);
	return postID;
}


	// function myFunction() {
     
 //      // document.getElementById("myText").innerHTML = postID;
 //      console.log("TOGETHER WE CAN WIN THIS WAR AGAINST CORONA");
	// // console.log(name);
	// // console.log(gender);
	// // console.log(address);
	// // console.log(pincode);
	// // console.log(state);
	// // console.log(age);
	// // console.log(phoneNumber);
	// // console.log(email);
	// // console.log(noSymptom);
	// // console.log(fever);
	// // console.log(tiredness);
	// // console.log(dryCough);
	// // console.log(difficultyBreathing);
	// // console.log(soreThroat);
	// // console.log(pain);
	// // console.log(nasalCongestion);
	// // console.log(runnyNose);
	// // console.log(diarrhea);
	// // console.log(noneExperiencing);
	// // console.log(textarea);

	//  // Show alert
 //  document.querySelector('.alert').style.display = 'block';

 //  // Hide alert after 3 seconds
 //  setTimeout(function(){
 //    document.querySelector('.alert').style.display = 'none';
 //  },3000);

 //  // Clear form
 //  document.getElementById('patientForm').reset();
 //    }
