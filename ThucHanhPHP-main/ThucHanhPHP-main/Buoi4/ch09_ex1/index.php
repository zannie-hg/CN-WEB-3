<?php
// Set default values
$name = '';
$email = '';
$phone = '';
$message = 'Enter some data and click on the Submit button.';

// Process
$action = filter_input(INPUT_POST, 'action');

switch ($action) {
    case 'process_data':
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');

        /*************************************************
         * Validate and process the name
         ************************************************/
        // 1. Make sure the user enters a name
        if (empty($name)) {
            $message = "Name is required.";
        } else {
            // 2. Display the first name with only the first letter capitalized
            $name = ucwords(strtolower($name));
            $message = "Hello $name,\n\n";
            $message .= "Thank you for entering this data:\n\n";
        }

        /*************************************************
         * Validate email address
         ************************************************/
        // 1. Make sure the user enters an email
        if (empty($email)) {
            $message .= "Email is required.";
        } else {
            // 2. Make sure the email address has at least one @ sign and one dot character
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $message .= "Email: $email\n";
            } else {
                $message .= "Invalid email address.\n";
            }
        }

        /*************************************************
         * Validate phone number
         ************************************************/
        // 1. Make sure the user enters at least seven digits, not including formatting characters
        $phone = preg_replace('/[^0-9]/', '', $phone);
        if (strlen($phone) >= 7) {
            // 2. Format the phone number like this 123-4567 or this 123-456-7890
            if (strlen($phone) == 7) {
                $formattedPhone = substr($phone, 0, 3) . '-' . substr($phone, 3);
            } else {
                $formattedPhone = substr($phone, 0, 3) . '-' . substr($phone, 3, 3) . '-' . substr($phone, 6);
            }
            $message .= "Phone: $formattedPhone\n";
        } else {
            $message .= "Invalid phone number.\n";
        }

        break;
}
include 'string_tester.php';
?>
