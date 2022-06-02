<?php 
    $id = $_POST['id'];
    $db = new PDO('mysql:host=localhost;dbname=user','root','');
    $check = $db->prepare("SELECT * FROM users WHERE id IN ($id)");
    $check->execute();
    $data = $check->fetch();
?>

<form class="formulaire" action="../controller/updateuser.php" method="post">
  <div>
    <span>Nom : </span>
    <input type="text" name="lastname" value="<?php echo $user["lastname"] ?>" class="" id="lastname" placeholder="Entrez le nom de la personne">
  </div>
  <div>
    <span>Prénom : </span>
    <input type="text" name="firstname" value="<?php echo $user["firstname"] ?>" class="" id="firstname" placeholder="Entrez le prénom de la personne">
  </div>
  <div>
    <span>Email : </span>
    <input type="email" name="email" value="<?php echo $user["email"] ?>" class="" id="email" placeholder="Entrez l'email de la personne">
  </div>
  <div>
    <span>Mot de passe: </span>
    <input type="password" name="password" value="<?php echo $user["password"] ?>" class="" id="pwd" placeholder="Entrez un mot de passe pour la personne">
  </div>
  <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
  <?php if(isset($_GET['error']) && $_GET['error'] === 'update'){?><span class="">Erreur lors de la mise a jour des données</span><?php }?>
  <div class="">
      <button type="submit"  class="">Envoyer</button>
  </div>
</form>
