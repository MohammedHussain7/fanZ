<?php
function isPalindrome($string) {
    $filteredString = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $string));
    return $filteredString === strrev($filteredString);
}

ob_start();
var_dump(isPalindrome("Ali ila"));
$output1 = ob_get_clean();
ob_start();
var_dump(isPalindrome("Mohammed demm"));
$output2 = ob_get_clean();

echo $output1 . "<br>";
echo $output2 . "<br>";
?>