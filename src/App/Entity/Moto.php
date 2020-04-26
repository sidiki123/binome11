<?php

namespace App\Entity;

class Moto{

    private $id;
    private $marque;
    private $modele;
    private $cylindre;
    private $categorie;
    private $serie;
    private $prix;
    private $commentaire;
   







// getter et setter pour la marque
    public function getMarque(){
        return $this->marque;
    }

    public function setMarque($marque){
        $this->marque= $marque;
        return $this;
    }
//


// getter et setter pour le modele
    public function getModele(){
        return $this->modele;
       
    }

    public function setModele($modele){
        $this->modele= $modele;
        return $this;
    }
//


// getter et setter pour le cylindre
    public function getCylindre(){
        return $this->cylindre;
       
    }

    public function setCylindre($cylindre){
        $this->cylindre= $cylindre;
        return $this;
    }

//


//getter et setter pour la categorie
    public function getCategorie(){
        return $this->categorie;
       
    }

    public function setCategorie($categorie){
        $this->categorie= $categorie;
        return $this;
    }
//

// getter et setter pour la serie
    public function getSerie(){
        return $this->serie;
       
    }

    public function setSerie($serie){
        $this->serie= $serie;
        return $this;
    }
// 

// getter et setter pour la prix
public function getPrix(){
    return $this->prix;
   
}

public function setPrix($prix){
    $this->prix= $prix;
    return $this;
}
// 

// getter et setter pour le commentaire
public function getCommentaire(){
    return $this->commentaire;
   
}

public function setCommentaire($commentaire){
    $this->commentaire= $commentaire;
    return $this;
}
// 

    
    public function getId(){
        return $this->id;
    }

}



?>