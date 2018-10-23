<?php
	include "koneksi.php";
	$id=$_GET['id'];

	$sql="delete from tblpmb where No_Pmb=$id";
	$deletedata = mysqli_query($conn, $sql);
	
	if($deletedata)
		{
			header("Location:TampilData.php");
		}
		else{
			echo "Error: " . $deletedata."<br>" . mysqli_error($conn);
		}
	
	mysqli_close($conn);
?>