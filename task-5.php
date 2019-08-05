<p>
2520 - самое маленькое число, которое делится без остатка на все числа от 1 до 10.
Какое самое маленькое число делится нацело на все числа от 1 до 20?
</p>

<?php
$min = 1;
$max = 10;


function bez_ostatka($number) {

	for ($i = $min; $i < $max; $i++) { 
		if( $number / $i == 1){
			return true;
		}
			else {
				return false;
			}
	}

};






?>