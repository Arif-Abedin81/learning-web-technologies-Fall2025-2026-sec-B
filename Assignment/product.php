<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <fieldset style="width: 300px;">
        <legend>ADD PRODUCT</legend>
        <form action="insert_product.php" method="POST">
            Name
            <br>
            <input type="text" name="name">
            <br>
            
            Buying Price
            <br>
            <input type="text" name="buyingPrice">
            <br>
            
            Selling Price
            <br>
            <input type="text" name="sellingPrice">
            <br>
            
            <hr>
            <input type="checkbox" name="display" value="Yes"> Display
            <hr>
            
            <input type="submit" name="save" value="SAVE">
            <br>
            <br>

            <a href="displayproducts.php">Go to display page</a>
       
        </form>
    </fieldset>
</body>
</html>