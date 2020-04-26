<?php

require_once '../src/App/Manager/MotoManager.php';
require_once '../src/App/Entity/Moto.php';

use App\Entity\Moto;
use App\Manager\MotoManager;


$moto = new Moto();
$moto->setMarque($_POST['marque'])
->setModele($_POST['modele'])
->setCylindre($_POST['cylindre'])
->setCategorie($_POST['categorie'])
->setSerie($_POST['serie'])
->setPrix($_POST['prix'])
->setCommentaire($_POST['commentaire']);

$motoManager = new MotoManager();


$saveisOK= $motoManager->save($moto);
header("location:readAllContact.php");

?>





