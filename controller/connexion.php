<?php
	try{
		$pdo=new PDO("mysql:host=localhost;dbname=moto","root","");
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>