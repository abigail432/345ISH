<?php
include 'db_connection.php';

$conn = OpenCon();

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
}

$results=mysqli_query($conn,"select * from users");

foreach($results as $result){
    if(($result['Username'] == $username) && ($result['Password'] == $password)) {
            header("Location: successful_login.php");
        }
}

echo "wrong info";

// while($row=mysqli_fetch_array($result))
// {
//     if($row['Password']==$password && $row['Username']==$username){
//         echo "password correct".'<br/>';
//         //header("Location: successful_login.php");
//     }   
//     else{
//         echo "alert('Password incorrect')";
//     }
//  }

CloseCon($conn);

?>