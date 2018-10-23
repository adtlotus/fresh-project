<?php
	include "koneksi.php";
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "select * from tbllogin where username='$username' and password ='$password'";
	$result = mysqli_query ($conn, $sql);
	$cek = mysqli_num_rows($result);
		if($cek>0)
		{
			session_start();
			$_SESSION['username']=$username;
			header("location:TampilData.php");
		}
			else
			{
				header("location:index.html?err=Invalid Login!");
			}
?>