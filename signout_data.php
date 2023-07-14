<?php 
require_once "include/database.php";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$password = md5($_POST['password']);

$uppercase = preg_match('@[A-Z]@',$password);
$lowercase = preg_match('@[a-z]@',$password);
$number = preg_match('@[0-9]@',$password);
$special = preg_match('@[^\w]@',$password);

$check_invalid_email = "SELECT * FROM shouse WHERE email='$email'";
$check_email = mysqli_query($connect,$check_invalid_email);
if(empty($first_name)||empty($last_name)||empty($email)||empty($gender)||empty($password)){
    echo "Please fill up full form";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "Invalid email";
}
elseif($check_email->num_rows==1){
    echo "This email already in use";
}
elseif(!$uppercase && !$lowercase && !$number && !$special && strlen($password)<=8){
    echo "Please use password should be 8 charecter";
}
else{
    $password = md5($_POST['password']);
    $insert_quary = "INSERT INTO shouse(first_name,last_name,email,gender,password) VALUE('$first_name','$last_name','$email','$gender','$password')";
    $insert = mysqli_query($connect,$insert_quary);
    if($insert){
        header("location:index.php");
    }
}




