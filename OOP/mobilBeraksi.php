<?php
	require "vendor/autoload.php";
	
	use Dummy\Calculator;
	use Dummy\Mobil\Toyota;
	use Dummy\Mobil\Honda;

	$toyota=new Toyota('Toyota Fortuner',10);
	$calculator= new Calculator($toyota);
	echo "Jarak maksimum ".$toyota->getMerk()." adalah ".$calculator->hitungJarak()." Km <br>";
	
	$honda=new Honda("Honda CR-V",10);
	$calculator= new Calculator($honda);
	echo "Jarak maksimum ".$honda->getMerk()." adalah ".$calculator->hitungJarak()." Km <br>";
?>