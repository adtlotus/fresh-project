<?php
	function hitungJarak(array $mobils){
		foreach ($mobils as $mobil){
			$jarakMaks=$mobil[1] *$mobil[2];
			echo $mobil[0]." : ".$jarakMaks."<br>";
		}
	}

	$kendaraan=[
		['Toyota',10,25],
		['Suzuki',15,21]
	];
	hitungJarak($kendaraan);
?>