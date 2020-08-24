<?php //include 'header2.php';?>
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
          <a class="nav-link" href="#symptoms">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#prevention">Prevention</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#stats" >Stats</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="store.php">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="form.php">Form</a>
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


  <!-- welcome screen -->
  <div class="row">

    <div class="welcome parallax col-xs-12" id="Home">
      <h1>Covid 19</h1>
    </div>
  </div>
  <!-- before about -->
  <div class="row" id="symp">


    <div class="before-about col-xs-12 ">
      <h1>Symptoms</h1>
      <br>
      <h1>&</h1>
      <br />
      <h1>Prevention</h1><br>
      <h1><a href="#symptoms"> <i class="fas fa-chevron-circle-down "></i></a></h1>



    </div>
  </div>
  <div id="symptoms" style="height:60px;"></div>


  <div class="row card-container card-deck">

    <div class="card cardd col-xs-12 col-sm-6 col-md-4">
      <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
      <div class="card-body">
        <h5 class="card-title">Most common symptoms</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item" onclick="display()">fever <i class="fas fa-chevron-circle-down menu-down"></i>
          <div class="sub-menu">
            <P>A fever is a body temperature that is higher than normal. A normal temperature can vary from person to person, but it is usually around 98.6 F. A fever is not a disease. It is usually a sign that your body is trying to fight an illness or infection. Infections cause most fevers.</P>
          </div>

        </li>

        <li class="list-group-item">dry cough <i class="fas fa-chevron-circle-down menu-down"></i>
          <div class="sub-menu">
            <P>A cough is a reflex action that clears your airway of irritants and mucus. There are two types of cough: productive and nonproductive. A productive cough produces phlegm or mucus, clearing it from the lungs. A nonproductive cough, also known as a dry cough, doesn’t produce phlegm or mucus.
</P>
          </div>
        </li>
        <li class="list-group-item">tiredness <i class="fas fa-chevron-circle-down menu-down"></i>
          <div class="sub-menu">
            <P>  Fatigue is a term used to describe an overall feeling of tiredness or lack of energy. It isn’t the same as simply feeling drowsy or sleepy. When you’re fatigued, you have no motivation and no energy. Being sleepy may be a symptom of fatigue, but it’s not the same thing.
</P>
          </div>
        </li>
      </ul>
      <!-- <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div> -->
    </div>


    <div class="card cardd col-xs-12 col-sm-6 col-md-4">
      <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
      <div class="card-body">
        <h5 class="card-title">Less common symptoms</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">aches and pains <i class="fas fa-chevron-circle-down menu-down"></i>
          <div class="sub-menu">
          <P>Body aches are a common symptom of many conditions. The flu is one of the most well-known conditions that can cause body aches. Aches can also be caused by your everyday life, especially if you stand, walk, or exercise for long periods of time.
</P>
    </div>
    </li>
    <li class="list-group-item">sore throat <i class="fas fa-chevron-circle-down menu-down"></i>
      <div class="sub-menu">
      <P>A sore throat is a painful, dry, or scratchy feeling in the throat.
</P>
  </div>
  </li>
  <li class="list-group-item">diarrhoea <i class="fas fa-chevron-circle-down menu-down"></i>
    <div class="sub-menu">
    <P>Diarrhoea is when your bowel movements become loose or watery. The definition of diarrhoea is passing loose or watery bowel movements 3 or more times in a day (or more frequently than usual). Diarrhoea occurs when the lining of the intestine is unable to absorb fluid, or it actively secretes fluid.
</P>
    </div>
  </li>
  <li class="list-group-item">conjunctivitis <i class="fas fa-chevron-circle-down menu-down"></i>
    <div class="sub-menu">
    <P>Pink eye (conjunctivitis) is an inflammation or infection of the transparent membrane (conjunctiva) that lines your eyelid and covers the white part of your eyeball. When small blood vessels in the conjunctiva become inflamed, they're more visible</P>
    </div>
  </li>
  <li class="list-group-item">headache <i class="fas fa-chevron-circle-down menu-down"></i>
    <div class="sub-menu">
    <P>A headache can be a sign of stress or emotional distress, or it can result from a medical disorder, such as migraine or high blood pressure, anxiety, or depression. It can lead to other problems.</P>
    </div>
  </li>
  <li class="list-group-item">loss of taste or smell <i class="fas fa-chevron-circle-down menu-down"></i>
    <div class="sub-menu">
    <P>Symptoms can vary. Some people may not be able to smell or taste anything. Others may have a reduced ability to smell or taste certain things that are sweet, sour, bitter, or salty. In some cases, normally pleasant tastes or smells may become unpleasant
</P>
    </div>
  </li>
  <li class="list-group-item">a rash on skin, or  discolouration <br> of fingers or toes<i class="fas fa-chevron-circle-down menu-down"></i>
    <div class="sub-menu">
    <P>Discolored skin patches are irregular areas where there are changes in skin color. They are a common problem with a wide array of potential causes.Some of the more common causes for changes in skin color are illness, injury, and inflammatory problems.</P>
    </div>

  </li>
  </ul>
  <!-- <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div> -->
  </div>



  <div class="card cardd col-xs-12 col-sm-12 col-md-4">
    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
    <div class="card-body">
      <h5 class="card-title">Serious symptoms</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">difficulty breathing or shortness of breath <i class="fas fa-chevron-circle-down menu-down"></i>
        <div class="sub-menu">
          <P>A person who is having difficulty breathing feels short of breath, has trouble inhaling or exhaling, or feels as though they cannot get enough oxygen.</P>
        </div>
      </li>
      <li class="list-group-item">chest pain or pressure <i class="fas fa-chevron-circle-down menu-down"></i>
        <div class="sub-menu">
          <P>Angina is chest pain or discomfort caused when your heart muscle doesn't get enough oxygen-rich blood. It may feel like pressure or squeezing in your chest. The discomfort also can occur in your shoulders, arms, neck, jaw, or back. Angina pain may even feel like indigestion.
</P>
        </div>
      </li>
      <li class="list-group-item">loss of speech or movement <i class="fas fa-chevron-circle-down menu-down"></i>
        <div class="sub-menu">
          <P>Lack of speech or absence of speech can occur due to both medical and psychological conditions. Absent speech or mutism can occur as a sign of catatonia, a state in which one is unresponsive but otherwise awake.</P>
        </div>
      </li>
    </ul>
    <!-- <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div> -->
  </div>



  </div>
  <div class="row prevention" id="prevention">
    <div class="col-xs-12 col-md-3 door-left">

              <div class="overlay">
              <div class="text">
                <h1>prevention</h1>
              </div>
              </div>
    </div>
    <div class="col-xs-12 col-md-9 door-right">

    <p>To prevent the spread of COVID-19:</p>
    <li>Clean your hands often. Use soap and water, or an alcohol-based hand rub.</li>
    <li>Maintain a safe distance from anyone who is coughing or sneezing.</li>
    <li>Don’t touch your eyes, nose or mouth.</li>
    <li>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</li>
    <li>Stay home if you feel unwell.</li>
    <li>If you have a fever, cough and difficulty breathing, seek medical attention. Call in advance.</li>
    <li>Follow the directions of your local health authority.</li>
  </div>
  </div>








  <!-- <div id='map'></div> -->
<!-- api info -->
<div class="row card-deck stats" id="stats">
  <div class="card total col-xs-12 col-md-4" id="total">
    <div class="card-body">
      <h3>Total Cases </h3>
      <h5 class="card-title num" id="total-cases">0</h5>
      <p class="card-text" >Last Updated<span class="update"></span> </p>
    </div>
  </div>
  <div class="card recovered col-xs-12 col-md-4" id="recovered">
    <div class="card-body">
      <h3>Recovered </h3>
      <h5 class="card-title num" id="recovered-cases">0</h5>
      <p class="card-text">Last Updated <span class="update"></span> </p>
    </div>
  </div>
  <div class="card death col-xs-12 col-md-4" id="death">
    <div class="card-body" >
      <h3>Deaths </h3>
      <h5 class="card-title num"id="death-cases" >0</h5>
      <p class="card-text" >Last Updated<span class="update"></span> </p>

    </div>
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
<!-- <p>hey now</p> -->




  <!-- script tag -->
  <script type="text/javascript" src="scripts/script.js"></script>
  <script type="text/javascript">

  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
  }
  </script>

  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>
