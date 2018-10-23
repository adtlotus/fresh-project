<?php
	include 'archer.php';
	$np =  (isset($_GET['nama']) ? $_GET['nama'] : "" );
	$hp =  (isset($_GET['hero']) ? $_GET['hero'] : "" );
	$js =  (isset($_GET['jumskill']) ? $_GET['jumskill'] : "" );
	
	if(($np) && ($hp)){
		
		$heroku = new Archer($np, 'Archer');
		$heroku->NamaSkill[1] = (isset($_GET['skill1']) ? $_GET['skill1'] : "");
		$heroku->NamaSkill[2] = (isset($_GET['skill2']) ? $_GET['skill2'] : "");
		$heroku->NamaSkill[3] = (isset($_GET['skill3']) ? $_GET['skill3'] : "");
		$heroku->NamaSkill[4] = (isset($_GET['skill4']) ? $_GET['skill4'] : "");
		$heroku->NamaSkill[5] = (isset($_GET['skill5']) ? $_GET['skill5'] : "");
	}
	
	
?>

<html>	
	<head>
		<title>
			Input Skill
		</title>
	</head>
	<body>
		<div align='center'>
			<h1>Input Skill</h1>
		<form name = "validasi" action ='?' method='GET'>
		<?php 
			echo "<table border='1'>";
			echo "<tr>";
			echo 	"<td>Nama Pemain :</td>
					<td><input type='text' name='nama' value=$np></td>";
			echo "</tr>";
			echo "<tr>";
			echo 	"<td>Nama Hero :</td>
					<td><input type='text' name='hero' value=$hp> </td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>Jumlah Skill :</td>
				  <td><input type='text' name='jumskill' value=$js></td>";
			echo "</tr>";
			echo "</table>";
			echo "<br>";
			?>
			
			<?php
			if ($js)
			{
				$heroku->JumSkill($js);
			}
			
			?>
			<input type="submit" name="Submit" value="Simpan">
			<br>
			<?php
				if ($heroku->NamaSkill[1])
				{
					echo "<br>";
					$heroku->InfoHero();
				}
			?>
		</table>
		</form>
	</body>
</html>