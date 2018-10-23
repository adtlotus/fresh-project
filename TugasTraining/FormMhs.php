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
	<form class="login" name="formpmb" action="doinsert.php" method="POST">
	<table width='97%'>
		<tr>
			<th colspan='2' bgcolor='gray'> 
				<div align='center'>
				<img width="90px" height="90px" align="left" src="Logo-UBD-1000x1000.png">
				<font face='Eras ITC' size='7'> Formulir PMB UBD </font> 
				</div>
			</th>
		</tr>
		<tr>
			<td> <p class="title"> No.PMB : </p> </td>
			<td> <input type="text" name="NoPMB" disabled> </td>
		</tr>
		<tr>
			<td> <p class="title"> No.Ujian : </p> </td>
			<td> <input type="text" name="NoUjian" autofocus/> </td>
		</tr>
		<tr>
			<td> <p class="title"> Nama : </p> </td>
			<td> <input type="text" name="Nama"> </td>
		</tr>
		<tr>
			<td> <p class="title"> No.Kwitansi : </p> </td>
			<td> <input type="text" name="NoKwitansi"> </td>
		</tr>
		<tr>
			<td> <p class="title"> Status Awal Masuk : </p> </td>
			<td> 
				<input type="radio" name="statusmasuk" value="Pindahan"> Pindahan
				<input type="radio" name="statusmasuk" value="Baru"> Baru
				<input type="radio" name="statusmasuk" value="PSB"> PSB
				<input type="radio" name="statusmasuk" value="Drop-In"> Drop-In
				<input type="radio" name="statusmasuk" value="Asing"> Asing
			</td>
		</tr>
		<tr>
			<td> </td>
			<td> Jika PSSB, Masukkan No.PSSB : <input type="text" name="PSSB"> </td>
		</tr>
		<tr>
			<td> </td>
			<td> Jika Pindahan, Masukkan No.Penyetaraan : <input type="text" name="Penyetaraan"> </td>
		</tr>
		<tr>
			<td> <p class="title"> Jenis Kelamin : </p> </td>
			<td> 
				<input type="radio" name="jeniskelamin" value="laki-laki"> Laki-Laki
				<input type="radio" name="jeniskelamin" value="perempuan"> Perempuan
			</td>
		</tr>
		<tr>
			<td> <p class="title"> Tampat Lahir : </p> </td>
			<td> <input type="text" name="tempatlahir"> </td>
		</tr>
		<tr>
			<td> <p class="title"> Tanggal Lahir : </p> </td>
			<td> <input type="date" name="bday"> </td>
		</tr>
		<tr>
			<td> <p class="title"> Sesi : </p> </td>
			<td> <select name="Program">
						<option value="Pagi"> REG01 - Pagi </option>
						<option value="Siang"> REG02 - Siang </option>
						<option value="Malam"> REG03 - Malam </option>
				 </select>
			</td>
		</tr>
		<tr>
			<td> <p class="title"> Jurusan : </p> </td>
			<td> <select name="Pilihan">
						<option value="TI"> Teknik Inforatika </option>
						<option value="SI"> Sistem Informasi </option>
						<option value="MI"> Manajemen Informasi </option>
				 </select>
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<div class="container" align='center'> <br>
				<input type="submit" name="send" value="Simpan">&nbsp;
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