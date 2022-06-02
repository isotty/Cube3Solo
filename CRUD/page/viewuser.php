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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/viewuser.css">
    <title>Nom du Site</title>
</head>

<body>
    <nav>
    </nav>
    <form class="container">
    <br>
        <div class="col" ><a href='.\createuser.php' >Ajouter nouvelle utilisateur</a></div>
        <br>
        <ul class="row">
            <span class="col align-self-start">Prénom :</span>
            <span class="col">Nom :</span>
            <span class="col">Email :</span>
            <span class="col"></span>
            <span class="col"></span>
        </ul>

        <?php 
            foreach($users as $user):
            extract($user);
        ?>
        <table>
        <hr>
        <ul class="row" id="<?php echo $id ?>">
            <span class="col"><?php echo $firstname ?></span>
            <span class="col"><?php echo $lastname ?></span>
            <span class="col"><?php echo $email ?></span>
            <span class="col"><form method="POST" action="./updateuser.php">
                <button class="btn" type="submit" name="id" value="<?php echo $id ?>">Modifier</button>
            </form></span>
            <span class="col"><form method="POST" action="../controller/deleteuser.php">
                <button class="btn" type="submit" name="id" value="<?php echo $id ?>">Supprimer</button>
            </form></span>
            </table>

        <?php endforeach; ?>
    </form>
</body>
</html>