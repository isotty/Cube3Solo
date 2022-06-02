<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/index.css">
    <title>Créer utilisateur</title>
</head>

<body>
    <nav>
    </nav>
    <form class="shadow-lg w-80 p-4 flex flex-col bg-[#343434] rounded-l" action="../controller/createuser.php" method="post">
        <div class="">
            <h1>Création d'un utilisateur :</h1>
            <div class="mb-3">
                <label class="form-label">Prénom :</label>
                <input class="form-control" name="firstname" type="text" placeholder="Prénom"></input>
            </div>
            <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input class="form-control" name="lastname" type="text" placeholder="Nom"></input>
            </div>
            <div class="mb-3">
                <label class="form-label">Email :</label>
                <input class="form-control" name="email" type="email" placeholder="Email"></input>
            </div>
            <div class="mb-3">
                <label class="form-label">Mot de passe :</label>
                <input class="form-control" name="password" type="password" placeholder="Mot de passe"></input>
            </div>
            <button class="" >Créer utilisateur</button>
            <?php if(isset($_GET['error']) && $_GET['error'] === 'email'){?><span class="">Email déja attribuer</span><?php }?>
            <?php if(isset($_GET['error']) && $_GET['error'] === 'create'){?><span class="">Erreur lors de la création</span><?php }?>
        </div>
    </form>
</body>
</html>