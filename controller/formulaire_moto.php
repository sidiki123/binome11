<?php 
include('header.php');
?>

<h1 class="header center orange-text"> <i class=" large material-icons"> create </i>Enregistrer une moto</h1> <br><br>

<div class="container">
<div class="row">
    <form class="col s12" method="POST" action="../controller/createMoto.php">
      <div class="row">
      <div class="input-field col s6" >
      <select  name="marque">
        <option value="" disabled selected>Marque</option>
        <option value="Yamaha">Yamaha</option>
        <option value="Rato">Rato</option>
        <option value="Kaizer">Kaizer</option>
        <option value="Honda">Honda</option>
        <option value="Kawasaki">Kawasaki</option>
        <option value="Suziki">Suziki</option>
        <option value="Jincheng">Jincheng</option>
        <option value="TVS">TVS</option>
        <option value="KTM">KTM</option>
      </select>
      <label>Marque de la moto</label>
      </div>

      <div class="input-field col s6">
      <select name="modele">
        <option value="" disabled selected>Modele</option>
        <option value="Sirius">Sirius GP</option>
        <option value="Nano">Nano</option>
        <option value="Crypton 07 C">Crypton 07 C</option>
        <option value="Force X">Force X</option>
        <option value="Sirius RC">Sirius RC</option>
        <option value="115i">115i</option>
        <option value="Finn">Finn</option>
        <option value="Rato 225C">Rato 225C</option>
        <option value="Rato 115c">Rato 115c</option>
        <option value="Rato 105c">Rato 105c</option>
        <option value="Rato 305c">Rato 305c</option>
        <option value="F150">F150</option>
        <option value="Honda 150">Honda 150</option>
        <option value="TVS Neo">TVS Neo </option>
        <option value="KTM Raptor">KTM Raptor</option>
      </select>
      <label name="modele">Modele de la moto</label>
      </div>
     </div>  

      <div class="row">
      <div class="input-field col s6"  >
      <select  name="cylindre">
        <option value="" disabled selected>Cylindre</option>
        <option value="Inferieur à 100 cm">Inferieur à 100 cm3</option>
        <option value="100 a 200 cm3">100 a 200 cm3</option>
        <option value="200 à 400 cm3">200 à 400 cm3</option>
        <option value="4000 à 600cm3">4000 à 600cm3</option>
        <option value="600 à 800 cm3">600 à 800 cm3</option>
        <option value="800 à 1000 cm3">800 à 1000 cm3</option>
        <option value="Superieur à 1000 cm3">Superieur à 1000 cm3</option>
      </select>
      <label  name="cylindre">Cylindre de la moto</label>
      </div>


        <div class="input-field col s6" >
        <select  name="categorie">
          <option value="" disabled selected>Categorie</option>
          <option value="Petite taille">Petite taille</option>
          <option value="Moyenne taille">Moyenne taille</option>
          <option value="Grande taille">Grande taille</option>
        </select>
        <label  name="categorie">Categorie de la moto</label>
        </div>

      </div>

      <div class="row">
       <div class="input-field col s6" >
          <input id="serie" type="tel" class="validate" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}"  name="serie">
          <label for="last_name"  name="serie">Numero de serie</label>
        </div>
 
        <div class="input-field col s6"  name="prix">
        <input id="prix" type="number" class="validate" min="50000" max="2000000"  name="prix">
        <label for="last_name"  name="prix">Prix de la moto</label>
      </div>

      </div>


      <div class="row">
        <div class="input-field col s12" >
        <textarea id="textarea1" class="materialize-textarea"  name="commentaire"></textarea>
        <label for="textarea1"  name="commentaire">Petit commentaire sur la moto</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
         <div class="row">
            <div class="input-field col s2">
            <button class="btn waves-effect waves-light" type="submit" >Submit
    <i class="material-icons right">send</i>
  </button>
            </div>
            <div class="input-field col s10">
            <button class="btn waves-effect waves-light" type="submit" >Submit
    <i class="material-icons right">cancel</i>
  </button>
            </div>
           
</div>
            
   
      </div>
         </div>  
        </div>
      </div>
    </form>
  </div>
  </div>

  <?php

  include('footer.php');
  ?>
  


  <!--  Scripts-->
  <script src="../assets/js/materialize.js"></script>
  <script src="../assets/js/init.js"></script>
  <script>
  
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
        
  </script>

  <script>
    var instance = M.FormSelect.getInstance(elem);
  </script>

  </body>
        