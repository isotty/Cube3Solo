<?php 
  function getUserById($id){
      $db = new PDO('mysql:host=localhost;dbname=user','root','');
      $sql = "SELECT * FROM users where id= '$id'";
      $query = $db->prepare($sql);
      $query->execute();
      $result=$query->fetch(PDO::FETCH_ASSOC);
      
  return $result;
  }
  $user = getUserById($_POST['id']);
?>

<form class="formulaire" action="../controller/updateuser.php" method="post">
  <div>
    <span for="">Nom : </span>
    <input type="text" name="lastname" value="<?php echo $user["lastname"] ?>" class="" id="lastname" placeholder="Entrez le nom de la personne">
  </div>
  <div>
    <span for="exampleFormControlInput2">Prénom : </span>
    <input type="text" name="firstname" value="<?php echo $user["firstname"] ?>" class="" id="firstname" placeholder="Entrez le prénom de la personne">
  </div>
  <div>
    <span for="">Email : </span>
    <input type="email" name="email" value="<?php echo $user["email"] ?>" class="" id="email" placeholder="Entrez l'email de la personne">
  </div>
  <div>
    <span for="">Mot de passe: </span>
    <input type="password" name="password" value="<?php echo $user["pdw"] ?>" class="" id="pwd" placeholder="Entrez un mot de passe pour la personne">
  </div>
  <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
  <div class="">
      <button type="submit"  class=""">Envoyer</button>
  </div>
</form>
