<?php
	include "Archer.php";
	$NamaPemain = (isset($_GET['nama']) ? $_GET['nama'] : ""); // bila data sudah ada nilainya biar ga error
	$NamaHero = (isset($_GET['namaHero']) ? $_GET['namaHero'] : "");
	$JumSkill = (isset($_GET['JumSkill']) ? $_GET['JumSkill'] : "");
		
	if(($NamaPemain) && ($NamaHero))
	{
		/*
		$hero1 = new DataPemain(); // Buat Objek Terlebih Dahulu
		$hero1->isiData($NamaPemain, $NamaHero);
		$hero1->infoHero(); 
		*/
		
		$hero1 = new Archer($NamaPemain, "Archer");
		$hero1->NamaSkill[1] = (isset($_GET['skill1']) ? $_GET['skill1'] : "");
		$hero1->NamaSkill[2] = (isset($_GET['skill2']) ? $_GET['skill2'] : "");
		$hero1->NamaSkill[3] = (isset($_GET['skill3']) ? $_GET['skill3'] : "");
		$hero1->NamaSkill[4] = (isset($_GET['skill4']) ? $_GET['skill4'] : "");
		$hero1->NamaSkill[5] = (isset($_GET['skill5']) ? $_GET['skill5'] : "");

		/* if ($JumSkill)
		{
			$hero1->JumSkill($JumSkill);
		} */
		//$hero1->infoHero();
	}
	
?>

<html>
<head>
	<title>	Input Skill </title>
</head>
<body>
	<div align = "center">
		<h1> Input Skill </h1>
		<form name = "inputnama" method = "GET" action = "?">
			<?php 
				echo "Nama Pemain : <input type='text' name='nama' value=$NamaPemain />";
				echo "Nama Hero : <input type='text' name='namaHero' value=$NamaHero />";
				echo "Jumlah Skill : <input type='text' name='JumSkill' value=$JumSkill> <br>";
			?>
			
			<?php
			if ($JumSkill)
			{
				$hero1->JumSkill($JumSkill);
			}
			
			?>
			<input type="submit" name="Submit" value="Simpan">
			<br>
			<?php
				if ($hero1->NamaSkill[1])
				{
					$hero1->infoHero();
				}
			?>
		</form>
	</div>
</body>
</html>