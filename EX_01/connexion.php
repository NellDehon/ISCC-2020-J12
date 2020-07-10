<!DOCTYPE html>
<html>
 
    <body>
        <form action="securite.php" method="post">
        
                <label for="login">login :</label>
                <input type="text" id="login" name="user_login">
                <label for="password"><br>password :</label>
                <input type="text2" id="password" name="user_password">
                
            <div class="button">
            <input type="submit" value="validé">
        </div>
        </form>
<?php
 
        if(isset($_SESSION['id'])){
            setcookie("cookie", $_SESSION['id']);
        }
 
?>
    </html>