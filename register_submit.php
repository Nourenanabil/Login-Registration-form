<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_lab2";
$name=$_POST["name"];
$email=$_POST["email"];
$passworduser = md5($_POST['password']);
$confirmpass=md5($_POST['confirm_password']);
//$passworduser=$_POST["password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM User WHERE email='$email'";




$result=mysqli_query($conn,$query);


    if(mysqli_num_rows($result)>0)
    {
    echo "<script> alert('this email is already used please pick another one'); </script>";
 }

$conn->close();
?>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_lab2";
$name=$_POST["name"];
$email=$_POST["email"];
$passworduser = md5($_POST['password']);
$confirmpass=md5($_POST['confirm_password']);
//$passworduser=$_POST["password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
  echo "<script> alert('not email format'); </script>";
}
$sql = "INSERT INTO User (name, email,password)
 VALUES('$name','$email','$passworduser')";



if ($conn->query($sql) === TRUE) {
  echo "<script> alert('New record created successfully'); </script>";
  //header('Location:register_form.php');
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

if (empty($name)) {

    echo "name is requied";
}
if (empty($email)) {

    echo "email is requied";
}
if (empty($passworduser)) {

    echo "password is requied";
}
if (empty($confirmpass)) {

    echo "confirm password is requied";
}
if($passworduser!=$confirmpass)
{
  echo"password should equal confirm password";
}
$conn->close();
?>
