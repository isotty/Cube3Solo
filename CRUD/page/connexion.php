<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/connexion.css">
    <title>Nom du Site</title>
</head>

<body>
    <nav class="">
    </nav>
    <form action="../controller/login.php" method="post">
        <div class="">
            <span>Connexion :</span>
            <input class="" name="email" type="email" placeholder="Email"></input>
            <input class="" name="mdp" type="password" placeholder="Mot de passe"></input>
            <button class="" >Connexion</button>
            <?php if(isset($_GET['error']) && $_GET['error'] === 'user'){?><span class="">Erreur lors de la création du compte</span><?php }?>
        </div>
    </form>
</body>
</html>