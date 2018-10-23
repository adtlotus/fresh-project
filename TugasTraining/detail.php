<html>
<head>
	<meta charset="UTF-8">
	<title> Tampil Table </title>
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
  max-width: 1200px;
  background: #ffffff;
  position: relative;
  padding-bottom: 50px;
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
		<script>
			function Delete()
			{
				return confirm("Apakah anda ingin menghapus data ini ?");
			}
		</script>
</head>
	<body>
	<div class="wrapper">
	<form class="login" method="POST">
	<button><a href="TampilData.php"> Kembali </a></button>
		<div align='center'>
			<font face='Eras ITC' size='7'> Detail Data Mahasiswa PMB </font><br>
		</div>
			<table border="1" align="Center" width='97%'>
				<tr>
					<th> <p class="title" align="center"> No.PMB </p> </th>
					<th> <p class="title" align="center"> No.Ujian </p> </th>
					<th> <p class="title" align="center"> Nama </p> </th>
					<th> <p class="title" align="center"> No.Kwitansi </p> </th>
					<th> <p class="title" align="center"> Status </p> </th>
					<th> <p class="title" align="center"> PSSB </p> </th>
					<th> <p class="title" align="center"> No.Pindahan </p> </th>
					<th> <p class="title" align="center"> Jenis Kelamin </p> </th>
					<th> <p class="title" align="center"> Tempat Lahir </p> </th>
					<th> <p class="title" align="center"> Tanggal Lahir </p> </th>
					<th> <p class="title" align="center"> Sesi </p> </th>
					<th> <p class="title" align="center"> Jurusan </p> </th>
				</tr>
				
				<?php
					include "Koneksi.php";
					$id = $_GET['id'];
					$sql="select * from tblpmb where No_Pmb=$id";
					$result = mysqli_query($conn, $sql);
					
					while($row = mysqli_fetch_array
					($result, MYSQLI_ASSOC))
					{
				echo "<tr>
						<td align='center'> $row[No_Pmb] </td>
						<td align='center'> $row[No_Ujian] </td>
						<td align='center'> $row[Nama] </td>
						<td align='center'> $row[No_Kwitansi] </td>
						<td align='center'> $row[Status] </td>
						<td align='center'> $row[PSSB] </td>
						<td align='center'> $row[No_Pindahan] </td>
						<td align='center'> $row[Jenis_Kelamin] </td>
						<td align='center'> $row[Tempat_Lahir] </td>
						<td align='center'> $row[Tgl_Lahir] </td>
						<td align='center'> $row[Sesi] </td>
						<td align='center'> $row[Jurusan] </td>
					</tr>";
					}
					mysqli_close($conn);
				?>
			</table>
	</div>
	</form>
	</form>
	</body>
</html>