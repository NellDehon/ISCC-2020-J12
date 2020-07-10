<?php
session_start();
?>
<!DOCTYPE html>
<html>
 
<header>
<h1>mini-site-routing</h1>
</header>
 
<body>
 
<nav>
<a href="mini-site-routing.php?page=1">Accueil</a>
<a href="mini-site-routing.php?page=2">Page 1</a>
<a href="mini-site-routing.php?page=3">Page 2</a>
<a href="mini-site-routing.php?page=connexion">connexion</a>
<?php
if(isset($_SESSION['id'])) {
    echo "<a href='mini-site-routing.php?page=admin'>admin</a>";
}
?>
</nav>
 
<?php
function afficher_pages(){
    if($_GET['page'] == 1){
   echo  "Accueil !";
    }
else if($_GET['page'] == 2){
echo "Page 2 !";
}
else if($_GET['page'] == 3){
    echo "Page 3 !";
}
else if($_GET['page'] == "connexion"){
    echo "connexion";
    include('connexion.php');
}
else if($_GET['page'] == "admin"){
    echo "admin";
    include('admin.php');
}
}
afficher_pages();
?>
<p>
<?php
function verifier_session(){
 
if(isset($_SESSION['id'])){
    echo "Login :" , $_SESSION['id'];
}
else if(isset($_COOKIE['cookie'])) {
        setcookie("cookie", $_SESSION['id']);
}
else{
        header("Location: connexion.php");
}}

?>
<?php
    echo $_SESSION["image"];
?>
</p>
 
</body>
 
</html>