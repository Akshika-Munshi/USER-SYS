<?php
$db = mysqli_connect("localhost","root","","test");
$sel="SELECT * FROM MyGuests";
$quer = mysqli_query($db,$sel);
$res = mysqli_fetch_assoc($quer);


echo("HI " . $res['username'] .  " you are now logged in");