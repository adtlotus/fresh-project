<?php
	function halo($nama){
		if(is_string($nama)){
			echo "Halo ". $nama;
		}
		else{
			echo "Bukan String";
		}
	}
	halo("Rasmus");
?>