<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <form action="02Math_Functions.php" method="post">
        x: 
        <input type="text" name="x">
        y: 
        <input type="text" name="y">
        z: 
        <input type="text" name="z">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if (isset($_POST['x'])){
        $x = $_POST['x'];
        $y = isset($_POST['y']) ? $_POST['y'] : null;
        $z = isset($_POST['z']) ? $_POST['z'] : null;

        $total = null;

        // $total = abs($x);
        // $total = round($x);
        // $total = floor($x);
        // $total = ceil($x);
        // $total = sqrt($x);
        // $total = pow($x, $y);
        // $total = max($x, $y, $z);
        // $total = min($x, $y, $z);
        // $total = pi();
        // $total = rand(1, 6);      

        echo "x: {$x} <br>";
        echo "y: {$y} <br>";
        echo "z: {$z} <br>";
        
        echo $total;
    }

?>