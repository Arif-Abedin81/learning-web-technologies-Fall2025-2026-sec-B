<?php
    $amount = 1000;
    $vatRate = 0.15;
    $vat = $amount * $vatRate;
    $totalAmount = $amount + $vat;

    echo "<p>Amount: " . $amount . " units</p>";
    echo "<p>VAT (15%): " . $vat . " units</p>";
    echo "<p>Total Amount (Including VAT): " . $totalAmount . " units</p>";
?>
