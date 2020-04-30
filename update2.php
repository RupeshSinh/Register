<?php
$link = mysqli_connect("localhost", "root", "", "office");
$id=$_POST["id"];
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$address=$_POST["address"];
$img=$_FILES["img"]["name"];

if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql="UPDATE `employes` SET `first_name`='$firstname',`last_name`='$lastname',`email`='$email',`mobile`=$mobile,`address`='$address',`image`='$img' WHERE id=$id";   

if(mysqli_query($link, $sql))
{
    move_uploaded_file($_FILES["p"]["tmp_name"],"images/".$img);
    header("location:index.php");
}

else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); 
}
 

?>
