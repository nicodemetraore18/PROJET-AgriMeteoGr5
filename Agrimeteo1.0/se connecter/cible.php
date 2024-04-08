<?php 
session_start();

if (isset($_POST['submit']))
 { 

    
  if (!empty($_POST['nom']) AND !empty($_POST['mot_de_passe'])) 
  {
    $username = htmlspecialchars(trim($_POST['nom']));
  $password = htmlspecialchars(trim($_POST['mot_de_passe']));
  
     
  $bdd = new PDO('mysql:host=localhost;dbname=agrimeteo', 'root', ''); 
  $sql = "SELECT * FROM user WHERE  motpasse= ' $password' ";
  $res=$bdd->query($sql) ;
  
  if ($res->rowCount() ==0) {
    
      header("Location: meteo.php");
  } 
     else {
    echo " mot de passe ou nom d'utilisateur incrrect";
      header("Location:login.php"); 
  }
  
  }
  
    else echo "Veuillez remplir tous les champs";
   

 }

 
   ?>