<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/index.css">
    <title>Connexion</title>
</head>

<body>
    <nav>
    </nav>
    <form action="../controller/login.php" method="post">
        <div class="body">
            <span>Connexion :</span>
            <div class="mb-3">
                <label class="form-label">Email :</label>
                <input class="form-control" name="email" type="email" placeholder="Email"></input>
            </div>
            <div class="mb-3">
                <label class="form-label">Mot de passe :</label>
                <input class="form-control" name="mdp" type="password" placeholder="Mot de passe"></input>
            </div>
            <button class="btn btn-primary" >Connexion</button>
            <?php if(isset($_GET['error'])){?><span class="">Erreur lors de la connexion</span><?php }?>
        </div>
    </form>
</body>
</html>