<?php
function findMaxMin($array) {
    if (empty($array)) {
        throw new InvalidArgumentException("Array must not be empty.");
    }

    $max = $min = $array[0];
    foreach ($array as $value) {
        if ($value > $max) {
            $max = $value;
        }
        if ($value < $min) {
            $min = $value;
        }
    }

    return ['maximum' => $max, 'minimum' => $min];
}

print_r(findMaxMin([22, 34, 64, 33, 24])); 
// The time complexity of this fucntion is O(n) for the loop and O(1) for initlize the min and max
?>