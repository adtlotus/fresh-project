<?php 
	$hp = $_GET ['hero'];
	if(($hp == 'Archer') Or ($hp == 'archer')){
		header ("Location:formarcher.php");
	}else if(($hp == 'Tanker') Or ($hp == 'tanker')){
		header ("Location:formtanker.php");
	}

?>