<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<script src="https://kit.fontawesome.com/e034c117a5.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:900&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa8HeLH2lQMbPeOiMlM9D1VxZ7pbGQq8o&callback=initMap" async defer></script>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
 <script src="http://code.jquery.com/jquery-1.5.js"></script>
 <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- CSS only -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->

<!-- JS, Popper.js, and jQuery -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->
<!------ Include the above in your HEAD tag ---------->

<!-- Social Footer, Colour Matching Icons -->
<!-- Include Font Awesome Stylesheet in Header -->
<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/glyphicon.css">

  </head>
  <body>
  <script type="text/javascript">
  $(document).ready(function() {
    var text_max = 3000;
    $('#textarea_feedback').html(text_max + ' characters remaining');

    $('#textarea').keyup(function() {
        var text_length = $('#textarea').val().length;
        var text_remaining = text_max - text_length;

        $('#textarea_feedback').html(text_remaining + ' characters remaining');
    });
});
</script>
    <nav id="navbar-example2" class="navbar fixed-top navbar-expand-lg nav navbar-dark bg-dark rel" style="background-color: #01091c !important">
      <a class="navbar-brand" href="#">
        <img src="img/srm.png" alt="" id="logo">

      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#symp">Symptoms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#symp">Prevention</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#stats" >Stats</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="store.php">Store</a>
          </li>
          <li class="nav-item">
          <a class="nav-link " href="stat.php">View Status</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="work.php">VIP Portal</a>
        </li>
          <li class="nav-item">
             <div id="google_translate_element" ></div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="containerr container ">
    <h1 style="color: #00b7c2;text-align:center">Patient Form</h1>
         </div>
    <div class="container  center-form">
      <!-- <h2>Patient Details:- </h2> -->
      <br>
      <form class="Details" method="post" id="patientForm">

          <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="name">Name</label>
             <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="name" name="name" placeholder="Enter Full Name here..." class="form-control" required="true" value="" type="text"></div>
                              </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="gender">Gender</label>
            <label class="radio-inline">
        <input id="gender" type="radio" name="gender" value='Male' checked>Male
      </label>
      <label class="radio-inline">
        <input id="gender" type="radio" name="gender" value="Female" >Female
      </label>
      <label class="radio-inline">
        <input id="gender" type="radio" name="gender" value="Transgender" >Transgender
      </label>
          </div>

          <div class="form-group row">
          <label class="col-sm-4 col-form-label" for="address">Address</label>
                                      <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="address" name="address" placeholder="Enter Address here..." class="form-control" required="true" value="" type="text"></div>
                              </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-4 col-form-label" for="pincode">Pincode</label>
                                      <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="pincode" name="pincode" placeholder="Enter Pincode here..." class="form-control" required="true" value="" type="text"></div>
                              </div>
        </div>

          <div class="form-group row">
          <label class="col-sm-4 col-form-label" for="sell">State</label>
          <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group">
                                    <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                    <select class="selectpicker form-control" name='state' id="state">
                                       <option>Andhra Pradesh</option>
                                       <option>Arunachal Pradesh</option>
                                       <option>Assam</option>
                                       <option>Bihar</option>
                                       <option>Chhatisgarh</option>
                                       <option>Goa</option>
                                       <option>Gujarat</option>
                                       <option>Haryana</option>
                                       <option>Himachal Pradesh</option>
                                       <option>Jammu and KAshmir</option>
                                       <option>Jharkhand</option>
                                       <option>Karnataka</option>
                                       <option>Kerala</option>
                                       <option>Madhya Pradesh</option>
                                       <option>Maharashtra</option>
                                       <option>Manipur</option>
                                       <option>Meghalaya</option>
                                       <option>Mizoram</option>
                                       <option>Nagaland</option>
                                       <option>Odisha</option>
                                       <option>Punjab</option>
                                       <option>Rajasthan</option>
                                       <option>Sikkim</option>
                                       <option>Tamil Nadu</option>
                                       <option>Telangana</option>
                                       <option>Tripura</option>
                                       <option>Uttar Pradesh</option>
                                       <option>Uttarakhand</option>
                                       <option>West Bengal</option>
                                    </select>
                                 </div>
                              </div>
        </div>
        <div class="form-group row">

            <label class="col-sm-4 col-form-label" for="age">Age Group</label>
            <label class="radio-inline">
        <input id="age" type="radio" name="age" value = "0-9" checked>0-9
      </label>
      <label class="radio-inline">
        <input id="age" type="radio" name="age" value="10-19" >10-19
      </label>
       <label class="radio-inline">
        <input id="age" type="radio" name="age" value="20-24" >20-24
      </label>
       <label class="radio-inline">
        <input id="age" type="radio" name="age" value="25-59" >25-59
      </label>
      <label class="radio-inline">
        <input id="age" type="radio" name="age" value="60+" >60+
      </label>
          </div>




          <div class="form-group row">
          <label class="col-sm-4 col-form-label" for="phono">Phone Number</label>
          <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="phone" placeholder="Enter Phone Number here..." class="form-control" required="true" type="text"></div>
                              </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-4 col-form-label" for="email">Email-ID</label>
           <div class="col-md-8 inputGroupContainer">
                                 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Enter Email here.." class="form-control" required="true" type="email"></div>
                              </div>
                          </div>

                          <h1 style="color: #00b7c2;text-align:center; width:100%; margin:30px 0"> Symptoms</h2>
                          <div class="form-group row">
              
              <!-- <br /> -->
            <label class="col-sm-4 col-form-label" for="no_symptoms">No Symptoms</label>
            <label class="radio-inline">
        <input id="noSymptom" type="radio" name="no_symptoms" value = "0" checked>No
      </label>
      <label class="radio-inline">
        <input id="noSymptom" type="radio" name="no_symptoms" value="1" >Yes
      </label>
    </div>

                          <div class="form-group row">
            <label class="col-sm-4 col-form-label" for="fever">Fever</label>
            <label class="radio-inline">
        <input id="fever" type="radio" name="fever" value = "0" checked>No
      </label>
      <label class="radio-inline">
        <input id="fever" type="radio" name="fever" value="1" >Yes
      </label>
    </div>
    <div class="form-group row">
      <label class="col-sm-4 col-form-label" for="tiredness">Tiredness</label>
            <label class="radio-inline">
        <input id="tiredness" type="radio" name="tiredness" value = "0" checked>No
      </label>
      <label class="radio-inline">
        <input id="tiredness" type="radio" name="tiredness" value="1" >Yes
      </label>
    </div>
    <div class="form-group row">
      <label class="col-sm-4 col-form-label" for="dry_cough">Dry Cough</label>
            <label class="radio-inline">
        <input id="dryCough" type="radio" name="dry_cough" value = "0" checked>No
      </label>
      <label class="radio-inline">
        <input id="dryCough" type="radio" name="dry_cough" value="1" >Yes
      </label>
    </div>
      <div class="form-group row">
      <label class="col-sm-4 col-form-label" for="difficulty_in_breathing">Difficulty in breathing</label>
            <label class="radio-inline">
        <input id="difficultyBreathing" type="radio" name="difficulty_in_breathing" value = "0" checked>No
      </label>
      <label class="radio-inline">
        <input id="difficultyBreathing" type="radio" name="difficulty_in_breathing" value="1" >Yes
      </label>
    </div>
     <div class="form-group row">
      <label class="col-sm-4 col-form-label" for="sore_throat">Sore Throat</label>
            <label class="radio-inline">
        <input id="soreThroat" type="radio" name="sore_throat" value = "0" checked>No
      </label>
      <label class="radio-inline">
        <input id="soreThroat" type="radio" name="sore_throat" value="1" >Yes
      </label>
    </div>
    <div class="form-group row">
      <label class="col-sm-4 col-form-label" for="pain">Pain</label>
            <label class="radio-inline">
        <input id="pain" type="radio" name="pain" value = "0" checked>No
      </label>
      <label class="radio-inline">
        <input id="pain" type="radio" name="pain" value="1" >Yes
      </label>
    </div>
    <div class="form-group row">
      <label class="col-sm-4 col-form-label" for="nasal_congestion">Nasal Congestion</label>
            <label class="radio-inline">
        <input id="nasalCongestion" type="radio" name="nasal_congestion" value = "0" checked>No
      </label>
      <label class="radio-inline">
        <input id="nasalCongestion" type="radio" name="nasal_congestion" value="1" >Yes
      </label>
    </div>
    <div class="form-group row">
      <label class="col-sm-4 col-form-label" for="runny_nose">Runny Nose</label>
            <label class="radio-inline">
        <input id="runnyNose" type="radio" name="runny_nose" value = "0" checked>No
      </label>
      <label class="radio-inline">
        <input id="runnyNose" type="radio" name="runny_nose" value="1" >Yes
      </label>
    </div>
      <div class="form-group row">
      <label class="col-sm-4 col-form-label" for="diarrhea">Diarrhea</label>
            <label class="radio-inline">
        <input id="diarrhea" type="radio" name="diarrhea" value = "0" checked>No
      </label>
      <label class="radio-inline">
        <input id="diarrhea" type="radio" name="diarrhea" value="1" >Yes
      </label>
    </div>
       <div class="form-group row">
      <label class="col-sm-4 col-form-label" for="none_experiencing">None Experiencing</label>
            <label class="radio-inline">
        <input id="noneExperiencing" type="radio" name="none_experiencing" value = "0" checked>No
      </label>
      <label class="radio-inline">
        <input id="noneExperiencing" type="radio" name="none_experiencing" value="1" >Yes
      </label>
    </div>




                          <!-- <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="textarea">Enter your request here</label> -->
    <div style="margin-left:200px"class="col-xs-5">
                      <textarea id="textarea" class="form-control"rows="8" cols="80" maxlength="3000" name="question" placeholder = "Enter your query here..." required="true"></textarea>
    <div id="textarea_feedback"></div>


                                      </div>
                                      <br>
                          <!-- </div> -->
                          <div class="form-group row">
        <div class="col-sm-offset-4 col-sm-10" style="text-align:center">
          <button id="submit" type="submit" class="btn btn-primary" name="submit">Submit</button>
          <button type="reset" class="btn btn-primary">Reset</button>
          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13447.133591780499!2d80.9108633809512!3d26.829400928546686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfdc8bfb928d5%3A0x9f9163ace7ebaf6c!2sCharbagh%2C%20Lucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1591027989869!5m2!1sen!2sin" width="400" height="400" frameborder="0" style="border:0; margin-left: 50px"  aria-hidden="false" tabindex="0"></iframe> -->
        </div>
    </div>




    </div>

      </form>
      <div class="alert">Your response has been recorded. Your ID is : [<span style="font-size: 1.2em; color: rgb(227,216,114)"  id="newPostID"></span>]. Please copy this and save it somewhere. Our AI model would process your symptoms and your result will be generated in a couple of minutes. You can check your results in the "View Status" page. Our team works with 100% efficiency towards bringing SOLACE to you in this time of pandemic.</div>
    </div>
    <br>
    
       <iframe width="1024" height="576" style="margin-left: 200px" src="https://app.developer.here.com/coronavirus/" frameborder="0"></iframe> 
    <div class="row footer" id="contact">
      <div class=" col-xs-12 col-md-12 footer-top">
        <ul>
        <li> <a href="#"> <i class="fas fa-envelope"></i></li></a>
        <li>  <a href="#"><i class="fab fa-twitter"></i></li></a>
          <li> <a href="#"><i class="fab fa-facebook"></i></li></a>
          <li> <a href="#"><i class="fab fa-instagram"></i></li></a>

        </ul>


      </div>


      <div class="col-xs-12 col-md-12 footer-bottom">
 <p>Made with ❤️   &#xa9;2020 Solace</p>
  </div>
</div>

    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-database.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <!-- <script type="text/javascript" src="scripts/script.js"></script> -->
    <script type="text/javascript">

    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  </body>
</html>
