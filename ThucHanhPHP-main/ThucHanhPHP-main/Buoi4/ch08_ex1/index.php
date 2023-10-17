<?php

$customer_type = filter_input(INPUT_POST, 'type');
$invoice_subtotal = filter_input(INPUT_POST, 'subtotal');

$customer_type = strtoupper($customer_type); // use function strtoupper to get character upper case
switch ($customer_type) {
    case 'R':
        if ($invoice_subtotal >= 500) {
            $discount_percent = 0.3;
        } elseif ($invoice_subtotal >= 250) {
            $discount_percent = 0.25;
        } else {
            $discount_percent = 0.0;
        }
        break;

    case 'C':
        $discount_percent = 0.2;
        break;

    case 'T':
        if ($invoice_subtotal >= 500) {
            $discount_percent = 0.5;
        } else {
            $discount_percent = 0.4;
        }
        break;

    default:
        $discount_percent = 0.1; // Sale default for other Customers
}
// Use if else statement
/*
if ($customer_type == 'R' or $customer_type == 'r') {
    if ($invoice_subtotal < 100) {
        $discount_percent = .0;
    } else if ($invoice_subtotal >= 100 and $invoice_subtotal < 250) {
        $discount_percent = .1;
    } else if ($invoice_subtotal >= 250 and $invoice_subtotal < 500) {
        $discount_percent = .25;
    } else if ($invoice_subtotal >= 500) {
        $discount_percent = .3;
    }
} else if ($customer_type == 'C' or $customer_type == 'c') {
    $discount_percent = .2;
} else if ($customer_type == 'T' or $customer_type == 't') {
    if ($invoice_subtotal < 500) {
        $discount_percent = .4;
    } else if ($invoice_subtotal >= 500) {
        $discount_percent = .5;
    }
} else {
    $discount_percent = .1;
}
*/
$discount_amount = $invoice_subtotal * $discount_percent;
$invoice_total = $invoice_subtotal - $discount_amount;

$percent = number_format(($discount_percent * 100));
$discount = number_format($discount_amount, 2);
$total = number_format($invoice_total, 2);

include 'invoice_total.php';
?>