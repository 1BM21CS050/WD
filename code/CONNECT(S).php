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
    $em = $_POST['Email'];
    $pas = $_POST['Password'];
    $cp = $_POST['Confirmpassword'];




  //echo("Hiiiii");
    if(isset($em) && isset($pas) && isset($cp))
    {
    if ($pas === $cp)
     {
      $query = "INSERT INTO signup (Email, Password, Confirmpassword) VALUES ('$em', '$pas', '$cp')";
      $c = mysqli_query($con, $query);
     }
    }
  }


    if($c)
    {
    //echo ("Success");
    header("Location: login..php");
    }
    else{
    echo ("Unsuccesful");
    }
?>
        
    
  
    


  

    
  
    








    
