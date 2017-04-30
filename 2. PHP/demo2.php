<?php

$conn = mysqli_connect("localhost", "root", "123456", "emoji_db");	//db connection

$emoji = $_POST['emoji'];

$q = "INSERT INTO test(msg) VALUES('$emoji')";		//receiving data sent
$r = mysqli_query($conn, $q);						//firing above query

$q1 = "SELECT * FROM test ORDER BY 1 DESC";			//for fetching we are using select query
$r1 = mysqli_query($conn, $q1);
$f = mysqli_fetch_array($r1);

echo $f[1]; 										//fetching
?>