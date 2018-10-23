<?php
	class Mobil
	{
		public $merk='';
		
		public function __construct($merk='')
		{
			$this->merk=$merk;
		}
		
		public function getMerk()
		{
			return 'Merk '.__CLASS__. ' ini adalah '.$this->merk;
		}
	}

	$mobil = new Mobil('Bagus Banget');
	echo $mobil->getMerk();
?>