<?php
session_start();
header('location:welcome.php');

$con=mysqli_connect('localhost','root','13572468');
mysqli_select_db($con,'userregistration');
$not= $_POST['textt'];

$s = "select * from pagin";
$result = mysqli_query($con,$s);
$reg="insert into pagin(text) values ('$not')";
mysqli_query($con, $reg);
    echo" Registration Successful";


?>
