<?php

class FibonacciClass
{
    public function generateFibonacci($length)
    {
        if ($length <= 0) {
            throw new InvalidArgumentException("Length must be a positive integer.");
        }

        $fib = [0, 1];
        for ($i = 2; $i < $length; $i++) {
            $fib[] = $fib[$i - 1] + $fib[$i - 2];
        }

        return $fib;
    }
}

function handleRequest($length)
{
    try {
        $controller = new FibonacciClass();
        $fibonacciSequence = $controller->generateFibonacci($length);
        echo "Fibonacci sequence of length $length: " . implode(' ', $fibonacciSequence);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

$length = isset($_GET['length']) ? intval($_GET['length']) : 10; 
handleRequest($length);
// I will use iterative way because it is more efficient and suitable for large sequences

?>
