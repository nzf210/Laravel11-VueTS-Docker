<?php
$iterations = 1000; // Number of iterations to test
$start_time = microtime(true);

for ($i = 0; $i < $iterations; $i++) {
    // Perform some task here
}

$end_time = microtime(true);
$elapsed_time = $end_time - $start_time;
$iterations_per_minute = $iterations / ($elapsed_time / 60);

echo "Iterations per minute: " . $iterations_per_minute;

// 5033164800
// 4934475294.1176