<?php
	include "Koneksi.php";
	$delete = "delete from tbl_mhsiswa where id_mhs='1';";
	$delete_query = mysqli_query($conn, $delete);
	if($delete_query) 
		echo "Record Telah berhasil di hapuss...";
	else 
		echo "Error: " . $delete_query . "<br>" . mysqli_error($conn);
	mysqli_close($conn);
?>
