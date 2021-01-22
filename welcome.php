<?php
session_start();
?>

<html>
<head>
<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
<div class="welcome">
  <h2>WELCOME</h2>

<?php

$link = mysqli_connect("localhost", "root", "", "db_lab2");
$email=$_SESSION['email'];
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM User WHERE email='$email' ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){
          $name=$row['name'];
            echo '<h2>'.ucfirst(  $name ).'</h2>';
        }

        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
</div>
  <div class="form2">
<?php
$con=mysqli_connect("localhost","root","","db_lab2");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$result = mysqli_query($con,"SELECT * FROM Department");

echo "<table border='1'>
<tr>
<th>NAME</th>
<th>DESCRIPTION</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['description'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div>
</body>
</html>
