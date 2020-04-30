<?php 
if(isset($_POST["create"]))
{
$con=mysqli_connect("localhost","root","","office");

$firstname=mysqli_real_escape_string($con,$_POST["firstname"]);
$lastname=mysqli_real_escape_string($con,$_POST["lastname"]);
$mobile=mysqli_real_escape_string($con,$_POST["mobile"]);
$email=mysqli_real_escape_string($con,$_POST["email"]);
$address=mysqli_real_escape_string($con,$_POST["address"]);
$img=$_FILES["img"]["name"];

$query="INSERT INTO employes(first_name, last_name, mobile, email, address, image) VALUES ('$firstname','$lastname',$mobile,'$email','$address','$img')";

$result=mysqli_query($con,$query);

if($result)
{
    move_uploaded_file($_FILES["img"]["tmp_name"],"images/".$img);
    header("location:index.php");
}

else
    die(mysqli_error($con));
}
?>

<!DOCKTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viweport" content="width=device-width", initial-scale=1>
    <link rel="stylesheet" href="bootstrap.min.css" >
</head>
<body>
    <div class="container">
        <h1 class="text-success text-center">Insert Data</h1>
        
            <div class="col-lg-8 m-auto d-block">
                <form action="insert.php" method="post" enctype="multipart/form-data" class="bg-light">
                    <div class="form-group">
                        <label for="first_name">First Name :</label>
                        <input type="text" name="firstname" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name :</label>
                        <input type="text" name="lastname" class="form-control">    
                    </div>
                    <div class="form-group">
                        <label for="mobile">Phone Number :</label>
                        <input type="text" maxlength="10"  name="mobile" class="form-control">

                    </div> 
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="text" name="email" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label for="address">Address :</label>
                        <textarea cols="15" rows="4" name="address" class="form-control"></textarea>
                    </div>  
                    <div class="form-group">
                        <label for="image">Select Photo :</label>
                        <input type="file" name="img" class="form-control">
                    </div>  
                        <input type="submit" name="create" Value="Create" class="btn btn-primary"> 

                </form>

            </div>
        </div>
    </body>
</html>
