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
    <title>Nom du Site</title>
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
        <li>
            <div>Prenom :</div>
            <div>Nom :</div>
            <div>Email :</div>
        </li>        
        <li class="row" id="<?php echo $id ?>">
            <div class="col"><?php echo $firstname ?></div>
            <div class="col"><?php echo $lastname ?></div>
            <div class="col"><?php echo $email ?></div>
            <div class="col"><form method="POST" action="./updateuser.php">
                <button class="btn" type="submit" name="id" value="<?php echo $id ?>">Modifier</button>
            </form></div>
            <div class="col"><form method="POST" action="../controller/deleteuser.php">
                <button class="btn" type="submit" name="id" value="<?php echo $id ?>">Supprimer</button>
            </form></div>
        </li>
        <?php endforeach; ?>
    </form>
</body>
</html>