<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_lab2";
$email=$_POST["email"];
$passworduser = md5($_POST["password"]);
//$passworduser=$_POST["password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if($email!=''&& $passworduser!='')
{

 $query="SELECT * FROM User WHERE email='$email' AND password='$passworduser'";
 $result=mysqli_query($conn,$query);

 if(!$result)
    die("Query Failed: " .  mysqli_error($conn));
 else{
     if(mysqli_num_rows($result)>0)
     {
        $_SESSION['email']=$email;
    header('Location:welcome.php');
     }
    else
    {
       echo "You entered username or password is incorrect";
     }
 }
}
if (empty($email)) {

    echo "email is requied";
}
if (empty($passworduser)) {

    echo "password is requied";
}

$conn->close();
?>
