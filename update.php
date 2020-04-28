<?php
$con=mysqli_connect("localhost","root","","office");
    $id=$_REQUEST["u"];
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
    <script type="text/javascript">
        function mobile(){
            var number=document.getElementById('m').value;
            if(isNaN(number))
            {
               alert("** enter only numbers");
                return false;
            }
        }
    </script>
</head>
<body> 
    <div class="container">
    <h1 class="text-success text-center">Update</h1>
    <div class="col-lg-8 m-auto d-block">
        <form method="post" enctype="multipart/form-data" class="bg-light">
        <div class="form-group">
            <label for="first_name">First Name :</label>
            <input type="text" name="fn" id="fn" class="form-control" value="<?php echo $ar['first_name']; ?>" >
        </div>
        <div class="form-group">
            <label for="last_name">Last Name :</label>
            <input type="text" name="ln" id="ln" class="form-control" value="<?php echo $ar['last_name']; ?>">    
        </div>
        <div class="form-group">
            <label for="mobile">Phone Number :</label>
            <input type="text" maxlength="10"  name="m" id="m" class="form-control" onkeydown="mobile()" value="<?php echo $ar['mobile']; ?>">
            
        </div> 
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="text" name="e" id="e" class="form-control" onkeydown="email()" value="<?php echo $ar['email']; ?>">
        </div>  
        <div class="form-group">
            <label for="address">Address :</label>
            <textarea cols="15" rows="4" name="a" id="a" class="form-control" value="<?php echo $ar['address']; ?>"></textarea>
        </div>  
        <div class="form-group">
            <label for="image">Select Photo :</label>
            <input type="file" name="img" id="img" class="form-control">
        </div>  
            <input type="submit" name="c" Value="Create" id="c" class="btn btn-primary"> 

        </form>

    </div>
    </div>
    
</body>
</html>


<?php
$link = mysqli_connect("localhost", "root", "", "office");
$fn = $_POST["fn"];
$ln = $_POST["ln"];
$email = $_POST["e"];
$mobile = $_POST["m"];
$address = $_POST["a"];
$img=$_FILES["img"]["name"];

if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql="UPDATE `employes` SET `first_name`='$fn',`last_name`='$ln',`email`='$email',`mobile`=$mobile,`address`='$address',`image`='$img' WHERE id=$id";   

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
