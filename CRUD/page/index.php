<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/index.css">
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
        <div class="">
            <a href="..\page\viewuser.php"><img class="" src="..\image\dashbord.png"></img></a>
        </div>
    </form>
</body>
</html>