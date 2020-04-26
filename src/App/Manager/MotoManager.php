<?php

namespace App\Manager;

use PDO;
use App\Entity\Moto;

class MotoManager{

    private $pdo;
    private $pdoStatement;
    

    public function __construct(){
        $this->pdo= new PDO('mysql:host=localhost; dbname=moto', 'root', '');
    }

    private function create(Moto &$moto){
        $this->pdoStatement= $this->pdo->prepare('INSERT INTO moto VALUES (NULL, :marque, :modele, :cylindre, :categorie, 
        :serie, :prix, :commentaire)');

        
        $this->pdoStatement->bindValue(':marque', $moto->getMarque(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':modele', $moto->getModele(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':cylindre', $moto->getCylindre(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':categorie', $moto->getCategorie(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':serie',$moto->getSerie(), PDO::PARAM_INT);
        $this->pdoStatement->bindValue(':prix', $moto->getPrix(), PDO::PARAM_INT);
        $this->pdoStatement->bindValue(':commentaire', $moto->getCommentaire(), PDO::PARAM_STR);
        


        $executionisOK = $this->pdoStatement->execute();

        if($executionisOK){
            return false;
        }else{

            $id= $this->pdo->LastInsertId();
            $moto= $this->read($id);

            return true;
        }

    }

    public function read($id){
       $this->pdoStatement= $this->pdo->prepare('SELECT * FROM moto WHERE id= :id');

       $this->pdoStatement->bindValue(':id', $id, PDO::PARAM_INT);

      $executionisOK= $this->pdoStatement->execute();
      if($executionisOK){
          $moto= $this->pdoStatement->fetchObject('\App\Entity\Moto');
          if($moto === false){
              return null;
          }else{
              return $moto;
          }
      }else{
          return false;
      }

    }

    public function readAll()
    {

        $this->pdoStatement= $this->pdo->query('SELECT * FROM moto ORDER BY marque,modele,categorie,cylindre');

        $motos=[];

        while($moto=$this->pdoStatement->fetchObject('App\Entity\Moto')){

            $motos[]= $moto;
        }

        return $motos;
    }

    


    private function update(Patient $patient){

        $this->pdoStatement= $this->pdo->prepare('UPDATE moto set marque=:marque, modele=:modele, cylindre=:cylindre, categorie=:categorie, 
         serie=:serie, prix=:prix, commentaire=:commentaire WHERE id=:id LIMIT 1');
         
 

        $this->pdoStatement->bindValue(':marque', $moto->getMarque(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':modele', $moto->getModele(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':cylindre', $moto->getCylindre(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':categorie', $moto->getCategorie(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':serie',$moto->getSerie(), PDO::PARAM_INT);
        $this->pdoStatement->bindValue(':prix', $moto->getPrix(), PDO::PARAM_INT);
        $this->pdoStatement->bindValue(':commentaire', $moto->getCommentaire(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue(':id', $patient->getId(), PDO::PARAM_INT);

        return $this->pdoStatement->execute();


    }

    public function delete(Patient $patient){

        $this->pdoStatement= $this->pdo->prepare('DELETE FROM patient WHERE id=:id LIMIT 1');

        $this->pdoStatement->bindValue(':id', $patient->getId(), PDO::PARAM_INT);

        return $this->pdoStatement->execute();


    }

    public function save(Moto $moto){

        if(is_null($moto->getId())){
            return $this->create($moto);
        }else{
            
        }
    }
        
    }



?>