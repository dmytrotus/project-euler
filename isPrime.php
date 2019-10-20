<?php
function isPrime($number) {
    // Set default to true
    $prime = true;
    // A prime number is only divisible by 1 and itself.
    // All numbers are divisible by 1, so start with 2.
    for ($div = 2; $div < $number; $div++) {
        // If $number is wholly divisible by $div (no remainder).
        if (($number % $div) === 0) {
            // If we can evenly divide $number by anything that
            // is not 1 or itself, it is not prime and we can return
            // immediately. 
            $prime = false;
            return $prime;
        }
    }
    // Return true or false
    return $prime;
}
$i=2;
while ($i<=1000) {
    if (isPrime($i)) {
        echo "Prime: " . $i . "\n";
    }
    $i++;
}
?>