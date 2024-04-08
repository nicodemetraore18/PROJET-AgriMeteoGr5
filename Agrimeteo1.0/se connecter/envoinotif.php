<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conseils hebdomadaire</title>
    <link rel="stylesheet" href="notif.css">
</head>
<body>
    
        <form action="" method= "">
            
           
            <div>
            <p> <?php  
              $bdd = new PDO('mysql:host=localhost;dbname=agrimeteo', 'root', ''); 
              $sql = "SELECT * FROM conseil";

              $res =$bdd->query($sql);
               $nb = $res->rowCount();
              if( $nb>0){
               while($row= $res->fetch(PDO::FETCH_NUM)){
                foreach ($row as $value) {
                    echo "$value";
                }

               }
               }
              
            
            ?></p>
            </div>          
            
        
                    
               
        
        </form>

</body>
</html>