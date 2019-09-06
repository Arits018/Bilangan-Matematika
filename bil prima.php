<?php
	$baris = 0;
	for($i=1; $i<=50; $i++ ){
	$awal = 0;
	for($j=1; $j<=50; $j++ ){
		if($i % $j ==0) {
			$awal++;
			}
		}
		if($awal == 2) {
			$baris++;
			echo $i.',';
			if ($baris % 3 ==0) {
				echo"<br>";
		}
		}
	}