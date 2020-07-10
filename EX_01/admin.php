<!DOCTYPE html>
<html>

<form method="POST" action="mini-site-routing.php" enctype="multipart/form-data">
    <label for="type">Type de fichier(JPEG, PNG, JPG/ max.2 mo) :</label></br>
    <input type="file" name="mon_fichier" id="mon_fichier"/></br>
    <label for="titre">Titre du fichier(min 4 caractères) :</label></br>
    <input type="text" name="titre" value="titre du fichier" id="titre"/></br>
    <label for="titre">Login :</label></br>
    <input type="text" name="Login" id="Login"/></br>
    <label for="titre">Password :</label></br>
    <input type="text" name="password" id="password"/></br>

   
    <input type="submit" name="submit" value="Envoyer"/>
</form>
<?php
if(isset($_POST)){
    echo"<br>titre". $_POST['titre'];
    echo"<br>description". $_POST['description'];
}
?>
<?php

$_SESSION["image"]=$_FILES["mon_fichier"]["name"];
move_uploaded_file($_FILES["mon_fichier"]["name"], $_SESSION["image"]);
?>
<img src=<?php echo $_SESSION["image"];?>>;
</html>