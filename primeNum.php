<?php
function isPrime($number) {
    //Base suititions 
    if ($number <= 1) return false;
    if ($number <= 3) return true;
    if ($number % 2 == 0 || $number % 3 == 0) return false;

    for ($i = 5; $i * $i <= $number; $i += 6) {
        if ($number % $i == 0 || $number % ($i + 2) == 0) return false;
    }

    return true;
}

function findPrimesInRange($start, $end) {
    $primes = [];
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }

    return $primes;
}

print_r(findPrimesInRange(5, 30)); 
?>
