
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "shop";

$connect = mysqli_connect($servername,$username,$password,$databasename);
if(!$connect){
    echo "Connected failed";
}

?>

