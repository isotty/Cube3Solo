<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/index.css">
    <title>Nom du Site</title>
</head>

<body>
    <nav>
    </nav>
    <form action="../controller/createuser.php" method="post">
        <div class="">
            <span>Connexion :</span>
            <input class="" name="firstname" type="text" placeholder="Prénom"></input>
            <input class="" name="lastname" type="text" placeholder="Nom"></input>
            <input class="" name="email" type="email" placeholder="Email"></input>
            <input class="" name="password" type="password" placeholder="Mot de passe"></input>
            <button class="" >Créer utilisateur</button>
            <?php if(isset($_GET['error']) && $_GET['error'] === 'email'){?><span class="">Email déja attribuer</span><?php }?>
            <?php if(isset($_GET['error']) && $_GET['error'] === 'user'){?><span class="">Erreur lors de la création</span><?php }?>
        </div>
    </form>
</body>
</html>