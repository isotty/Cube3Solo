<?php

    session_start();

    function checkAuth(){
        if ($_POST['email'] !== '' && $_POST['mdp'] !== ''){
            $email = $_POST['email'];
            $password = $_POST['mdp'];

            $bdd = new PDO('mysql:host=localhost;dbname=user','root','');
            $sql = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";
            $query = $bdd->prepare($sql);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                header('Location: ../page/acceuil.php');
                $_SESSION['firstname']= $result['firstname'];
                $_SESSION['lastname']= $result['lastname'];
            } else {
                header('Location: ..\page\index.php?error=user');;
            }
        }
    }
    checkAuth();
?>