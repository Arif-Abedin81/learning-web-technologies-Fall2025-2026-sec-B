<?php include('db.php'); ?>
<html>
<head>
    <title>Search Product</title>
    <script>
    function searchNow() {
        var inputVal = document.getElementById("searchBox").value;
        
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tableBody").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getSearch.php?q=" + inputVal, true);
        xmlhttp.send();
    }
    </script>
</head>
<body>

    <fieldset style="width: 500px;">
    <legend>SEARCH RESULT</legend>
    <input type="text" id="searchBox">
    <button type="button" onclick="searchNow()">Search By Name</button>
    <br>
    <br>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>NAME</th>
                <th>PROFIT</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            <?php
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $profit = $row['selling_price'] - $row['buying_price'];
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $profit . "</td>";
                echo "<td>
                        <a href='editProducts.php?name=".$row['name']."'>edit</a> 
                      </td>";
                echo "<td>
                        <a href='deleteProduct.php?name=".$row['name']."'>delete</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    </fieldset>
    <br>
    <a href="displayproducts.php">Back to display</a>
    <br> 
    <br>
    <a href="product.php">Add new product</a>

</body>
</html>