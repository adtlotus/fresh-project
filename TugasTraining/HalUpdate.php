<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$sql="select * from tblpmb where No_Pmb='$id'";
		$result = mysqli_query($conn, $sql);
			if($row = mysqli_fetch_array
				 ($result, MYSQLI_ASSOC))
				 {
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Formulir PMB</title>
	<link rel="stylesheet"href="css/bootstrap.min.css">
  
		<style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
  font-family: "Open Sans", sans-serif;
  height: 100vh;
  background: url("WDF_1486812.jpg") 50% fixed;
  background-size: cover;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
}

.login {
  border-radius: 2px 2px 5px 5px;
  padding: 10px 0px 20px 20px;
  width: 100%;
  max-width: 750px;
  background: #ffffff;
  position: relative;
  padding-bottom: 40px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}

.login .title {
  color: #444;
  font-size: 1em;
  font-weight: bold;
  margin: 0px 0 0px 0;
  border-bottom: 0px solid #eee;
  padding-bottom: 10px;
}
		</style>
</head>
<body>
	<div class="wrapper">
	<form class="login" name="formpmb" action="doupdate.php" method="POST">
	<table width='97%'>
		<tr>
			<th colspan='2' bgcolor='gray'> 
				<div align='center'>
				<img width="90px" height="90px" align="left" src="Logo-UBD-1000x1000.png">
				<font face='Eras ITC' size='7'> Formulir PMB UBD </font> 
				</div>
			</th>
		</tr>
		<input type='hidden' name='noPMB' value="<?php echo $row['No_Pmb'];?>"/>
		<tr>
			<td> <p class="title"> No.PMB : </p> </td>
			<td> <input type="text" name="NoPMB" value="<?php echo $row['No_Pmb'];?>" disabled> </td>
		</tr>
		<tr>
			<td> <p class="title"> No.Ujian : </p> </td>
			<td> <input type="text" name="NoUjian" value="<?php echo $row['No_Ujian'];?>" autofocus/> </td>
		</tr>
		<tr>
			<td> <p class="title"> Nama : </p> </td>
			<td> <input type="text" name="Nama" value="<?php echo $row['Nama'];?>"> </td>
		</tr>
		<tr>
			<td> <p class="title"> No.Kwitansi : </p> </td>
			<td> <input type="text" name="NoKwitansi" value="<?php echo $row['No_Kwitansi'];?>"> </td>
		</tr>
		<tr>
			<td> <p class="title"> Status Awal Masuk : </p> </td>
			<td> 
				<?php
							if ($row['Status'] == "Pindahan"){
								$pdhn="checked";
								$baru="";
								$psb="";
								$drop="";
								$asing="";
							}
							else if($row['Status'] == "Baru"){
								$pdhn="";
								$baru="checked";
								$psb="";
								$drop="";
								$asing="";
							}
							else if($row['Status'] == "PSB"){
								$pdhn="";
								$baru="";
								$psb="checked";
								$drop="";
								$asing="";
							}
							else if($row['Status'] == "Drop-In"){
								$pdhn="";
								$baru="";
								$psb="";
								$drop="checked";
								$asing="";
							}
							else{
								$pdhn="";
								$baru="";
								$psb="";
								$drop="";
								$asing="checked";
							}
				?>
				<input type="radio" name="statusmasuk" value="Pindahan" <?php echo $pdhn; ?>> Pindahan
				<input type="radio" name="statusmasuk" value="Baru" <?php echo $baru; ?>> Baru
				<input type="radio" name="statusmasuk" value="PSB" <?php echo $psb; ?>> PSB
				<input type="radio" name="statusmasuk" value="Drop-In" <?php echo $drop; ?>> Drop-In
				<input type="radio" name="statusmasuk" value="Asing" <?php echo $asing; ?>> Asing
			</td>
		</tr>
		<tr>
			<td> </td>
			<td> Jika PSSB, Masukkan No.PSSB : <input type="text" name="PSSB" value="<?php echo $row['PSSB'];?>"> </td>
		</tr>
		<tr>
			<td> </td>
			<td> Jika Pindahan, Masukkan No.Penyetaraan : <input type="text" name="Penyetaraan" value="<?php echo $row['No_Pindahan'];?>"> </td>
		</tr>
		<tr>
			<td> <p class="title"> Jenis Kelamin : </p> </td>
			<td> 
				<?php
							if ($row['Jenis_Kelamin'] == "laki-laki"){
								$ckp="checked";
								$ckw="";
							}
							else{
								$ckp="";
								$ckw="checked";
							}
				?>
				<input type="radio" name="jeniskelamin" value="laki-laki" <?php echo $ckp; ?>> Laki-Laki
				<input type="radio" name="jeniskelamin" value="perempuan" <?php echo $ckw; ?>> Perempuan
			</td>
		</tr>
		<tr>
			<td> <p class="title"> Tampat Lahir : </p> </td>
			<td> <input type="text" name="tempatlahir" value="<?php echo $row['Tempat_Lahir'];?>"> </td>
		</tr>
		<tr>
			<td> <p class="title"> Tanggal Lahir : </p> </td>
			<td> <input type="date" name="bday" value="<?php echo $row['Tgl_Lahir'];?>"> </td>
		</tr>
		<tr>
			<td> <p class="title"> Sesi : </p> </td>
			<td> <select name="Program">
					<?php
							if ($row['Sesi'] == "REG01 - Pagi"){
								$pagi="checked";
								$siang="";
								$malam="";
							}
							elseif($row['Sesi'] == "REG02 - Siang"){
								$pagi="";
								$siang="checked";
								$malam="";
							}
							else{
								$pagi="";
								$siang="";
								$malam="checked";
							}
					?>
						<option value="Pagi" <?php echo $pagi; ?>> REG01 - Pagi </option>
						<option value="Siang" <?php echo $siang; ?>> REG02 - Siang </option>
						<option value="Malam" <?php echo $malam; ?>> REG03 - Malam </option>
				 </select>
			</td>
		</tr>
		<tr>
			<td> <p class="title"> Jurusan : </p> </td>
			<td> <select name="Pilihan">
					<?php
							if ($row['Jurusan'] == "Teknik Inforatika"){
								$ti="checked";
								$si="";
								$mi="";
							}
							elseif($row['Jurusan'] == "Sistem Informasi"){
								$ti="";
								$si="checked";
								$mi="";
							}
							else{
								$ti="";
								$si="";
								$mi="checked";
							}
					?>
						<option value="TI" <?php echo $ti; ?>> Teknik Inforatika </option>
						<option value="SI" <?php echo $si; ?>> Sistem Informasi </option>
						<option value="MI" <?php echo $mi; ?>> Manajemen Informasi </option>
				 </select>
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<div class="container" align='center'> <br>
				<input type="submit" name="send" value="Update">&nbsp;
				<button type="reset" name="reset"> Reset </button>&nbsp;
				<button> <a href="TampilData.php"> Batal </button>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='right'> Copyright &copy; 2017 ARK </td>
		</tr>
	</table>
	</div>
	</form>
</body>
</html>

<?php
	}
?>