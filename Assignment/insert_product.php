<?php
include('db.php');

$name = $_POST['name'];
$buyingPrice = $_POST['buyingPrice'];
$sellingPrice = $_POST['sellingPrice'];

$display = "No";
if (isset($_POST['display'])) {
    $display = "Yes";
}

$sql = "INSERT INTO products (name, buying_price, selling_price, display) 
        VALUES ('$name', '$buyingPrice', '$sellingPrice', '$display')";

$result = mysqli_query($conn, $sql);

if ($result == true) {
    echo "Product successfully added to the database!";
    echo "<br>";
    echo "<br><a href='displayProducts.php'>View all products</a>";
} else {
    echo "Error: Could not save the data.";
}
mysqli_close($conn);
?>