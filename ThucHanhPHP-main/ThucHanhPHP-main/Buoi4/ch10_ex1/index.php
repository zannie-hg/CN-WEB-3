<?php
//set default value
$message = '';

//get value from POST array
$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action =  'start_app';
}

//process
switch ($action) {
    case 'start_app':
        // set default invoice date 1 month prior to current date
        $interval = new DateInterval('P1M');
        $default_date = new DateTime();
        $default_date->sub($interval);
        $invoice_date_s = $default_date->format('n/j/Y');

        // set default due date 2 months after current date
        $interval = new DateInterval('P2M');
        $default_date = new DateTime();
        $default_date->add($interval);
        $due_date_s = $default_date->format('n/j/Y');

        $message = 'Enter two dates and click on the Submit button.';
        break;
    case 'process_data':
        $invoice_date_s = filter_input(INPUT_POST, 'invoice_date');
        $due_date_s = filter_input(INPUT_POST, 'due_date');

        // Make sure the user enters both dates
        if (empty($invoice_date_s) || empty($due_date_s)) {
            $message = 'Please enter both invoice date and due date.';
        } else {
            // use try catch to catch an exception invalid date
            try {
                // Convert date strings to DateTime objects
                $invoice_date = new DateTime($invoice_date_s);
                $due_date = new DateTime($due_date_s);

                // Make sure the due date is after the invoice date
                if ($due_date <= $invoice_date) {
                    $message = 'Due date must be later than the invoice date.';
                } else {
                    // Format dates
                    $invoice_date_f = $invoice_date->format('F j, Y');
                    $due_date_f = $due_date->format('F j, Y');
                    $current_date = new DateTime();
                    $current_date_f = $current_date->format('F j, Y');
                    $current_time_f = $current_date->format('g:i:s A');

                    // Calculate time difference
                    $interval = $current_date->diff($due_date);
                    $years = $interval->format('%y');
                    $months = $interval->format('%m');
                    $days = $interval->format('%d');

                    // Format due date message
                    if ($current_date > $due_date) {
                        $due_date_message = "This invoice is {$years} years, {$months} months, and {$days} days overdue.";
                    } else {
                        $due_date_message = "This invoice is due in {$years} years, {$months} months, and {$days} days.";
                    }

                    // Set and format message
                    $message = "Invoice date: $invoice_date_f<br>";
                    $message .= "Due date: $due_date_f<br>";
                    $message .= "Current date: $current_date_f<br>";
                    $message .= "Current time: $current_time_f<br>";
                    $message .= "<br>";
                    $message .= "Due date message: $due_date_message";
                }
            } catch (Exception $e) {
                $message = 'Invalid date format. Please enter dates in a valid format.';
            }
        }
        break;
}
include 'date_tester.php';
?>
