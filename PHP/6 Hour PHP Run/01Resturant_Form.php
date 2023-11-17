<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

</head>
<body>
    <form action="01Resturant_Form.php" method="get">
        Item: 
        <input type="text" name="item"><br>
        Quantity: 
        <input type="text" name="quantity"><br>
        Price: 
        <input type="text" name="price"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php   
    if (isset($_GET['item'])){
        echo "You ordered {$_GET['quantity']} {$_GET['item']}s of price $ {$_GET['price']}. <br>";
        $total = $_GET['quantity'] * $_GET['price'];
        echo "And your total is $ {$total}.";
    }
?>