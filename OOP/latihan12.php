<?php
	class Latihan {
		//Static Property
		public static $namaProperty ="Property Static";
		
		//Static Method
		public static function namaMethod(){
			return "Halo saya static method";
		}
	}
	echo Latihan::$namaProperty."<br>";
	echo Latihan::namaMethod()."<br>";
?>