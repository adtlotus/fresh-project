<html>
<head>
	<title>	Data Pemain </title>
</head>
<body>
	<div align = "center">
		<h1> Data Pemain </h1>
		<?php
			$namaHero = (isset($_GET['namaHero']) ? $_GET['namaHero'] : "");
			if ($namaHero=='Archer')
			{
				echo "<form name = 'inputnama' method = 'GET' action = 'FormArcher.php'>";
			}
			else if ($namaHero == 'Tanker')
			{
				echo "<form name = 'inputnama' method = 'GET' action = 'FormTanker.php'>";
			}
		?>
		<form name = "inputnama" method = "GET" action = "">
			Nama Pemain : <input type="text" name="nama"/>
			Nama Hero : <input type="text" name="namaHero"/>
			<input type="submit" name="Submit" value="Simpan">
		</form>
	</div>
</body>
</html>