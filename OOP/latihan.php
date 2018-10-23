<?php
	class Mobil
	{
		public $merk='Selalu Baru';
		public $tipe='Mini Bus';
		public $tahun=2017;
		public $warna ='Putih';
		
		public function maju()
		{
			echo "Mobil Sedang Maju!";
		}
	}
	
	//Membuat Object 1
	$mobil = new Mobil();
	
	//Mengatur Nilai Property object 1
	$mobil->merk="Muat Banyak";
	$mobil->tipe="Truk";
	$mobil->tahun=2016;
	$mobil->warna="Kuning";
	
	//Mencetak Nilai Property object 1 
	echo "Mobil $mobil->merk <br>";
	echo "Model $mobil->tipe <br>";
	echo "Tahun $mobil->tahun <br>";
	echo "Warna $mobil->warna <br>";
	
	//Menjalankan Method Maju untuk object 1
	$mobil->maju();
	
	echo "<p>";
	//Membuat Object 2
	$mobil2 = new Mobil();
	
	//Mengatur Nilai Property object 1
	$mobil2->merk="Mepet Banget";
	$mobil2->tipe="Sedan";
	$mobil2->tahun=2016;
	$mobil2->warna="merah";
	
	//Mencetak Nilai Property object 1 
	echo "Mobil $mobil2->merk <br>";
	echo "Model $mobil2->tipe <br>";
	echo "Tahun $mobil2->tahun <br>";
	echo "Warna $mobil2->warna <br>";
	
	//Menjalankan Method Maju untuk object 1
	$mobil2->maju();
?>