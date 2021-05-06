<?php
include 'db_connection.php';

$conn = OpenCon();

if ($_SERVER["REQUEST_METHOD"]=="POST"){
$username = $_POST["username"];
$password = $_POST["password"];
}

$result=mysqli_query($conn,"select * from users where Username = '$username' and Password = '$password'");

while($row=mysqli_fetch_array($result))
 {
  header("Location: successful_login.php");
 }

echo "wrong info";

CloseCon($conn);

?>