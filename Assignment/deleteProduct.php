<?php
include('db.php');

$nameToDelete = $_GET['name'];

$sql = "SELECT * FROM products WHERE name = '$nameToDelete'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<body>
    <fieldset style="width: 300px;">
        <legend>DELETE PRODUCT</legend>
        
        Name: <?php echo $row['name']; ?><br>
        Buying Price: <?php echo $row['buying_price']; ?><br>
        Selling Price: <?php echo $row['selling_price']; ?><br>
        Displayable: <?php echo $row['display']; ?><br>
        
        <hr>
        <form action="removeProduct.php" method="POST">
            <input type="hidden" name="name" value="<?php echo $row['name']; ?>">
            <input type="submit" name="delete" value="Delete">
        </form>
        <br>
        <a href="displayProducts.php">Go Back</a>
    </fieldset>
</body>
</html>