<?php

session_start();
header('location:welcome.php');

$con=mysqli_connect('localhost','root','13572468');
mysqli_select_db($con,'userregistration');
$not= $_POST['idelete'];

mysqli_query($con,"DELETE FROM pagin WHERE id=$not");
echo "information delete";
             /*if($con->query($s)===True){
    echo "Record delete";
}
else {
    echo "Fail";
}*/

$con->close();

?>
