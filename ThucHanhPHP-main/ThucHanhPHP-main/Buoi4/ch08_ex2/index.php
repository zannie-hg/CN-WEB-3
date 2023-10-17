<?php
// Set default values to be used when the page first loads
$scores = array(70, 80, 90);
$scores_string = '';
$score_total = 0;
$score_average = 0;
$max_rolls = 0;
$average_rolls = 0;

// Take action based on the variable in the POST array
$action = filter_input(INPUT_POST, 'action');
switch ($action) {
    case 'process_scores':
        $scores = $_POST['scores'];

        // Validate the scores using a for loop
        $valid = true;
        for ($i = 0; $i < count($scores); $i++) {
            if (empty($scores[$i]) || !is_numeric($scores[$i])) {
                $valid = false;
                break;
            }
            $score_total += $scores[$i];
        }

        if (!$valid) {
            $scores_string = 'You must enter three valid numbers for scores.';
            break;
        }

        // Calculate the average
        $score_average = $score_total / count($scores);

        // Format the total and average
        $score_total_f = number_format($score_total, 2);
        $score_average_f = number_format($score_average, 2);

        // Create a string representation of the scores
        $scores_string = implode('|', $scores);

        break;
    case 'process_rolls':
        $number_to_roll = filter_input(INPUT_POST, 'number_to_roll', FILTER_VALIDATE_INT);

        $total = 0;
        $count = 0;
        $max_rolls = -INF;

        // Use for loop replace while 
        for ($count = 0; $count < 10000; $count++) {
            $rolls = 1;
            while (mt_rand(1, 6) != $number_to_roll) {
                $rolls++;
            }
            $total += $rolls;
            $max_rolls = max($rolls, $max_rolls);
        }
        $average_rolls = $total / $count;

        break;
}
include 'loop_tester.php';
?>
