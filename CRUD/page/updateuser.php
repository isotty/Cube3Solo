<?php 
    $id = $_POST['id'];
    $db = new PDO('mysql:host=localhost;dbname=user','root','');
    $check = $db->prepare("SELECT * FROM users WHERE id IN ($id)");
    $check->execute();
    $data = $check->fetch();
?>

<form  class="shadow-lg w-80 p-4 flex flex-col bg-[#343434] rounded-l"  action="../controller/updateuser.php" method="post">
  <div>
    <label class="form-label">Nom : </label>
    <input type="text" name="lastname" value="<?php echo $data["lastname"] ?>" class="form-control" id="lastname" placeholder="Entrez le nom de la personne">
  </div>
  <div>
    <label class="form-label">Prénom : </label>
    <input type="text" name="firstname" value="<?php echo $data["firstname"] ?>" class="form-control" id="firstname" placeholder="Entrez le prénom de la personne">
  </div>
  <div>
    <label class="form-label">Email : </label>
    <input type="email" name="email" value="<?php echo $data["email"] ?>" class="form-control" id="email" placeholder="Entrez l'email de la personne">
  </div>
  <div>
    <label class="form-label">Mot de passe: </label>
    <input type="password" name="password" value="<?php echo $data["password"] ?>" class="form-control" id="pwd" placeholder="Entrez un mot de passe pour la personne">
  </div>
  <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>">
  <?php if(isset($_GET['error']) && $_GET['error'] === 'update'){?><span class="">Erreur lors de la mise a jour des données</span><?php }?>
  <div class="">
      <button type="submit"  class="">Envoyer</button>
  </div>
</form>
