<?php
    
echo"<h1 class='text-center text-success'>Profiles</h1>";
    
echo" <div class='row justify-content-center'>";
    
echo"<a href='index.php'><input type='button' name='home' value='home' class='btn btn-primary btn-lg'></a>";
echo"</div>";
        
$con=mysqli_connect("localhost","root","","office");

$rs=mysqli_query($con,"SELECT * FROM employes");
    echo"<table align='center' cellpadding='20px' class='table-dark table-center'>";
    echo"<tr><td>ID</td>";
    echo"<td>First Name</td>";
    echo"<td>Last Name</td>";
    echo"<td>Email Id</td>";
    echo"<td>Phone Number</td>";
    echo"<td>Address</td>";
    echo"<td>Profile Photo</td>";
    echo"<td>Delete</td>";
    echo"<td>Update</td></tr>";


while($row=mysqli_fetch_array($rs))
{
    echo"<tr><td>".$row["id"];
    echo"<td>".$row["first_name"];
    echo"<td>".$row["last_name"];
    echo"<td>".$row["email"];
    echo"<td>".$row["mobile"];
    echo"<td>".$row["address"];
    echo"<td><img src=' images/".$row["image"]."' height='100px' width='100px'>";
    
    echo"<td><a href=delete.php?delete=".$row["id"]." >DELETE</a>";
    echo"<td><a href=update.php?update=".$row["id"]." >UPDATE</a></tr>";
    
}

?>
