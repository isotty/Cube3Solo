<?php
  function createUser(){
    if($_POST['firstname'] !== '' && $_POST['lastname'] !== ''&& $_POST['email'] !== '' && $_POST['password'] !== ''){
      $email = $_POST['email'];
      $pwd = $_POST['password'];
      $lastname = $_POST['lastname'];
      $firstname = $_POST['firstname'];
      $db = new PDO('mysql:host=localhost;dbname=user','root','');
      $checkemailsql = "SELECT * FROM `users` WHERE email = '$email'";
      $checkemail = $db->prepare($checkemailsql);
      $checkemail->execute();
      $result=$checkemail->fetch(PDO::FETCH_ASSOC);
      if($result){
        header('Location: ..\page\createuser.php?error=email');
      }else{
        $sql = "INSERT INTO `users` (lastname, firstname, email, password) VALUES ('$lastname', '$firstname', '$email', '$pwd')";
        $query = $db->prepare($sql);
        $result = $query->execute();
        if($result){
          header('Location: ../page/viewuser.php');
        }else{
          header('Location: ../createuser.php?error=create');
        }
      }
    }else{
    }
  }
  createUser();
?>