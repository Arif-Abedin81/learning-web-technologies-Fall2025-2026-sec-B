<?php
include('db.php');

$nameToEdit = $_GET['name'];

$sql = "SELECT * FROM products WHERE name = '$nameToEdit'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<html>
<body>
    <fieldset style="width: 300px;">
        <legend>EDIT PRODUCT</legend>
        <form action="updateProduct.php" method="POST">
            <input type="hidden" name="oldName" value="<?php echo $row['name']; ?>">

            Name<br>
            <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
            
            Buying Price<br>
            <input type="text" name="buyingPrice" value="<?php echo $row['buying_price']; ?>"><br>
            
            Selling Price<br>
            <input type="text" name="sellingPrice" value="<?php echo $row['selling_price']; ?>"><br>
            
            <hr>
            <input type="checkbox" name="display" value="Yes" <?php if($row['display'] == 'Yes') echo 'checked'; ?>> Display
            <hr>
            
            <input type="submit" name="save" value="SAVE">
        </form>
        <a href="displayProducts.php">Go Back</a>
    </fieldset>
</body>
</html>