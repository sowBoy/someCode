<?php

function returnChosen($s)
{
	$arrayMoney = [1 => 10, 2 =>  5, 3 => 2];
	$len = count($arrayMoney);
	$chosen = [1 => 0, 2 => 0, 3 => 0];
	for($i = 1; $i <= $len; $i++){
		while($s >= $arrayMoney[$i]){
			$s = $s - $arrayMoney[$i];
			$chosen[$i]++;

		}
	}
	return $chosen;
}
$chosen = returnChosen(1);
$somme = array_sum($chosen);
print_r($somme);
