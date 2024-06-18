
<?php

function factorial($n) {
    if ($n < 0) {
        throw new InvalidArgumentException("Integer must be 0 or greater");
    } elseif ($n === 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
} 


// Testing the function
// echO 'The output of task2 is ';
echo 'The output of task2 is '.  factorial(6); // Output: 120

?>

