<?php //include 'header.php';?>
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
  <body >

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
            <a class="nav-link " href="#contact">Contact</a>
          </li>
           <li class="nav-item">
            <a class="nav-link " href="form.php">form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="store.php">Store</a>
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
    <div class="sunrise">
<section class="row form-cont">
	<div class="submit-form col-xs-12 col-sm-3">
		<h2>Enter User  ID </h2>
		<input type ="text" id="user" required="required"><br>
		 <button style="margin-top:10px" id="submit" type="submit" class="btn btn-primary" name="submit" onclick="getdata();">Search..</button>
      </div>
    </section>
   <div class="col-xs-12 col-md-12">
    <p style="margin-top:50px; text-align:center">Susceptibility Rate:  <strong id="names"></strong></p><br>
  </div> 
<section class="row form-contt card-deck">
  

  <div class="card col-xs-12 col-sm-4 result-card" >
  <div class="card-header" style="font-size:1.4rem;">
    Results
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><p>Hospital 1 - name:  <strong id="genders"></strong></p></li>
    <li class="list-group-item">	<p>Hospital 1 - address: <strong id="h1address"></strong></p></li>
    <li class="list-group-item">	<p>Hospital 1 - contact no: <strong id="h1contact"></strong></p>
</li>
<li class="list-group-item">		<p>Hospital 1 - bed count: <strong id="h1bed"></strong></p>
</li>
  </ul>
</div>
<div class="card col-xs-12 col-sm-4 result-card" >
  <div class="card-header" style="font-size:1.4rem;">
    Results
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">	<p>Hospital 2 - name: <strong id="h2name"></strong></p>
</li>
    <li class="list-group-item">		<p>Hospital 2 - address: <strong id="h2address"></strong></p></li>
    <li class="list-group-item">	<p>Hospital 2 - contact no: <strong id="h2contact"></strong></p>

</li>
<li class="list-group-item">	<p>Hospital 2 - bed count: <strong id="h2bed"></strong></p>

</li>
  </ul>
</div>
<div class="card col-xs-12 col-sm-4 result-card" >
  <div class="card-header" style="font-size:1.4rem;">
    Results
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">	<p>Hospital 3 - name: <strong id="h3name"></strong></p>

</li>
    <li class="list-group-item">		<p>Hospital 3 - address: <strong id="h3address"></strong></p>
</li>
    <li class="list-group-item">	<p>Hospital 3 - contact no: <strong id="h3contact"></strong></p>

</li>
<li class="list-group-item">	<p>Hospital 3 - bed count: <strong id="h3bed"></strong></p>


</li>
  </ul>
</div>
<div class="col-xs-12 col-sm-12" style="text-align:center;margin-top:20px">
  	<p>Suggestions : <strong id="suggestions"></strong></p>

</div>
	<!-- <p style="margin-top:50px">Corona?:  <strong id="names"></strong></p><br>
	<p>Hospital:  <strong id="genders"></strong></p><br>
	<p>Doctor:  <strong id="ages"></strong></p><br> -->

</section>
</div>

<!-- <iframe style="width:120px;height:240px;margin-top: -10px;margin-bottom: 20px; margin-left: 520px" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=ayoun8100-21&marketplace=amazon&region=IN&placement=B0899S5DNN&asins=B0899S5DNN&linkId=e4eedfb11cc409ba48a84f6c57dede3f&show_border=true&link_opens_in_new_window=true"></iframe>
<iframe style="width:120px;height:240px;margin-top: -10px;margin-bottom: 20px; margin-left: 150px" marginwidth="0" marginheight="0" scrolling="no" frameborder="0" src="//ws-in.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&OneJS=1&Operation=GetAdHtml&MarketPlace=IN&source=ss&ref=as_ss_li_til&ad_type=product_link&tracking_id=ayoun8100-21&marketplace=amazon&region=IN&placement=B0851H66G4&asins=B0851H66G4&linkId=2469a54b191b28394b304ecb32c7bf8a&show_border=true&link_opens_in_new_window=true"></iframe> -->

<div class="iframe-container">
<iframe class="responsive-iframe"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4270.045010118016!2d77.00603671499174!3d10.885008560156074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85aab2034f569%3A0xc05985234d5685d0!2sKarpagam%20Hospital!5e1!3m2!1sen!2sin!4v1592009532732!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
  <!-- <div class=" col-xs-12 footer-form">
    <form class="" action="index.html" method="post" class="">
      <input type="text" name="" value="" placeholder="Enter your email">
      <button type="submit" class="btn btn-dark" style="background-color:#ff1e56; margin-left:15px;">submit</button>
    </form>

  </div> -->

  <div class="col-xs-12 col-md-12 footer-bottom">
 <p>Made with ❤️   &#xa9;2020 Solace</p>
  </div>
</div>

<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.6/firebase-database.js"></script>
<script src="Read.js"></script>
<script type="text/javascript">

function googleTranslateElementInit() {
	new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
<?php //include 'footer.php';?>
