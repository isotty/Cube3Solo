<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/index.css">
    <title>Connexion</title>
</head>

<body>
    <nav>
    </nav>
    <form action="../controller/login.php" method="post">
        <div class="body">
            <span>Connexion :</span>
            <input class="" name="email" type="email" placeholder="Email"></input>
            <input class="" name="mdp" type="password" placeholder="Mot de passe"></input>
            <button class="" >Connexion</button>
            <?php if(isset($_GET['error'])){?><span class="">Erreur lors de la connexion</span><?php }?>
        </div>
    </form>
</body>
</html>