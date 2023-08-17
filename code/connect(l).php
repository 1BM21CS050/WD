<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "book collection drive";

$con = mysqli_connect('localhost','root','',$dbname);
session_start();
//echo("HI");
if(isset($_POST['Submit']))
{
    $un = $_POST['Username'];
    $pass = $_POST['Password'];
    


  //echo("Hiiiii");
    if(isset($un) && isset($pass))
    {
      $query = "INSERT INTO login (Username, Password) VALUES ('$un', '$pass')";
      $c = mysqli_query($con, $query);
    }
}

    if($c)
    {
    echo ("Success");
    header("Location: collection.php");
    }
    else
    {
    echo ("Unsuccesful");
    }
?>

  

    
  
    








    