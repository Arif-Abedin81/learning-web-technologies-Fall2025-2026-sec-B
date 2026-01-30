<?php
include('db.php');

$oldName = $_POST['oldName'];
$newName = $_POST['name'];
$bPrice = $_POST['buyingPrice'];
$sPrice = $_POST['sellingPrice'];

$display = "No";
if (isset($_POST['display'])) {
    $display = "Yes";
}

$sql = "UPDATE products 
        SET name='$newName', buying_price='$bPrice', selling_price='$sPrice', display='$display' 
        WHERE name='$oldName'";

if (mysqli_query($conn, $sql)) {
    echo "Product updated successfully! ";
    echo "<br><br>";
    echo "<a href='displayProducts.php'>View Table</a>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>