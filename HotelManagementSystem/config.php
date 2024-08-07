<?php

$server = "localhost";
$username = "kings_user";
$password = "password";
$database = "kingshotel";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>
