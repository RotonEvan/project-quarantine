<?php
include('header.php');
?>
<div id="modal_don" class="modal mymodal1">
  <div class="container">
    <img src="./res/donate-main-img.png" alt="">
    <div class="modal-content">
        <h2>Donate Food</h2>
        <p>As the privileged section of the society panicked and hoarded up for their
          Netflix and chill sessions at home during the lockdown, many remained blithely
          oblivious to the fact that thanks to their hoarding, food prices are skyrocketing.
          Which means most informal sector workers, who do not have any job right now
          and are perhaps stuck in a city where they are migrant labourers and therefore
          have no home, will soon not have the money to feed themselves the bare
          minimum required to stay alive.<br><br>
          State governments of Uttar Pradesh, Haryana, Punjab, Himachal Pradesh, Kerala
          and a few others have announced special packages and relief funds for such
          individuals. However, state and central government efforts alone will not be
          enough. Therefore, it is important, for citizens, civic bodies, Non-Governmental
          Organisations (NGOs) as well as industry leaders, to come together to help
          the marginalised section.
        </p>
      <a href="donate.php"> <strong>Some of the Organisations where you can donate!</strong></a>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
  <main>
    <div class="container center" style="margin-top:3vh;height:100vh;">
      <div class="switch">
        <label >
          State-Wise
          <input type="checkbox" onclick="yo()" id="mycheck">
          <span class="lever red"></span>
          District-Wise
        </label>
      </div>
      <style media="screen">
      .switch label input[type=checkbox]:checked+.lever:after {
        background-color: #ffffff;
        }
      </style>
      <script type="text/javascript">
      function yo(){
        if(document.getElementById("mycheck").checked == true)
        {
          console.log('hello');
          document.getElementById("mymap").src = "./india_states.php";
          //document.getElementById("yoyoyo").innerHTML = '';
        }
        else {
          console.log('bye');
          document.getElementById("mymap").src = "./india_districts.php";
          //document.getElementById("yoyoyo").innerHTML = '';
        }
      }
      </script>
      <div id="yoyoyo">
          <iframe id="mymap" src="./india_states.php" style="border:none;height:100vh;width:100vw;"></iframe>
      </div>



  </main>
  <style>
  body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    background-image: radial-gradient(#3A6073, #16222A);
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
</style>
  <?php
  include('footer.php');
  ?>
