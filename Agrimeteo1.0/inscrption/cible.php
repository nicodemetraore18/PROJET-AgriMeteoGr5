<?php 
if (isset($_POST['submit']))
 {
  $nom = htmlspecialchars(trim($_POST['nom']));
  $username = htmlspecialchars(trim($_POST['username']));
  $mail = htmlspecialchars(trim($_POST['mail'])); 
  $tel = htmlspecialchars($_POST['tel']);
  $password = htmlspecialchars(trim($_POST['mot_de_passe'])); 
  $confirmer = htmlspecialchars(trim($_POST['confirmer']));

      if ($nom&&$username&&$mail&&$tel&&$password&&$confirmer ) 
      {
    
    if ($password==$confirmer) {
      if (strlen($password)>6) {
        try { $bdd = new PDO('mysql:host=localhost;dbname=agrimeteo', 'root', ''); 
} 
catch(Exception $e) 
{ 
 die('Erreur : '.$e->getMessage()); 
}

if(!empty($nom) AND!empty($username) AND !empty($mail) AND !empty($tel) AND !empty($password) AND !empty($confirmer)) {
   $bdd->exec("INSERT INTO user(nom_prenom,username,email,tel,motpasse,confirmer) VALUES('$nom ', '$username ' , '  $mail' , '  $tel' , '$password ','$confirmer')");
   echo "Vous etes inscrit";
}
      }
      else{
        echo "Minimum 6 caractéres";
      }
    }
    else{
echo "les mots de passe ne sont pas identique";
    }


    }
      
}

 ?>