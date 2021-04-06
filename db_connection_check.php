<?php
include 'db_connection.php';

$conn = OpenCon();

echo "Connected Successfully";

$result=mysqli_query($conn,"select * from users");
//mysqli_query($conn,"insert into users (Username, Password) values('Quack', 'DuckDuckGoose')");

while($row=mysqli_fetch_array($result))
{
         echo $row['Username'].' '.$row['Password'].'<br/>';
 }

CloseCon($conn);

?>