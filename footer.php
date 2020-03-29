<!-- footer starts -->
<div class="container center">
  <div class="footer grey-darken-3 container" style=" position: fixed !important; bottom: 0vh !important; margin:auto !important;">
    <div class="container" style="opacity: 1 !important;">
      <a id="more-info-button" class="grey-text text-lighten-4 modal-trigger" href="#modal1">More Information</a>
    </div>
  </div>
</div>
<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>More Information</h4>
    <p style="font-size:small;">Source: <a href="https://covid19india.org/">Covid19india</a> | Ministry of Health & Family Welfare | Last updated: <?php echo $array['statewise'][0]['lastupdatedtime'];?></p><br>
    <p>This website was developed by <strong><a href="https://www.linkedin.com/in/sakshambhushan/">Saksham Bhushan</a></strong> and <strong><a href="https://www.linkedin.com/in/debajyoti-halder-19a95a17a/">Debajyoti Haldar</a></strong>, two students at Indian Institute of Technology Bhilai.
      <br>
      The goal of this project is to provide a simple, interactive way to visualize the impact of COVID-19 in India. We wanted people to be able to see this as something that brings us all together. This is what India looks like today in terms of
      effect of Coronavirus, we have to be careful and responsible as a citizen of this country and help make this situation better.
      <br>
      The data is from Ministry of Health & Family Welfare real-time updates. The TODAY cases/deaths are based on GMT (+0530).
      <br>
      If you have questions, suggestions, or feedback, please send us an email. <a href="mailto:sakshamb@iitbhilai.ac.in">Here!</a> <br><br>
      <a href="https://facebook.com/sharer/sharer.php?u=https://covidvsindia.in.net">Share on Facebook</a><br>
      <a href="https://twitter.com/intent/tweet/?text=&url=https://covidvsindia.in.net">Share on Twitter</a><br>
      <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://covidvsindia.in.net/&title=&summary=&source=https://covidvsindia.in.net/">Share on Linkedin</a><br></p>
      <?php include('count_visit.php')?>

      <span class="tiny"> <?php echo"Visitors Count: ". $counter; ?></span>
  </div>
  <div class="modal-footer">
    <a href="" class="modal-close waves-effect black-text btn-flat">OK</a>
  </div>
</div>
</body>

<style>

main {
  flex: 1 0 auto;
}



@media (min-width: 700px) {
  .brand-logo {
    margin-left:10px !important;
    transform:translate(0%,2px) !important;
  }
}
*.icon-blue {color: #0088cc}
*.icon-grey {color: grey}
i {
    width:10px;
    text-align:center;
    vertical-align:middle;
    position: relative;
}
.badge:after{
    content:"new";
    position: absolute;
    background: rgba(255,0,0,1);
    height:1rem;
    top:1rem;
    right:1.5rem;
    width:1rem;
    text-align: center;
    line-height: 2rem;;
    font-size: 1rem;
    border-radius: 50%;
    color:white;
    transform: translateX(270%);
}
</style>

<script>
$(document).ready(function(){
$('.collapsible').collapsible({
  accordion: true,
});
});
$(document).ready(function(){
  $('.sidenav').sidenav();
});
$(document).ready(function() {
  $('.modal').modal();
  $(".dropdown-trigger").dropdown({
    'constrainWidth': false,
  });
  let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
  bannerNode.parentNode.removeChild(bannerNode);
});

</script>

</html>
