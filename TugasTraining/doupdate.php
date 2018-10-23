<?php
	include "koneksi.php";
	$id = $_POST['noPMB'];
	$NoUjian = $_POST['NoUjian'];
	$Nama = $_POST['Nama'];
	$NoKwitansi = $_POST['NoKwitansi'];
	$Status = $_POST['statusmasuk'];
	$PSSB = $_POST['PSSB'];
	$Penyetaraan = $_POST['Penyetaraan'];
	$jeniskelamin = $_POST['jeniskelamin'];
	$tempatlahir = $_POST['tempatlahir'];
	$bday = $_POST['bday'];
	$Program = $_POST['Program'];
	$Pilihan = $_POST['Pilihan'];
	
	$sql="update tblpmb set No_Ujian='$NoUjian',Nama='$Nama',No_Kwitansi='$NoKwitansi',Status='$statusmasuk',
	PSSB='$PSSB',No_Pindahan='$Penyetaraan',Jenis_Kelamin='$jeniskelamin',Tempat_Lahir='$tempatlahir',Tgl_Lahir='$bday',
	Sesi='$Program',Jurusan='$Pilihan' where No_Pmb=$id";
	$updatedata = mysqli_query($conn, $sql);
	
	if($updatedata)
		{
			header("Location:TampilData.php");
		}
		else{
			echo "Error: " . $updatedata."<br>" . mysqli_error($conn);
		}
	
	mysqli_close($conn);
?>