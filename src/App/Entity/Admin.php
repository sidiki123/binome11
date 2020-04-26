<?php

namespace App\Entity;

class Admin{

    private $id;
    private $username;
    private $pass;
   







    // getter et setter pour le nom d'utilisateur 
    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username){
        $this->username= $username;
        return $this;
    }


    // getter et setter pour le mot de passe
    public function getPass(){
        return $this->pass;
       
    }

    public function setPass($pass){
        $this->pass= $pass;
        return $this;
    }


    
    public function getId(){
        return $this->id;
    }

}



?>