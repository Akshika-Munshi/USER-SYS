
<?php
  
$db = mysqli_connect("localhost","root","","test");
  
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " 
        . mysqli_connect_error();
}
?><!DOCTYPE html>
<html>

<head>
	<title>abc</title>
</head>

<body>
	<div id="form">
		<h1>LOGIN FOR SQL INJECTION</h1>
		<form name="form"
			action="verifyLogin.php" method="GET">

			<p>
				<label> USER NAME: </label>
				<input type="text" id="user"
					name="username" />
			</p>
            <p>
				<label> Email: </label>
				<input type="text" id="email"
					name="email" />
			</p>

			<p>
				<label> PASSWORD: </label>
				<input type="text" id="password"
					name="password" />
			</p>

			<p>
				<input type="submit"
					id="button" value="Login" />
			</p>
		</form>
	</div>
</body>

</html>
