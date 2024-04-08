<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="connection.css">
</head>

<body>
    <div class="formulaire">
        <form action="cible.php"  method="post">
            <h4>INSCRIPTION</h4>
            <div>
                <input type="text" placeholder="Nom et prenom" name="nom" required>
                <input type="text" placeholder="Nom d'utilisateur" name="username" required>
            </div>
            <div>
            <input type="email" placeholder="Gmail" name="mail" required>
            <input type="text" placeholder="Télephone" name="tel" required>
            </div>  
            
            <input type="password" placeholder="Mot de passe"name="mot_de_passe" required >
            <input type="password" placeholder="Confirmer mot_passe" name="confirmer" required >
            <div classe="bt">
                <input type="submit" name="submit" value="S'inscrire">
                     
                
            </div>
        </form>
        <div class="drop drop-1"></div>
        <div class="drop drop-2"></div>
        <div class="drop drop-3"></div>
        <div class="drop drop-4"></div>
      
    </div>
</body>

</html>