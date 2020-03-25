<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Covid 19 | India update</title>
    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Baloo+2&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
<ul id="dropdown1" class="dropdown-content blue-grey darken-1">
        <li><a href="#" class="white-text"><i class="material-icons">share</i>Share via</a></li><li class="divider"></li>
      <li><a  class="blue-text text-darken-3" href="https://facebook.com/sharer/sharer.php?u=https://makerslab.in/covid/"><i class="fa fa-facebook"></i>Facebook</a></li>
      <li><a  class="blue-text text-lighten-1" href="https://twitter.com/intent/tweet/?text=&url=https://makerslab.in/covid/"><i class="fa fa-twitter"></i>Twitter</a></li>
      <li><a  class="blue-text " href="https://www.linkedin.com/shareArticle?mini=true&url=https://makerslab.in/covid/&title=&summary=&source=https://makerslab.in/covid/"><i class="fa fa-linkedin"></i>Linkedin</a></li>
            <li><a class="green-text " href="whatsapp://send?text=http://makerslab.in/covid/ COVID-19 | India visualizes the coronavirus status in different states of India with the most reliable and accurate data sources!" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i>Whatsapp</a></li>
    </ul>
    <div class="navbar-fixed">

    <nav>
      <div class="nav-wrapper blue-grey darken-3">
        <a href="#" class="brand-logo covid" style="font-family: 'Baloo 2', cursive;">&nbsp&nbsp&nbsp&nbspCovid-19 | India</a>
        <ul id="nav-mobile" class="right">

                    <li><a class="dropdown-trigger" href="" data-target="dropdown1"><img src="share.svg" alt="" style="height:2.5vh; margin-bottom:-0.5vh;margin-top:2.5vh;"></a></li>
        </ul>


      </div>
    </nav>
    </div>
    <section>

    </section>
<main>
  <div class="container center" style="height:50vh;">
   <?php //include("map.html");?>

  </div>

</main>


         <div class="footer blue-grey darken-3">
           <div class="container">
           <a class="grey-text text-lighten-4 modal-trigger" href="#modal1">More Information</a>
           </div>
         </div>
       <!-- Modal Structure -->
       <div id="modal1" class="modal">
         <div class="modal-content">
           <h4>More Information</h4>
           <p style="font-size:small;">Source: <a href="https://www.mohfw.gov.in/">https://www.mohfw.gov.in/</a> | Ministry of Health & Family Welfare | Last updated: <span id="date"></span></p>
           <p>This website was developed by <strong>Saksham Bhushan</strong> and <strong>Debajyoti Haldar</strong>, two students at Indian Institute of Technology Bhilai.
<br>
The goal of this project is to provide a simple, interactive way to visualize the impact of COVID-19 in India. We wanted people to be able to see this as something that brings us all together. This is what India looks like today in terms of effect of Coronavirus, we have to be careful and responsible as a citizen of this country and help make this situation better.
<br>
The data is from Ministry of Health & Family Welfare real-time updates. The TODAY cases/deaths are based on GMT (+0530).
<br>
If you have questions, suggestions, or feedback, please send us an email. <a href="mailto:sakshamb@iitbhilai.ac.in">Here!</a> <br><br>
<a href="https://facebook.com/sharer/sharer.php?u=https://makerslab.in/covid/">Share on Facebook</a><br>
<a href="https://twitter.com/intent/tweet/?text=&url=https://makerslab.in/covid/">Share on Twitter</a><br>
<a href="https://www.linkedin.com/shareArticle?mini=true&url=https://makerslab.in/covid/&title=&summary=&source=https://makerslab.in/covid/">Share on Linkedin</a><br></p>
         </div>
         <div class="modal-footer">
           <a href="#!" class="modal-close waves-effect waves-green btn-flat">OK</a>
         </div>
       </div>
  </body>

<style>

body {
        display: flex;
    min-height: 100vh;
    flex-direction: column;
    background-image: url('TB1d.u8MXXXXXXuXFXXXXXXXXXX-1900-790.jpg');
}
  main {
    flex: 1 0 auto;
  }

  .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    color: white;
    text-align: center;
    height:6vh;
    padding-top:1.5vh;
  }
  @media (max-width: 700px) {
      .covid{
        font-size:150% !important;
        align:left !important;
      }
}
</style>

<script>

  $(document).ready(function(){
    $('.modal').modal();
    $(".dropdown-trigger").dropdown({
        'constrainWidth': false,
    });
    let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
   bannerNode.parentNode.removeChild(bannerNode);
  });

  n =  new Date();
  y = n.getFullYear();
  m = n.getMonth() + 1;
  d = n.getDate();
  document.getElementById("date").innerHTML = d + "/" + m + "/" + y;


</script>

</html>
