<?php
include 'db_connection.php';

$conn = OpenCon();

$username = "arelliott";
$password = "andiloop";
$result=mysqli_query($conn,"select * from users");

while($row=mysqli_fetch_array($result))
{
    if($row['Password']==$password && $row['Username']==$username){
        echo "password correct".'<br/>';
        header("Location: successful_login.php");
    }   
    else{
        echo "alert('Password incorrect')";
    }
 }

CloseCon($conn);

?>