<?php
$con=mysqli_connect("localhost","root","","office");
    $id=$_GET["update"];
    $confirm=mysqli_query($con,"select * from employes where id =$id");
if(mysqli_num_rows($confirm)==1)
{
    $ar=mysqli_fetch_array($confirm);
}
else
{
       return;
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viweport" content="width=device-width", initial-scale=1>
    <link rel="stylesheet" href="bootstrap.min.css" >
</head>
<body> 
    <div class="container">
    <h1 class="text-success text-center">Update</h1>
    <div class="col-lg-8 m-auto d-block">
        <form action="update2.php" method="post" enctype="multipart/form-data" class="bg-light">
        <div class="form-group">
            <label for="id">ID :</label>
            <input type="text" name="id" class="form-control" value="<?php echo $ar['id']; ?>" >
        </div>

        <div class="form-group">
            <label for="first_name">First Name :</label>
            <input type="text" name="firstname" class="form-control" value="<?php echo $ar['first_name']; ?>" >
        </div>
        <div class="form-group">
            <label for="last_name">Last Name :</label>
            <input type="text" name="lastname" class="form-control" value="<?php echo $ar['last_name']; ?>">    
        </div>
        <div class="form-group">
            <label for="mobile">Phone Number :</label>
            <input type="text" maxlength="10"  name="mobile" class="form-control" value="<?php echo $ar['mobile']; ?>">
            
        </div> 
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="text" name="email" class="form-control" value="<?php echo $ar['email']; ?>">
        </div>  
        <div class="form-group">
            <label for="address">Address :</label>
            <textarea cols="15" rows="4" name="address"  class="form-control" value="<?php echo $ar['address']; ?>"></textarea>
        </div>  
        <div class="form-group">
            <label for="image">Select Photo :</label>
            <input type="file" name="img" id="img" class="form-control">
        </div>  
            <input type="submit" name="create" Value="Create" class="btn btn-primary"> 

        </form>

    </div>
    </div>
    
</body>
</html>

