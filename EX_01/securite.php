<?php
session_start();
 
?>
<p>
<?php
 
$login=$_POST['user_login'];
$pass=$_POST['user_password'];
 
?>
</p>
<p>
    <?php
function connect_to_database(){
 $servername = "localhost";
 $username = "root";
 $password = "root";
 $databasename ="base-test-rooting";
try {
 $pdo = new PDO ("mysql:host=$servername; dbname=$databasename", $username);
 
 
 echo "Connected successfully";
 return $pdo;
}catch (PDOException $e) {
 echo "Connection failed: ". $e->getMessage();
 }
}
?>
<?php
$verification=false;
$pdo = connect_to_database();
$users = $pdo->query('SELECT * FROM Utilisateurs')->fetchAll();
foreach($users as $element){
    if($element['Login'] == $_POST ['user_login']){
        if ($element['Password'] == $_POST['user_password']){
$_SESSION['user_id'] = $element['login'];
setcookie('user_id' , $element['login']);
$_SESSION['image'] = $element['img-path'];
setcookie('image' , $element['img-path']);
$verification=true;
header('Location: mini-site-routing.php?page=1');
 
        }
        else {
            echo "mauvais couple identifiant / mot de passe";
            echo '<a href= "mini-site-routing.php?page=connexion">connexion</a>';
        }
        }
 
}
if ($verification==false){
    echo "mauvais couple identifiant / mot de passe";
    echo '<a href= "mini-site-routing.php?page=connexion">connexion</a>';
}
 
    ?>
    </p>
    