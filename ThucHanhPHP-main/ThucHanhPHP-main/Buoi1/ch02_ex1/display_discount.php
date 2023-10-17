<?php
$product_description = filter_input(INPUT_POST, 'product_description');
$list_price = filter_input(INPUT_POST, 'list_price', FILTER_VALIDATE_FLOAT);
$discount_percent = filter_input(INPUT_POST, 'discount_percent', FILTER_VALIDATE_FLOAT);
$discount_amount = $list_price * ($discount_percent / 100);
$discount_price = $list_price - $discount_amount;

// Format numeric variables
$list_price_formatted = number_format($list_price, 2);
$discount_percent_formatted = number_format($discount_percent, 2);
$discount_amount_formatted = number_format($discount_amount, 2);
$discount_price_formatted = number_format($discount_price, 2);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php
                if (isset($product_description)) {
                    echo htmlspecialchars($product_description);
                } else {
                    echo "";
                }
                ?></span><br>

        <label>List Price:</label>
        <span><?php
                if (isset($list_price_formatted)) {
                    echo "$" . htmlspecialchars($list_price_formatted);
                } else {
                    echo "";
                }
                ?></span><br>
        <label>Standard Discount:</label>
        <span><?php
                if (isset($discount_percent_formatted)) {
                    echo $discount_percent_formatted . "%";
                } else {
                    echo "";
                } ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo "$" . $discount_amount_formatted ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo "$" . $discount_price_formatted ?></span><br>
    </main>
</body>

</html>