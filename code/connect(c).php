
<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "book collection drive";
   $con = mysqli_connect('localhost', 'root','', $dbname);
   session_start();
echo("HIIIIIIIIIIIIIIIII");
  if (isset($_POST['Submit']))
  {
    $loc = $_POST['Location'];
    $sub = $_POST['Subject'];
    $qty = $_POST['Quantity'];
    $abc = array_combine($sub, $qty);


    echo("<h1>HIIIIII</h1>");
    if (isset($loc)  && isset($sub) && isset($qty))
     {
        $query = "INSERT INTO collection (Location) VALUES ('$loc')";

       $c= mysqli_query($con, $query);
       foreach($abc as $sub =>$qty)
       {
         echo "$sub -> $qty";
         $res = mysqli_query($con, "INSERT INTO COLLECTION(Subject,Quantity) VALUES ('$sub', '$qty')");
       }
        
        echo($c && $res);
        if ($c && $res) {
            echo("<h1>Here</h1>");
        } else {
            echo("<h1>Not Here</h1>");
        }
       
        //header("Location: collection.php");
       

    } 
    
}
   



 
?>