<!DOCTYPE html>
<html>
    <head>
        
        <meta charset='utf-8'>
        
        <meta name='viweport' content='width=device-width', initial-scale=1>
        
        <link rel='stylesheet' href='bootstrap.min.css' >
        
        <script>
            function read() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange=function() {
                    if (this.status==200)
                    {
                        document.getElementById("demo").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "read.php" , true );
                xhttp.send();
            }
    
        </script>
    </head>
    
    <body>
        
        <h1 class='text-center text-danger '>Welcome</h1>
        
        
        <div class="row justify-content-center">
             <p class="text-success">FOR CREATING PROFILE CLICK ON CREATE.</p>
        </div>

        
        <h3 class='text-center text-primary'>
             <a href='insert.php'><button>CREATE</button></a>
        </h3>
        
        <div class="row justify-content-center text-primary">
            <p>FOR READING PROFILE CLICK ON READ.</p>
        </div>
        
        <div class="row justify-content-center">
            <input type="button" name="read" onclick="read()" value="Read" class="btn btn-primary btn-lg">
        </div>
        
        <div id="demo"></div>

        
    </body>
</html>