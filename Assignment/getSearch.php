<?php
include('db.php');

$searchTerm = $_GET['q'];

if ($searchTerm == "") {
    $sql = "SELECT * FROM products";
} else {
    $sql = "SELECT * FROM products WHERE name LIKE '%$searchTerm%'";
}

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $profit = $row['selling_price'] - $row['buying_price'];
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $profit . "</td>";
        echo "<td>
                <a href='editProduct.php?name=".$row['name']."'>edit</a> 
              </td>";
        echo "<td>
                <a href='deleteProduct.php?name=".$row['name']."'>delete</a>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No products found matching that name.</td></tr>";
}
?>