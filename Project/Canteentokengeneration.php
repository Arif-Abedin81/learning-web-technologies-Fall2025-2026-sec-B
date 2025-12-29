<html>
<head>
    <title>AIUB University Canteen Menu</title>
    <meta charset="UTF-8">
    <style>
        header {
            text-align: center;
            padding: 20px;
        }
        header img {
            width: 150px;
            height: 150px;
        }
        nav a {
            margin: 0 15px;
        }
        section img {
            width: 150px;
            height: 100px;
        }
        aside {
            background-color: #f7f7f7;
            padding: 10px;
            margin-top: 20px;
            border-left: 4px solid #888;
        }
        .orderBox {
            background-color: #eef;
            padding: 15px;
            margin-top: 20px;
            border: 2px solid #333;
        }
    </style>
</head>

<body id="top">

<header>
    <img src="AIUB Logo.png">
    <h1>AIUB University Canteen</h1>
    <h3>Healthy Foods for AIUB students</h3>
</header>

<hr>

<main>

<h2>Select Your Food</h2>

<form>

<h3>Menu</h3>

<input type="checkbox" id="sandwich" value="60"> Sandwich (60 BDT)<br>
<input type="checkbox" id="shawarma" value="80"> Shawarma (80 BDT)<br>
<input type="checkbox" id="friedrice" value="120"> Egg Fried Rice (120 BDT)<br>
<input type="checkbox" id="khichuri" value="180"> Beef Khichuri (180 BDT)<br>
<input type="checkbox" id="samosa" value="20"> Samosa (20 BDT)<br>
<input type="checkbox" id="fries" value="60"> French Fries (60 BDT)<br>
<input type="checkbox" id="tea" value="15"> Tea (15 BDT)<br>
<input type="checkbox" id="coffee" value="30"> Coffee (30 BDT)<br><br>

<input type="button" value="Add To Order" onclick="addOrder()">

</form>

<div class="orderBox">
    <h3>Your Order</h3>
    <p id="orderList">No items selected</p>
    <p><strong>Total Bill:</strong> <span id="total">0</span> BDT</p>
    <input type="button" value="Confirm Order" onclick="confirmOrder()">
</div>

</main>

<hr>

<footer>
    <p><strong>Canteen Location:</strong> AIUB Campus, Ground Floor</p>
    <p><strong>Contact:</strong> 01234567891</p>
    <p>© 2025 AIUB University Canteen</p>
</footer>

<script>
var totalBill = 0;
var items = "";

function addOrder(){

    totalBill = 0;
    items = "";

    if(document.getElementById("sandwich").checked){
        totalBill += 60;
        items += "Sandwich<br>";
    }

    if(document.getElementById("shawarma").checked){
        totalBill += 80;
        items += "Shawarma<br>";
    }

    if(document.getElementById("friedrice").checked){
        totalBill += 120;
        items += "Egg Fried Rice<br>";
    }

    if(document.getElementById("khichuri").checked){
        totalBill += 180;
        items += "Beef Khichuri<br>";
    }

    if(document.getElementById("samosa").checked){
        totalBill += 20;
        items += "Samosa<br>";
    }

    if(document.getElementById("fries").checked){
        totalBill += 60;
        items += "French Fries<br>";
    }

    if(document.getElementById("tea").checked){
        totalBill += 15;
        items += "Tea<br>";
    }

    if(document.getElementById("coffee").checked){
        totalBill += 30;
        items += "Coffee<br>";
    }

    if(items == ""){
        document.getElementById("orderList").innerHTML = "No items selected";
        document.getElementById("total").innerHTML = "0";
    } else {
        document.getElementById("orderList").innerHTML = items;
        document.getElementById("total").innerHTML = totalBill;
    }
}

function confirmOrder(){

    if(totalBill == 0){
        alert("Please select food items first");
        return;
    }

    var token = Math.floor(Math.random() * 900) + 100;

    alert(
        "Order Confirmed!\n" +
        "Your Token Number: " + token + "\n" +
        "Total Bill: " + totalBill + " BDT\n\n" +
        "Please collect your food using this token."
    );

    location.reload();
}
</script>
</body>
</html>
