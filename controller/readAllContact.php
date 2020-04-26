
    <?php

require_once '../src/App/Manager/MotoManager.php';
require_once '../src/App/Entity/Moto.php';

use App\Entity\Moto;
use App\Manager\MotoManager;


$motoManager = new MotoManager();

$motos= $motoManager->readAll();
include("../controller/connexion.php");
// traitement de la requete
$query="";
$sql="";
$resultats="";
if (isset($_POST['query']) && !empty($_POST['query'])){
        $query= preg_replace("#[^a-zA-Z ?0-9]#i", "" ,$_POST['query']);
        $sql= "SELECT id, marque AS title FROM moto WHERE marque LIKE ?";

}
$req= $pdo->prepare($sql);
$req->execute(array('%'.$query.'%'));


?>

<?php 
include('header.php');
?>

  <div class="container">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="search" name="query" placeholder="compter le nombre de moto par marque">

<button class="btn waves-effect waves-light" type="submit" value="compter" name="action">Submit
    <i class="material-icons right">search</i>
  </button>

<?php echo $resultats; ?>
</form>
<?php
$count= $req->rowCount();
if($count >=1){
        echo " $count moto(s) trouvé(s) pour <strong>$query</strong> ";
}else{
echo " 0 moto trouvé pour <strong>$query</strong>";
}
?>
 <br><br>
    


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."> <br>







<table class="striped highlight responsive-table" id="myTable">
    <thead>
        
        <th>id</th>
        <th>Marque</th>
        <th>Modele</th>
        <th>Categorie</th>
        <th>Cylindre</th>
        <th>details</th>

    
    </thead>
 <tbody>
 <?php
    // pour chaque ligne (chaque enregistrement)
        foreach ( $motos as $moto )
        {
?>
       
      
    <tr class="header">
   
                        
             <td>
                <?php if(empty($motos)):  ?>
                <p>pas de moto sauvegarder</p>
                
                <?php else:  ?>
                        <?php if($motos===false):  ?>
                            <p>une erreur est survenue</p>
                
                        <?php else:  ?>
                        
                                <?php foreach($motos as $moto):  ?>
                                        
                                        <p> <?= $moto->getid() ?></p> 
                            
                                <?php endforeach;  ?>
                        
                
                
                        <?php endif;  ?>
                
                
                <?php endif;?>
            
            </td>
     

    
            <td>
                    <?php if(empty($motos)):  ?>
                <p>pas de moto sauvegarder</p>
                
                <?php else:  ?>
                        <?php if($motos===false):  ?>
                            <p>une erreur est survenue</p>
                
                        <?php else:  ?>
                        
                                <?php foreach($motos as $moto):  ?>
                                        
                                        <p> <?= $moto->getMarque() ?></p> 
                            
                                <?php endforeach;  ?>
                        
                
                
                        <?php endif;  ?>
                
                
                <?php endif;?>
                
            </td>
     

    
            <td>
                    <?php if(empty($motos)):  ?>
                <p>pas de moto sauvegarder</p>
                
                <?php else:  ?>
                        <?php if($motos===false):  ?>
                            <p>une erreur est survenue</p>
                
                        <?php else:  ?>
                        
                                <?php foreach($motos as $moto):  ?>
                                        
                                        <p> <?= $moto->getModele() ?></p> 
                            
                                <?php endforeach;  ?>
                        
                
                
                        <?php endif;  ?>
                
                
                <?php endif;?>
                
            </td>
     

    
            <td>
                    <?php if(empty($motos)):  ?>
                <p>pas de moto sauvegarder</p>
                
                <?php else:  ?>
                        <?php if($motos===false):  ?>
                            <p>une erreur est survenue</p>
                
                        <?php else:  ?>
                        
                                <?php foreach($motos as $moto):  ?>
                                        
                                        <p> <?= $moto->getCategorie() ?></p> 
                            
                                <?php endforeach;  ?>
                        
                
                
                        <?php endif;  ?>
                
                
                <?php endif;?>
                
            </td>
     
    
    
            <td>
                    <?php if(empty($motos)):  ?>
                <p>pas de moto sauvegarder</p>
                
                <?php else:  ?>
                        <?php if($motos===false):  ?>
                            <p>une erreur est survenue</p>
                
                        <?php else:  ?>
                        
                                <?php foreach($motos as $moto):  ?>
                                        
                                        <p> <?= $moto->getCylindre() ?></p> 
                            
                                <?php endforeach;  ?>
                        
                
                
                        <?php endif;  ?>
                
                
                <?php endif;?>
            
            </td>
     

    
    
            <td>
                    <?php if(empty($motos)):  ?>
                <p>pas de moto sauvegarder</p>

                <?php else:  ?>
                        <?php if($motos===false):  ?>
                            <p>une erreur est survenue</p>

                        <?php else:  ?>
                            
                                <?php foreach($motos as $moto):  ?>
 
 
                <!-- Modal Trigger -->
                
                <a class="waves-effect waves-light btn pink darken-1 modal-trigger" href="#demo-modal">Detail moto</a>
                
                
                
                <!-- Modal Structure -->
                
                <div id="demo-modal" class="modal">
                
                <div class="modal-content">
                
                <h4>Detail moto</h4>
                
                <a href="detailmoto.php?id=<?= $moto->getId() ?>"> </a>   
                                                
                                                <div > <a style="color:light-blue lighten-1;text-decoration:none;">Marque</a>&nbsp;&nbsp;<?= $moto->getMarque()?> </div> <br>
                        <div> <a style="color:light-blue lighten-1;text-decoration:none;">Modele: </a> &nbsp;&nbsp; <?= $moto->getModele()?></div> <br>
                        <div> <a style="color:light-blue lighten-1;text-decoration:none;"> Categorie: </a> &nbsp;&nbsp;<?= $moto->getCategorie()?></div> <br>
                        <div> <a style="color:light-blue lighten-1;text-decoration:none;"> Cylindre: </a> &nbsp;&nbsp; <?= $moto->getCylindre()?></div> <br>
                        <div> <a style="color:light-blue lighten-1;text-decoration:none;"> Serie: </a> &nbsp;&nbsp;<?= $moto->getSerie()?></div> <br>
                        <div> <a style="color:light-blue lighten-1;text-decoration:none;"> Prix: </a> &nbsp;&nbsp;<?= $moto->getPrix()?></div> <br>
                        <div> <a style="color:light-blue lighten-1;text-decoration:none;"> Commentaire: </a> &nbsp;&nbsp;<?= $moto->getCommentaire()?></div>
                
                </div>
                
                <div class="modal-footer">
                
                <a href="#!" class="modal-action modal-close waves-effect waves-red btn red lighten-1">Close</a>
                
                </div>
                
                </div>
                                                        
                                
                                    
                                <?php endforeach;  ?>
                        


                        <?php endif;  ?>


                <?php endif;?>

            </td>
    </tr>
    <?php
    }
?>
    
        
</tbody>    
</table>
</div>

<?php

include('footer.php');
?>

          
</body>

    <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    td = tr[i].getElementsByTagName("td")[2];
    td = tr[i].getElementsByTagName("td")[3];
    td = tr[i].getElementsByTagName("td")[4];
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

<script>
 
$(document).ready(function(){
 
    $('.modal').modal();
 
  })
 
</script>