<?php
include('db.php');

$name = $_POST['name'];

$sql = "DELETE FROM products WHERE name = '$name'";

if (mysqli_query($conn, $sql)) {
    echo "Product deleted successfully!";
    echo "<br><br>";
    echo "<br><a href='displayProducts.php'>Back to List</a>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>