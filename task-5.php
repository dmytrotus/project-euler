<p>
2520 - самое маленькое число, которое делится без остатка на все числа от 1 до 10.
Какое самое маленькое число делится нацело на все числа от 1 до 20?
<p style="color: red;">didn't solve the problem yet</p>
</p>

<?php

$max = 2;

for ($i=1; $i < 3000; $i++) {

	$ok = true; 

	for($j=1; $j <= $max; $j++) {
    	if($i % $j > 0) {
    	 $ok = false;
    	 break;
    	};

    if(!$ok){
    	echo $i;
    }
    }
}









?>