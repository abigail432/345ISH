<?php
include 'db_connection.php';

$conn = OpenCon();

if ($_SERVER["REQUEST_METHOD"]=="POST"){
$username = $_POST["username"];
$password = $_POST["password"];
}

$result=mysqli_query($conn,"select Password from users where Username = '$username'");

while($row=mysqli_fetch_array($result))
{
    if($row['Password']==$password){
        echo "password correct".'<br/>';
        header("Location: loginpage.php");
    }   
    else{
        echo "Password incorrect";
    }
 }

CloseCon($conn);

?>