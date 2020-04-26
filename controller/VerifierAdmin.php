<?php

require_once '../src/App/Manager/AdminManager.php';
require_once '../src/App/Entity/Admin.php';

use App\Entity\Admin;
use App\Manager\AdminManager;
	session_start();
	@$username=$_POST["username"];
	@$pass=$_POST["pass"];
	@$valider=$_POST["valider"];
	$message="";
	if(isset($valider)){
		include("connexion.php");
		$res=$pdo->prepare("select * from users where username=? and pass=? limit 1");
		$res->setFetchMode(PDO::FETCH_ASSOC);
		$res->execute(array($username,md5($pass)));
		$tab=$res->fetchAll();
		if(count($tab)==0)
			$message="<li>Mauvais login ou mot de passe!</li>";
		else{
			$_SESSION["autoriser"]="oui";
			
			header("location:session.php");
		}
	}
?>

<!DOCYTPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="../assets//css/materialize.min.css">
   
</head>
<center style="color:red; ">
         <h1><?= $message ?></h1> 
        <br><br>

        <h4>Veuiller verifier les données saisies. <h/4> &nbsp;&nbsp; <a href="../view/home.php">Retour</a>


</center>




