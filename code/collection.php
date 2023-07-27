

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="D:\VS Code\WAD\logo.ico.jpg" type="icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Collection</title>
    <link rel="stylesheet" href="bcstyles.css">
    <link rel="stylesheet" href="bgc.css">
</head>
 
<style>.cont{
    display: flex;
     }
 .head1
 {
 display: inline-block;
 text-align: center;
 background-color: tomato;
 border: solid blue 2px;
 margin:8px 0px;
 
 }
 .head2
 {
 display: inline-block;
 text-align: center;
 background-color: #ff523b;
 border: solid black 2px;
 margin:8px 55px;
 }
 .table{
     background-color: #ff523b;
     width: 610px;
 }
 
 .inp li{
     list-style: none;  
 }
 .BookCollected{
     display: inline-block;
  
 }
 .BooksDist{
 display: inline-block;
 }
 .BooksDist .head2 .table .box0{
    width: 300px;
    box-sizing:border-box;
 }

 .BooksDist .head2 .table .input{
    width: 298px;
    box-sizing:border-box;
 }
 
 .butal{
    padding-left: 300px;
    padding-top: 30px;
 }

</style>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="logo.ico.jpg" width="125px" height="125px" >
                </div>
                <nav>
                    <ul>
                        <li><a href="bchtml.php" class="btn">Sign out</a></li>
                        <li><a href="distribution.php" class="btn">Distribution</a></li>
                    </ul>
                </nav>
              </div>
        </div>
    </div>


<div class="BooksDist">
    <div class="head2">
        <h2>Books Collected</h2>
        <form action='./res.php' method="post">
        <h3><input type="text" name="Location" placeholder="Location" class="input"></input></h3>
        <div class="table">
        <table border="2">
            <thead >
                
                <tr >
                    <th><h3>Subject</h3></th>
                    <th><h3>Quantity</h3></th>                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="box0"><input type="text" name="Subject1" placeholder="Enter subject name" class="input"></input></td>
                    <td class="box0"><input type="text" name="Quantity1" placeholder="Number of books" class="input"></input></td>
                    
                </tr>
                <tr>
                    <td class="box0"><input type="text" name="Subject2" placeholder="Enter subject name" class="input"></input></td>
                    <td class="box0"><input type="text" name="Quantity2" placeholder="Number of books" class="input"></input></td>
                    
                </tr>
                <tr>
                    <td class="box0"><input type="text" name="Subject3" placeholder="Enter subject name" class="input"></input></td>
                    <td class="box0"><input type="text" name="Quantity3" placeholder="Number of books" class="input"></input></td>
                    
                </tr>
                <tr>
                    <td class="box0"><input type="text" name="Subject4" placeholder="Enter subject name" class="input"></input></td>
                    <td class="box0"><input type="text" name="Quantity4" placeholder="Number of books" class="input"></input></td>
                    
                </tr>
                <tr>
                    <td class="box0"><input type="text" name="Subject5" placeholder="Enter subject name" class="input"></input></td>
                    <td class="box0"><input type="text" name="Quantity5" placeholder="Number of books" class="input"></input></td>
                    
                </tr>

            
                <tr>
                    <td class="box0"><input type="text" name="Subject6" placeholder="Enter subject name" class="input"></input></td>
                    <td class="box0"><input type="text" name="Quantity6" placeholder="Number of books" class="input"></input></td>
                    
                </tr>

            </tbody>
        </table>

        
    </div>
    
    
</div>

<div class="row">
    <div class="col">
    
    <p class="butal"><input type="submit" class="btn" name="Submit" value="Submit"/></p>
    </div>
  <div class="col">
    
  </div>

</div>
</form> 
</body>
</html>