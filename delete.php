<?php 

$con=mysqli_connect("localhost","root","","office");

$id=$_REQUEST["d"];

$confirm=mysqli_query($con,"delete from employes where id =$id");

if($confirm==1)

{
    header("location:index.php");   
}

else
{
    echo"Profile Not Deleted";
}
?>
