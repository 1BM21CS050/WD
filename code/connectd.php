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
    $un = $_POST['Location'];
    $pass = $_POST['Subject1'];
    $passin = $_POST['Quantity1'];
    


 // echo("Hiiiii");
    if(isset($un) && isset($pass))
    {
      $query = "INSERT INTO distribution (Location, Subject, Quantity ) VALUES ('$un', '$pass', '$passin')";
      $c = mysqli_query($con, $query);
    }
}
if(isset($_POST['Submit']))
{
    $pass2 = $_POST['Subject2'];
    $passin2 = $_POST['Quantity2'];
    


  //echo("Hiiiii");
    if(isset($un) && isset($pass))
    {
      $query = "INSERT INTO distribution ( Location,Subject, Quantity ) VALUES ( '$un','$pass2', '$passin2')";
      $c = mysqli_query($con, $query);
    }
}
if(isset($_POST['Submit']))
{
    $pass3 = $_POST['Subject3'];
    $passin3 = $_POST['Quantity3'];
    


 // echo("Hiiiii");
    if(isset($un) && isset($pass))
    {
      $query = "INSERT INTO distribution( Location,Subject, Quantity ) VALUES ( '$un','$pass3', '$passin3')";
      $c = mysqli_query($con, $query);
    }
}
if(isset($_POST['Submit']))
{
    $pass4 = $_POST['Subject4'];
    $passin4 = $_POST['Quantity4'];
    


  //echo("Hiiiii");
    if(isset($un) && isset($pass))
    {
      $query = "INSERT INTO distribution ( Location,Subject, Quantity ) VALUES ( '$un','$pass4', '$passin4')";
      $c = mysqli_query($con, $query);
    }
}
if(isset($_POST['Submit']))
{
    $pass5 = $_POST['Subject5'];
    $passin5 = $_POST['Quantity5'];
    


  //echo("Hiiiii");
    if(isset($un) && isset($pass))
    {
      $query = "INSERT INTO distribution ( Location,Subject, Quantity ) VALUES ( '$un','$pass5', '$passin5')";
      $c = mysqli_query($con, $query);
    }
}
if(isset($_POST['Submit']))
{
    $pass6 = $_POST['Subject6'];
    $passin6 = $_POST['Quantity6'];
    


  //echo("Hiiiii");
    if(isset($un) && isset($pass))
    {
      $query = "INSERT INTO distribution ( Location,Subject, Quantity ) VALUES ( '$un','$pass6', '$passin6')";
      $c = mysqli_query($con, $query);
    }
}


    if($c)
    {
    echo ("Successful");
    }
    else
    {
    echo ("Unsuccesful");
    }
        
    
  
    
?>

  

    
  
    







    