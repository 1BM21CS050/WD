<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="D:\VS Code\WAD\logo.ico.jpg" type="icon">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <TITLE> Book Collection</TITLE>
        <link rel="stylesheet" href="bcstyles.css">
        <link rel="stylesheet" href="bgbc.css">
        

        <script type="text/javascript" src="javas.js"></script>
        <!--<script type="text/javascript">
            function validate1()
            {
              var uname=document.getElementsByName("uname");
              var psw=document.getElementById("psw");
              if(psw.values="signup.Password")
              {
                alert("Enter Username");
                return true;
              }
            }
        </script>-->
    </head>
        <body>
          <form action = './connect(l).php' method="post">
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
                      <form  onsubmit="validate1();" onsubmit="collection.php" action="./connect(l).php" method="post">
                        <div class="col1">
                          <label for="uname" name="username"><b>Username</b></label>
                          <input type="text" name = "Username" placeholder="Enter Username" pattern="[a-z]+.[a-z]+[0-9]+@bmsce.ac.in" id="uname" name="uname" required>
                            
                            
                          <label for="psw" name="password"><b>Password</b></label>
                          <input type="password" name = "Password" placeholder="Enter Password" id="psw" name="psw" required>
                          <div id="message">
                          </div>
                          <div class="col">
    
    <input class="btn" type="submit" name="Submit" value="Submit"/>
    </div>
  <div class="col">
    
  </div>

</div>
                      </form>
          </form>
        </body>
</html>