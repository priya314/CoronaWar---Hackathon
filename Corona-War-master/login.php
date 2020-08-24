<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/e034c117a5.js" crossorigin="anonymous"></script>
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:900&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa8HeLH2lQMbPeOiMlM9D1VxZ7pbGQq8o&callback=initMap" async defer></script>

  <link rel="stylesheet" href="css/styles.css">
</head>

<body >
  <!-- navbar -->
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
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#symptoms">symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#prevention">Prevention</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#stats" >Stats</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="form.php">Form</a>
        </li>
        <li class="nav-item">
           <div id="google_translate_element" ></div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="row login-container">
  <div class="col-xs-12 col-md-6">
  <form action="">
    <input type="text">
    <input type="password" name="" id="">
    <button type="submit">login</button>
  </form>
  </div>

  </div>

 

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
 <script type="text/javascript">

  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
  </script>
  </body>
  </html>