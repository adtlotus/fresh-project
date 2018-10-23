<?php
	include 'datapemain.php';
	include 'hero.php';
	
	class tanker extends datapemain	implements hero{
		public $JumSkill;
		public $NamaSkill = array(0 => "", 1 => "", 2=> "", 3 => "", 4 => "", 5 => "");
		public $damage = 10;
		
		public function __construct($newNama, $newHero){
			parent::IsiData($newNama,$newHero);
		}
		
		public function JumSkill($jml){
			$this->JumSkill=$jml;
			if($this->JumSkill<=5){
				$this->IsiSkill($this->JumSkill);
			}
		}
		
		public function IsiSkill($counter){
			for($i=1;$i<=$counter;$i++){
				echo "Masukkan Skill ke-".$i." : "."<input type='text' name='skill$i' value='' >.<br>";
				echo "<br>";
			}
		}
		
		
		public function KemampuanHero(){
			echo "Hero Jenis Ini memiliki Kemampuan Tahan Badan. <br>";
			echo "Dapat Meningkatkan Damage 3x Lipat <br>";
			echo "Damage Default Hero : $this->damage<br>";
			$this->damage *= 3;
			echo "Damage Hero Tanker : $this->damage<br>";
		}
    
		public function InfoHero(){
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
		
?>