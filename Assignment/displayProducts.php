<?php
include('db.php');
?>
<html>
<head>
    <title>Display Products</title>
</head>
<body>
    <fieldset style="width: 500px;">
        <legend>PRODUCT LIST</legend>
    <table border="1" cellpadding="10">
        <tr>
            <th>NAME</th>
            <th>PROFIT</th>
            <th colspan="2">ACTIONS</th>
        </tr>
        <?php
        $sql = "SELECT * FROM products WHERE display = 'Yes'";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $bPrice = $row['buying_price'];
            $sPrice = $row['selling_price'];
            $profit = $sPrice - $bPrice;
            echo "<tr>";
                echo "<td>" . $name . "</td>";
                echo "<td>" . $profit . "</td>";
                echo "<td><a href='editProducts.php?name=" . $name . "'>edit</a></td>";
                echo "<td><a href='deleteProduct.php?name=" . $name . "'>delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <a href="product.php">Add new product</a>
    <br>
    <br>       
    <a href="searchProduct.php">Search product</a>
</fieldset>
</body>
</html>