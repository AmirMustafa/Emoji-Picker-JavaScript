<?php

$conn = mysqli_connect("localhost", "root", "123456", "emoji_db");   //DB Connection

$emoji = $_POST['name'];					//Receiving input info sent by ajax

$q = "INSERT INTO test(msg) VALUES('$emoji')";
$r = mysqli_query($conn, $q);				//firing insert query 


?>