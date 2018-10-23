<?php
	class Lingkaran {
		const PI =3.14;
				
		public function luas($jariJari){
			return self::PI*pow($jariJari,2);
		}		
	}
	echo "Nilai PI adalah ". Lingkaran::PI."<br>";
	$ling	= new Lingkaran();
	echo 'Luas lingkaran: '. $ling->luas(14);
?>