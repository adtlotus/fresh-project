<?php
	include "DataPemain.php";
	include "InterfaceHero.php";
	class Tanker extends DataPemain implements Hero
	{
		public $JumSkill;
		public $NamaSkill = array(0 => "", 1 => "", 2=> "", 3 => "", 4 => "", 5 => "");
		public $damage = 10;
		
		function __construct($NewNama, $NewHero)
		{
			parent::IsiData($NewNama, $NewHero);
		}
		
		public function JumSkill ($Jum)
		{
			$this->JumSkill = $Jum;
			if ($this->JumSkill <= 5)
			{
				$this->IsiSkill($this->JumSkill);
			}
		}
		
		public function IsiSkill($counter)
		{
			for($i=1;$i<=$counter;$i++)
			{
				echo "Masukan Skill Ke-".$i."<input type='text' name='skill$i' value='' >";
				echo "<br>";
			}
		}
		
		/*public function IsiData($Jum)
		{
			$this->JumSkill($Jum);
		} */
		
		public function KemampuanHero()
		{
			echo "Hero Jenis Ini memiliki Kemampuan memperlambat musuh <br>";
			echo "Dapat Meningkatkan Damage 3x Lipat <br>";
			echo "Damage Default Hero : $this->damage<br>";
			$this->damage *= 3;
			echo "Damage Hero Archer : $this->damage<br>";
		}
		
		public function infoHero()
		{
			parent::infoHero();
			echo "Skill Yang Dimiliki : <br>";
			for($i = 1; $i <= $this->JumSkill; $i++)
			{
				echo "Skill ke-".$i." : ".$this->NamaSkill[$i]."<br>";
			}
			echo "Kemampuan = ";
			$this->KemampuanHero()."<br>";
		}
	}
	/*
	$hero1 = new Archer("Yoga", "Archer");
	$hero1->JumSkill(5);
	$hero1->infoHero();
	*/
?>