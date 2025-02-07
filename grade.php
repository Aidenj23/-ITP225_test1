<?php
// Get grade input from user
$grade = (isset($argv[1]) ? $argv[1] : 0);  // Capture the input grade via command line

// Validate and determine the grade
if (!is_numeric($grade) || $grade < 0 || $grade > 100) {
    echo "Invalid input. Please enter a number between 0 and 100.\n";
    exit;
}

if ($grade >= 90) {
    $letter = 'A';
} elseif ($grade >= 80) {
    $letter = 'B';
} elseif ($grade >= 70) {
    $letter = 'C';
} elseif ($grade >= 60) {
    $letter = 'D';
} else {
    $letter = 'F';
}

// Print the result
echo "Your grade is: $letter\n";
echo "Current Date: " . date("Y-m-d") . "\n";
?>
