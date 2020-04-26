<?php

require_once '../src/App/Manager/MotoManager.php';
require_once '../src/App/Entity/Moto.php';

use App\Entity\Moto;
use App\Manager\MotoManager;


$motoManager = new MotoManager();

$moto= $motoManager->read($_GET['id']);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
		<li><a href="#">Enregistrer une moto</a></li>
		<li><a href="../controller/readAllContact.html">Lister les motos</a></li>
		<li><a href="#">Vendre une moto</a></li>
		<li><a href="#">Se deconnecter</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
		<li><a href="#">Enregistrer une moto</a></li>
		<li><a href="../controller/readAllContact.php">Lister les motos</a></li>
		<li><a href="#">Vendre une moto</a></li>
		<li><a href="#">Se deconnecter</a></li>
		
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <br><br>
  <h1 class="header center orange-text">En savoir plus sur une moto</h1>
<center>
<div class=" container card-panel " style="box-shadow: 20px 12px 10px 30px rgba(0, 0, 255, .2); flex-direction:row;background-color:white; font-weight:800; width:20%;">
       <br> <div> <h1>Detail moto</h1></div><br>
        <div > <a style="color:light-blue lighten-1;text-decoration:none;">Marque</a>&nbsp;&nbsp;<?= $moto->getMarque()?> </div> <br>
        <div> <a style="color:light-blue lighten-1;text-decoration:none;">Modele: </a> &nbsp;&nbsp; <?= $moto->getModele()?></div> <br>
        <div> <a style="color:light-blue lighten-1;text-decoration:none;"> Categorie: </a> &nbsp;&nbsp;<?= $moto->getCategorie()?></div> <br>
        <div> <a style="color:light-blue lighten-1;text-decoration:none;"> Cylindre: </a> &nbsp;&nbsp; <?= $moto->getCylindre()?></div> <br>
        <div> <a style="color:light-blue lighten-1;text-decoration:none;"> Serie: </a> &nbsp;&nbsp;<?= $moto->getSerie()?></div> <br>
        <div> <a style="color:light-blue lighten-1;text-decoration:none;"> Prix: </a> &nbsp;&nbsp;<?= $moto->getPrix()?></div> <br>
        <div> <a style="color:light-blue lighten-1;text-decoration:none;"> Commentaire: </a> &nbsp;&nbsp;<?= $moto->getCommentaire()?></div> <br>
        
 </div>
 </center>
