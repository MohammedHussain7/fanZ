<?php
function decimalToBinary($decimal) {
    if ($decimal == 0) return '0'; 

    $binary = ''; // initalize the binary variable
    while ($decimal > 0) {
        $binary = ($decimal & 1) . $binary;
        $decimal = $decimal >> 1;
    }

    return $binary;
}
// & AND operation which means see if the least signigcant bit is equal to 1 than it is true (1) otherwise false(0)
// >> means right shift >> 1 means one postion 
echo decimalToBinary(10); 
?>