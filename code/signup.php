<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="D:\VS Code\WAD\logo.ico.jpg" type="icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Collection</title>
    <link rel="stylesheet" href="bcstyles.css">
    <link rel="stylesheet" href="bgbc.css">
    
</head>
<body>
<form action="./CONNECT(S).php" method="post">
    <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <img src="logo.ico.jpg" width="125px" height="125px" >
            </div>
            <nav>
                <ul>
                    <li><a href="bc.html" class="btn">Home</a></li>
                    <li><a href="login..php" class="btn">Login</a></li>
                    <li><a href="signup.php" class="btn">Sign Up</a></li>
                </ul>
            </nav>
          </div>
          <div class="row1">
            <div class="col2">
                <form action="./CONNECT(S).php" method="post">
                   <h2>Sign up</h2>
                </div>
                <div class="col1">
                    
                    <input type="text" name = "Email" placeholder="Email" pattern="[a-z]+.[a-z]+[0-9]+@bmsce.ac.in" id="Email" name="Email" required>
                            
                            
                </div>
                <div class="col1">
                    <input type="password" name="Password" placeholder ="Password">
                </div>
                <div class="col1">
                    <input type="password" name="Confirmpassword" placeholder="Confirmpassword">
                </div>
                <div class="row">
    <div class="col">
    
    <input class="btn" type="submit" name="Submit" value="Submit"/>
    </div>
  <div class="col">
    
  </div>

</div>
        </form>
          </div>
    </div> 
</form> 
</body>
</html>