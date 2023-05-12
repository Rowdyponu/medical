<?php
$connection=mysqli_connect('localhost','root');

mysqli_select_db($connection,"medclime");

    $user = $_POST['user'];
    $email = $_POST['email'];
    $message = $_POST['message'];


$query = "INSERT INTO `userinfodata`(`user`,`email`,`message`) VALUES ('$user','$email','$message')";

mysqli_query($connection,$query,);

if(!$connection){
    die('Connection Error: '.mysqli_connect_error());
}

?>