<?php
	class Mobil {
		public static $merk ="Toyota";
		
		public static function uppercase($text){
			return strtoupper($text);
		}
		public static function getMerk(){
			$merk=self::$merk;
			return self::uppercase($merk);
		}		
	}
	echo Mobil::getMerk();
?>