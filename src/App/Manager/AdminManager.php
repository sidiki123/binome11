<?php

namespace App\Manager;

use PDO;
use App\Entity\Admin;

class AdminManager{

    private $pdo;
    private $pdoStatement;
    public function __construct(){
        $this->pdo= new PDO('mysql:host=localhost; dbname=moto', 'root', '');
    }

    public function ___destruct(){
	session_destroy();
	header("location:index.php");
    }


}
?>