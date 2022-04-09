<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$db1 = mysqli_connect("localhost",'root',"",'lab');

$insert_query = "INSERT INTO data1 (name,email,phone,message)
VALUES('$name','$email','$phone','$message')";

mysqli_query($db1 , $insert_query);
echo" Thank you."; 

?>