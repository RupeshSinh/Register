<?php 

$con=mysqli_connect("localhost","root","","office");

$id=$_GET["delete"];

$confirm=mysqli_query($con,"delete from employes where id =$id");

if($confirm==1)

{
    header("location:read.php");   
}

else
{
    echo"Profile Not Deleted";
}
?>
