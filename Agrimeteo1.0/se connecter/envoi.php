<?php 
if (isset($_POST['submit']))
 {
  $user = htmlspecialchars(trim($_POST['conseils']));
    

      if ($user ) 
      {
    
        try { $bdd = new PDO('mysql:host=localhost;dbname=agrimeteo', 'root', ''); 
} 
catch(Exception $e) 
{ 
 die('Erreur : '.$e->getMessage()); 
}

if(!empty($user) ) {
   $bdd->exec("UPDATE conseil SET `conseille`= ' $user' WHERE id= ' 1'");
   
}
      }
      else{
        echo "invalid";
      }
    }


 ?>