<?php
include 'db_connection.php';

$conn = OpenCon();

$username = "arelliott";
$password = "andiloop";
$result=mysqli_query($conn,"select Password from users where Username = '$username'");

while($row=mysqli_fetch_array($result))
{
    if($row['Password']==$password){
        echo "password correct".'<br/>';
    }   
    else{
        echo "password incorrect";
    }
 }

CloseCon($conn);

?>