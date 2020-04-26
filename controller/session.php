<?php
	session_start();
	if(@$_SESSION["autoriser"]!="oui"){
		header("location:index.php");
		exit();
	}
?>


<?php 
include('header.php');
?>

<div class="container">
<div class="section">
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Bienvenue sur <span class="titre">GEST'MOTO <span></h1>
      <div class="row center">
        <h5 class="header col s12 light">Une application web conçu pour la gestion des engins a deux roues</h5>
      </div>
      <div class="row center">
        <a href="formulaire_moto.php" id="download-button" class="btn-large waves-effect waves-light orange">Enregistrer une moto</a>
      </div>

    </div>
  </div>

  <!--   Icon Section   -->
  <div class="row">
    <div class="col s12 m4">
      <div class="icon-block">
        <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
        <h5 class="center">Rapidite et fiabilite</h5>

        </div>
    </div>

    <div class="col s12 m4">
      <div class="icon-block">
        <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
        <h5 class="center">Satisfaction de nos clients</h5>

        </div>
    </div>

    <div class="col s12 m4">
      <div class="icon-block">
        <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
        <h5 class="center">Gestion agile</h5>

       </div>
    </div>
  </div>

</div>
<br><br>
</div>
<?php

include('footer.php');
?>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../assets/js/materialize.js"></script>
  <script src="../assets/js/init.js"></script>

  </body>
</html>
