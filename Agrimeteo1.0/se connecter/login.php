<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="formulaire">
        <form action="cible.php" method="post">
            <h4>CONNEXION</h4>
           
            <div>
                <input type="text" placeholder="Nom d'utilisteur" name="nom" required>
            </div>          
            <input type="password" placeholder="Mot de passe" name="mot_de_passe" required >
            <div>
            <input type="submit" name="submit" value="Valider" />
                   
               
            </div>
        </form>
        <div class="drop drop-1"></div>
        <div class="drop drop-2"></div>
        <div class="drop drop-3"></div>
        <div class="drop drop-4"></div>
        <div class="drop drop-5"></div>
    </div>
</body>
</html>