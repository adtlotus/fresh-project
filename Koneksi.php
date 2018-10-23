<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "test";

	$conn=mysqli_connect($host, $username, $password, $database);
	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$sql = "select * from tbl_mhsiswa";
	$result  = mysqli_query($conn, $sql);
	$r = mysqli_fetch_array($result , MYSQLI_NUM);
	echo $r[1];
	//var_dump ($r);
	$r = mysqli_fetch_array($result , MYSQLI_NUM);
	echo $r[1];
?>
