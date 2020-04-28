<?php    
echo"<!DOCTYPE HTML>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viweport' content='width=device-width', initial-scale=1>
    <link rel='stylesheet' href='bootstrap.min.css' >
    

</head>
    <body>
        <h1 class='text-center text-primary'>Welcome</h1>
        <table border='3' align='center' cellpadding='30px'>       
            <tr>
                <td><a href='insert.php'>CREATE</a>
              </tr>
        </table>
    </body>
</html>
";

echo"<h1 class='text-center text-success'>Profiles</h1>";

$con=mysqli_connect("localhost","root","","office");

$rs=mysqli_query($con,"SELECT * FROM employes");
    
    echo"<table border='3' align='center' cellpadding='30px'>";
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
    echo"<td><img src=' images/ ".$row["image"]."'               height='100px' width='100px'></td>";
    
    echo"<td><a href=delete.php?d=".$row["id"].">DELETE</a>";
    echo"<td><a href=update.php?u=".$row["id"].">UPDATE</a></tr>";
    
   
}

?>