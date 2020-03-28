<!DOCTYPE html>
<?php
include('scrape.php');
?>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Covid 19 | India - Coronavirus status in different states of India - Map Visualizer</title>
  <meta name=”description” content=”COVID-19 | India visualizes the current coronavirus status in different states of India with the most reliable and accurate data sources!”>
  <link rel="icon" type="image/png" href="favicon.png" sizes="96x96">
  <!-- Compiled and minified CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Baloo+2&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- map css -->
  <link rel="stylesheet" href="./css/map.css">
  <link rel="stylesheet" href="./css/style.css">
  <meta name="viewport" content="width=device-width, height=device-height, initial-width=1, user-scalable=yes;" />
  <!--<meta name="viewport" content="width=device-width, initial-width=2, user-scalable=yes"/>-->
</head>

<body>
  <ul id="dropdown1" class="dropdown-content white">
    <li><a href="#" class="black-text"><i class="material-icons">share</i>Share via</a></li>
    <li class="divider"></li>
    <li><a class="blue-text text-darken-3" href="https://facebook.com/sharer/sharer.php?u=https://covidvsindia.in.net"><i class="fa fa-facebook"></i>Facebook</a></li>
    <li><a class="blue-text text-lighten-1" href="https://twitter.com/intent/tweet/?text=&url=https://covidvsindia.in.net"><i class="fa fa-twitter"></i>Twitter</a></li>
    <li><a class="blue-text " href="https://www.linkedin.com/shareArticle?mini=true&url=https://covidvsindia.in.net&title=&summary=&source=https://covidvsindia.in.net"><i class="fa fa-linkedin"></i>Linkedin</a></li>
    <li><a class="green-text " href="whatsapp://send?text=http://covidvsindia.in.net COVID-19 | India visualizes the coronavirus status in different states of India with the most reliable and accurate data sources!"
        data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i>Whatsapp</a></li>
  </ul>
  <div class="navbar-fixed">

    <nav>
      <div class="nav-wrapper blue-grey darken-4">
        <a href="" class="brand-logo" style="font-family: 'Baloo 2', cursive;font-size:140%;transform:translate(-50%,2px);">Covid <span class="tiny">vs</span> India</a>
        <a href="" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right">
          <li><a class="dropdown-trigger" href="" data-target="dropdown1"><img src="share.svg" alt="" style="height:2.5vh; margin-bottom:-0.5vh;margin-top:2vh;"></a></li>
        </ul>
      </div>
    </nav>
  </div>
  <ul class="sidenav" id="mobile-demo">
<li><a href="index.php">Home</a></li>
<li><a href="donate.php">Donate</a></li>
<li><a href="faq.php">FAQs on COVID-19</a></li>
<li><a>Share covidvsindia.in.net</a>
  <ul>
    <li><a class="blue-text text-darken-3" href="https://facebook.com/sharer/sharer.php?u=https://covidvsindia.in.net"><i class="fa fa-facebook"></i>Facebook</a></li>
    <li><a class="blue-text text-lighten-1" href="https://twitter.com/intent/tweet/?text=&url=https://covidvsindia.in.net"><i class="fa fa-twitter"></i>Twitter</a></li>
    <li><a class="blue-text " href="https://www.linkedin.com/shareArticle?mini=true&url=https://covidvsindia.in.net&title=&summary=&source=https://covidvsindia.in.net"><i class="fa fa-linkedin"></i>Linkedin</a></li>
    <li><a class="green-text " href="whatsapp://send?text=http://covidvsindia.in.net COVID-19 | India visualizes the coronavirus status in different states of India with the most reliable and accurate data sources!"
        data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i>Whatsapp</a></li>
  </ul>
</li>
<li style="position:fixed;bottom:10vh;" class="black-text"><a href=""><span class="tiny">© covidvsindia.in.net</span></a></li>
</ul>
