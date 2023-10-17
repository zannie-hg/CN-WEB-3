<?php
// Set default values
$number1 = 78;
$number2 = -105.33;
$number3 = 0.0049;
$message = 'Enter some numbers and click on the Submit button.';

// Process
$action = filter_input(INPUT_POST, 'action');
switch ($action) {
    case 'process_data':
        $number1 = filter_input(INPUT_POST, 'number1');
        $number2 = filter_input(INPUT_POST, 'number2');
        $number3 = filter_input(INPUT_POST, 'number3');

        // Make sure the user enters three numbers
        if (!is_numeric($number1) || !is_numeric($number2) || !is_numeric($number3)) {
            $message = "Please enter valid numbers for all three fields.";
            break;
        } elseif (empty($number1) || empty($number2) || empty($number3)) {
            $message = 'You must enter all three numbers.';
            break;
        }
         else {
            // Get the ceiling and floor for $number2
            $number2_ceil = ceil($number2);
            $number2_floor = floor($number2);

            // Round $number3 to 3 decimal places
            $number3_rounded = round($number3, 3);

            // Get the max and min values of all three numbers
            $min = min($number1, $number2, $number3);
            $max = max($number1, $number2, $number3);

            // Generate a random integer between 1 and 100
            $random = rand(1, 100);

            // Format the message
            $message =
                "Number 1: $number1\n" .
                "Number 2: $number2\n" .
                "Number 3: $number3\n" .
                "\n" .
                "Number 2 ceiling: $number2_ceil\n" .
                "Number 2 floor: $number2_floor\n" .
                "Number 3 rounded: $number3_rounded\n" .
                "\n" .
                "Min: $min\n" .
                "Max: $max\n" .
                "\n" .
                "Random: $random\n";

            $message = nl2br(htmlspecialchars($message));
            break;
        }
}
include 'number_tester.php';
