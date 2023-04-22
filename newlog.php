
<?php
  
$db = mysqli_connect("localhost","root","","test");
  
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " 
        . mysqli_connect_error();
}
if(isset($_GET['submit'])) {


         $username = $_GET["username"];
         $email= $_GET["email"];
         $password = $_get["password"];
         $sql= mysqli_query($db,"INSERT INTO MyGuests (username, password, email)
         VALUES ('$username', '$password','$email')");
}
?>

<script>
    alert('You Registered Successfully, Login now');
</script>

<!-- THIS HTML PAGE WILL LET THE USER REGISTER , AND WILL BE REDIRECTED TO THE LOGIN PAGE IF THE USER IS ALREADY A MEMEBER -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Page</title>
    <style>
        th {
            text-align: left;
        }
 
        td {
            text-align: center;
        }
 
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
<main>
    <form  action ="login.php" method="GET">
        <h1>Sign Up</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password2">Password Again:</label>
            <input type="password" name="password2" id="password2">
        </div>

        <button name="submit" type="submit" >Register</button>
        <!-- <footer>Already a member? <a href="Login.php">Login here</a></footer> -->
    </form>
</main>
</body>
</html>