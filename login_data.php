<?php 
require_once "include/database.php";
$email = $_POST ['email'];
$password = md5($_POST['password']);
$login_set = "SELECT * FROM shouse WHERE email='$email' and password='$password'";
$login = mysqli_query($connect,$login_set);
$user = mysqli_fetch_assoc($login);
if($user['first_name']){
    session_start();
    $_SESSION['first_name'] = $user['first_name'];
    header("location:index.php");
}

?>