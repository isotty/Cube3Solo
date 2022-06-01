<?php
  function updateUser(){
    var_dump($_POST);
    if($_POST['firstname'] !== '' && $_POST['lastname'] !== ''&& $_POST['email'] !== '' && $_POST['password'] !== ''){
      $email = $_POST['email'];
      $pwd = $_POST['password'];
      $lastname = $_POST['lastname'];
      $firstname = $_POST['firstname'];
      $id = intval($_POST["id"]);
      $db = new PDO('mysql:host=localhost;dbname=user','root','');
      $sql = "UPDATE users
      SET lastname = :lastname,
          firstname = :firstname,
          email = :email,
          pwd = :pwd
      WHERE id = :id";
      $valeur = array(
          'lastname' => $lastname,
          'firstname' => $firstname,
          'email' => $email,
          'pwd' => $pwd,
          'id' => $id
      );
      $query = $db->prepare($sql);
      $result = $query->execute($valeur);
      if($result){
        header('Location: ../page/viewuser.php');
      }else{
        header('Location: ../administration/updateUser.php?error=update&id='.$_POST["id"]);
      }
    }else{
    }
  }
  updateUser();
?>