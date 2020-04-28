<?php 
if(isset($_REQUEST["create"]))
{
$con=mysqli_connect("localhost","root","","office");
$fn=$_REQUEST["fn"];
$ln=$_REQUEST["ln"];
$m=$_REQUEST["m"];
$e=$_REQUEST["e"];
$a=$_REQUEST["a"];
$img=$_FILES["img"]["name"];

$query="INSERT INTO `employes`(`first_name`, `last_name`, `mobile`, `email`, `address`, `image`) VALUES ('$fn','$ln',$m,'$e','$a','$img')";

$result=mysqli_query($con,$query);

if($result)
{
    move_uploaded_file($_FILES["img"]["tmp_name"],"images/ ".$img);
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
    
    <script type="text/javascript">
        function check(){
            var fn = document.getElementById('fn').value;
            var ln = document.getElementById('ln').value;
            var m = document.getElementById('m').value;
            var e = document.getElementById('e').value;
            var a = document.getElementById('a').value;
            var img  =document.getElementById('img').value;
            if(fn == "")
            {
                alert("Please fill First Name");
                return false;
            }
            if(ln == "")
            {
                alert("Please fill Last Name");
                return false;
            }
            if(m == "")
            {
                alert("Please fill Phone number");
                return false;
            }
            if(e == "")
            {
                alert("Please fill Email");
                return false;
            }
            if(a == "")
            {
                alert("Please fill Address ");
                return false;
            }
            if(img == "")
            {
                alert("Please Choose Image");
                return false;
            }
            }

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
        <h1 class="text-success text-center">Insert Data</h1>
        
            <div class="col-lg-8 m-auto d-block">
                <form action="insert.php" onsubmit="check()" method="post" enctype="multipart/form-data" class="bg-light">
                    <div class="form-group">
                        <label for="first_name">First Name :</label>
                        <input type="text" name="fn" id="fn" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name :</label>
                        <input type="text" name="ln" id="ln" class="form-control">    
                    </div>
                    <div class="form-group">
                        <label for="mobile">Phone Number :</label>
                        <input type="text" maxlength="10"  name="m" id="m" class="form-control" onkeydown="mobile()">

                    </div> 
                    <div class="form-group">
                        <label for="email">Email :</label>
                        <input type="text" name="e" id="e" class="form-control" onkeydown="email()">
                    </div>  
                    <div class="form-group">
                        <label for="address">Address :</label>
                        <textarea cols="15" rows="4" name="a" id="a" class="form-control"></textarea>
                    </div>  
                    <div class="form-group">
                        <label for="image">Select Photo :</label>
                        <input type="file" name="img" id="img" class="form-control">
                    </div>  
                        <input type="submit" name="create" Value="Create" id="c" class="btn btn-primary"> 

                </form>

            </div>
        </div>
    </body>
</html>
