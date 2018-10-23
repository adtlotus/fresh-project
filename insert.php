<?php
	include "Koneksi.php";
	$insert = "insert into tbl_mhsiswa(nama_mhs, jenis_kelamin, tgl_lahir, alamat)
	values('Deny Sarwono', 'Pria', '1986-12-09','Jawa Barat');";
	$insert_query = mysqli_query($conn, $insert);
	
	if($insert_query) {
		echo "Berhasil di insert";
	}
	else {
		echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
?>