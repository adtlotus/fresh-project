<?php
	include "koneksi.php";

	$sql="insert into tblpmb values('', '$_POST[NoUjian]','$_POST[Nama]','$_POST[NoKwitansi]','$_POST[statusmasuk]','$_POST[PSSB]','$_POST[Penyetaraan]','$_POST[jeniskelamin]','$_POST[tempatlahir]','$_POST[bday]','$_POST[Program]','$_POST[Pilihan]')";
	$insertdata = mysqli_query($conn, $sql);
	
	if($insertdata)
		{
			header("Location:TampilData.php");
		}
		else{
			echo "Error: " . $insertdata."<br>" . mysqli_error($conn);
		}
	
	mysqli_close($conn);
?>