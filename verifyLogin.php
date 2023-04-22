<?php
  
$db = mysqli_connect("localhost","root","","test");
  
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " 
        . mysqli_connect_error();
}


$username = stripslashes($_GET['username']);
$email = stripslashes($_GET['email']);
$password = stripslashes($_GET['password']);
$sql = 
"SELECT * FROM MyGuests WHERE username = '$username' AND  password = '$password'";
$result = mysqli_query($db, $sql) or die(mysqli_error($db));
$num = mysqli_fetch_array($result);
      
if($num > 0) {
    echo "Login Success";
    $row = mysqli_fetch_array($result);
    header("Location: hi.php");
    exit();
}
else {
    echo "Wrong User id or password";
}
?>