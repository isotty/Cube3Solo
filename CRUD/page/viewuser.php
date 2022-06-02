<?php

function getUsers(){
  $bdd = new PDO('mysql:host=localhost;dbname=user','root','');
  $sql = "SELECT * FROM users ";
  $query = $bdd->prepare($sql);
  $query->execute();
  $result=$query->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}

  $users = getUsers();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/viewuser.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>View users</title>
</head>

<body>
    <nav>

    </nav>
    <form class="container">
        <a href='.\createuser.php' class="" >Ajouter nouvelle utilisateur</a>
        <?php 
            foreach($users as $user):
            extract($user);
        ?>
        <div class="row" id="<?php echo $id ?>">
            <div class="col"><?php echo $firstname ?></div>
            <div class="col"><?php echo $lastname ?></div>
            <div class="col"><?php echo $email ?></div>
            <form method="POST" action="./updateuser.php">
                <button class="btn btn-primary" type="submit" name="id" value="<?php echo $id ?>">Modifier</button>
            </form>
            <form method="POST" action="../controller/deleteuser.php">
                <button class="btn btn-primary" type="submit" name="id" value="<?php echo $id ?>">Supprimer</button>
            </form>
        </div>
        <?php endforeach; ?>
    </form class="container">
</body>
</html>