<?php

function getUsers(){
  $ddb = new PDO('mysql:host=localhost;dbname=html','root','root');
  $sql = "SELECT * FROM users ";
  $query = $ddb->prepare($sql);
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
    <nav class="">
        <span class="">    
            <?php echo($_SESSION['lastname']) ?>
            <?php echo($_SESSION['firstname']) ?>
        </span>
    </nav>
    <form>
        <?php 
            foreach($users as $user):
            extract($user);
        ?>
        <li id="<?php echo $id ?>">
            <span><?php echo $nom ?></span>
            <span><?php echo $prenom ?></span>
            <span><?php echo $identifiant ?></span>
            <form method="POST" action="./updateUser.php">
                <button type="submit" name="id" value="<?php echo $id ?>">Modifier</button>
            </form>
            <form method="POST" action="../controller/deleteUser.php">
                <button type="submit" name="id" value="<?php echo $id ?>">Supprimer</button>
            </form>
        </li>
        <?php endforeach; ?>
    </form>
</body>
</html>