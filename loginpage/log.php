<?php
if(isset($_POST['submit'])){
    $username = $_POST['login'];
    header("Location:password.php");
}


?>