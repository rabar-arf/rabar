
<?php
session_start();
 
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<html>
<head>
<title>Home Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap-4.5.0-dist\css\bootstrap.min.css">
</head>
<body>
    <div >

<h4 style=" color:#fff;
    
    text-align: left;
    text-transform: uppercase;position: fixed;"> Welcome <?php echo $_SESSION['username']; ?> </h4><br>
        <h6 style="color:#fff;position: fixed;">You Login at: <?php echo  date("y/m/d") ?> </h6>

        
        </div>
 <div ><a class="float-right" href="logout.php" style="color:#fff;" > Logout </a></div>
 <center> <div style="border:2px solid red;height:300px;width:600px;background-color: chocolate">
     
     <h5><b>Welcome to PHP website....<br>
         if you have comment please write it down</b></h5></div>  <?php


$con=mysqli_connect('localhost','root','13572468');
mysqli_select_db($con,'userregistration');
            

          
           $page=$_GET["page"];
            
            if($page=="" || $page=="1")
            {
                $page1=0;
            }else
            {
                $page1=($page*5)-5;
            }

            
$s = "select * from pagin limit $page1,5  ";
$result = mysqli_query($con,$s);


            while($row=mysqli_fetch_array($result))
            {
                echo '<div style="border: 2px solid #fff;width:200px;right:100; background-color:#fff;overflow:auto;max-width:100%;";>';
                echo $row["id"]."     ".$row["text"];
                echo '</div>';
                echo "<br>";
            } 
            
            $s2 = "select * from pagin";
           $result2 = mysqli_query($con,$s2);

            $cou=mysqli_num_rows($result2);
$a=$cou/5;
    $c= ceil($a);
            echo "<br>";echo "<br>";
    for($b=1;$b<=$c;$b++)
    {
         ?><a name="pagt" class="pagina" href="welcome.php?page=<?php echo $b;?>" style="color:blue; text-align:center;
    padding: 8px 16px;text-decoration:none;border:1px solid #ddd;border-bottom-left-radius:20px;bottom-right-radius:20px;"><?php echo $b."        ";?></a><?php
    }
            echo "<br>";echo "<br>";
?>
    <br>
                    <button type="button" class="btn btn-primary" onclick="document.getElementById('popup').style.display='block' " >Add Notes</button><br>
    <form action="add.php"  method="post" >
    <div id="popup">
  
       
        <textarea onfocus="this.value=''" name="textt">Enter your notes...</textarea><br>
        
          
        <button type="sumbit" class="btn btn-primary" onclick="document.getElementById('popup').style.display='none' " >Add</button><br>
         

    </div>
        </form>
       
     <?php
     
     ?> 
     <?php
     if($_SESSION['username']=="admin"){
       ?>
          <form action='delete.php' method='post' style='text-align:left;'>
            <h6 style='color:white'><b>Enter record id that you want to delete:</b></h6><input type='text' name='idelete' id='idelete' style='  border: 2px solid blue;border-radius: 4px;'><br>
            <button type='submit' name='bdelete' class='btn btn-info'>Delete</button>
        </form>";              
    <?php }  else
     {
       
     }
     ?>
     

        
 
     
     <?php
    




/*$con=mysqli_connect('localhost','root','13572468');
mysqli_select_db($con,'userregistration');
$not= $_POST['delete'];

$s = "DELETE FROM pagin WHERE id=$not";
if($con->query($s)===True){
    echo "Record delete";
}
else {
    echo "Fail";
}

$con->close();*/

?>

</body></html>