<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Nom du Site</title>
</head>

<body>

    <nav>
        <ul class="gauche">
            <li><a href="./accueil.html">Accueil</a></li>
            <li><a href="#">Actualités</a></li>
            <li><a href="./forum.html">Forum</a></li>
            <li><a href="./magasin.html">Boutique</a></li>
        </ul>
        <ul class="droite">
            <li><a href="./login.html">Se connecter</a></li>
            <li><a href="./signup.html">S'inscrire</a></li>
        </ul>
    </nav>
    <form action="login.php" method="post">
        <div>
            <img class="" src="#">
        </div>
        <div>
            <input class="logininput" type="text"  name="identifant" placeholder="Email ou Pseudonyme"> 
        </div>
        <HR width="260px">
        <div>
            <input class="logininput" type="text"  name="mdp" placeholder="Mot de passe"> 
        </div></br>  
        <div>
            <button class="loginbutton" type="submit">
                Se connecter
            </button>
        </div>
        <HR width="100px">
        <div>
            <span class="loginhref"><a href="#">Mot de passe oublier?</a></span>
        </div>
        <div>
            <span class="loginhref"><a href="#">Se créer un compte</a></span>
        </div>
    </form>
    <footer>
        <ul class="footer">
            <li><a href="#">Mentions légales</a></li>
            <li><a href="#">Nous contacter</a></li>
            <li><a href="#">À propos</a></li>
        </ul>
    </footer>
</body>
</html>