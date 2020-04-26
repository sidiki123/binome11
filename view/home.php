<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <style>
   
    .bg-white{
	background: url("#")  no-repeat center fixed;
	background-size: ;
  }
 /* image en background  */
/* texte du bas (simp liste) */
.bas{
  /* font-size: 2em; */
    color:white;
    /* margin-left: 20%; */
    font-size: 4em;
}
/*  */
 #loader {
    position: absolute;
    width :100%;
     height:100%;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
  }
.caracter{
    font-size: 4em;
 }
  
  @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
  }
  
  @keyframes spin {
    0% { transform: rotate(0deg); }
  }
  
   /* ajout d' animation  */
   .animate-bottom {
    position: relative;
    -webkit-animation-name: animatebottom;
    -webkit-animation-duration: 1s;
    animation-name: animatebottom;
    animation-duration: 1s
  }
  
  @-webkit-keyframes animatebottom {
    from { bottom:-100px; opacity:0 } 
    to { bottom:0px; opacity:1 }
  }
  
  @keyframes animatebottom { 
    from{ bottom:-100px; opacity:0 } 
    to{ bottom:0; opacity:1 }
  }
  
  #myDiv {
    display: none;
    text-align: center;
  } 

  @media all and (max-width:1024px)
{
   }

  
    main {
    flex: 1 0 auto;
    }
  
    body {
      background: url;
    }
  
    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
    color: #e91e63;
    }
  
    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
    border-bottom: 2px solid #e91e63;
    box-shadow: none;
    }
  </style>
  </head>
  
  <body onload="myFunction()" style="margin:0;" >
  <!-- corp du code parti -->
    <div id="loader" class="bg-white"></div>
   <div style="display:none;" id="myDiv" class="animate-bottom">
 
     
     <!-- parti js -->
  




  

  <div class="section"></div>
  <main  >
    <center>
    <img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" />
    <div class="section"></div>
  
    <h5 class="indigo-text">Merci de remplir ce formulaire</h5>
    <div class="section"></div>
  
    <div class="container">
      <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
  
      <form class="col s12" method="post" action="../controller/VerifierAdmin.php">
        <div class='row'>
        <div class='col s12'>
        </div>
        </div>
  
        <div class='row'>
        <div class='input-field col s12'>
          <input class='validate' type='text' name='username' id='username' />
          <label for='email'>Nom d'utilisateur</label>
        </div>
        </div>
  
        <div class='row'>
        <div class='input-field col s12'>
          <input class='validate' type='password' name='pass' id='pass' />
          <label for='password'>Mot de passe</label>
        </div>
        </div>
  
        <br />
        <center>
        <div class='row'>
          <button type='submit' name='valider' class='col s12 btn btn-large waves-effect indigo'>S'authentifier</button>
        </div>
        </center>
      </form>
      </div>
    </div>
    </center>
  
    <div class="section"></div>
    <div class="section"></div>
  </main>
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>
<script>
       // var myVar;
       
       function myFunction() {
         myVar = setTimeout(showPage, 3000);
       }
       
       function showPage() {
         document.getElementById("loader").style.display = "none";
         document.getElementById("myDiv").style.display = "block";
       }
       </script>
  </html>
  