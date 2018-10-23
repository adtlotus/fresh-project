<?php
	class Mobil
	{
		public $merk='Selalu Baru';
		
		public function sebutMerk()
		{
			$merk=$this->merk;
			return $this->lowercase($merk);
		}
		
		public function lowercase($merk)
		{
			return strtolower($merk);
		}
	}

	$mobil = new Mobil();
	echo $mobil->sebutMerk();
?>