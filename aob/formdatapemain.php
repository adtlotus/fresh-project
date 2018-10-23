<html>
	<head>
		<title>
			Data Pemain
		</title>
	</head>
	<body>
		<div align='center'>
			<h1>Data Pemain</h1>
			
		<?php
			$nh = (isset($_GET['hero']) ? $_GET['hero'] : "");
			if ($nh=='Archer')
			{
				echo "<form name = 'validasi' method = 'GET' action = 'formarcher.php'>";
			}
			else if ($nh == 'Tanker')
			{
				echo "<form name = 'validasi' method = 'GET' action = 'formtanker.php'>";
			}
		?>
			
		<form name = 'validasi' action ='' method='GET'>
		<table border='1'>
		<tr>
			<td>Masukan Nama Pemain </td>
			<td><input type='text' name='nama'></td>
		</tr>
		<tr>
			<td>Masukan Type Hero </td>
			<td><input type='text' name='hero'></td>
		</tr>
		<tr>
			<td colspan='2' align='center'><input type='submit' name='tombol' value='submit'></td>
		</tr>
		</table>
		</form>
	</body>
</html>