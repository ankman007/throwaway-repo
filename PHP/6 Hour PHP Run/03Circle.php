<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circle</title>
</head>
<body>
    <form action="03Circle.php" method="post">
        <label for="radius">Enter the radius of the circle: </label>
        <input type="text" name="radius"><br>
        <input type="submit" value="Find Area, Circumference & Diameter">
    </form>    

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Check if the form has been submitted
        if (isset($_POST['radius'])) {
            $radius = floatval($_POST['radius']); // Convert to float

            $area = number_format(pi() * pow($radius, 2), 2);
            $circumference = number_format(2 * pi() * $radius, 2);
            $diameter = 2 * $radius;
            
            echo "The area of the circle is {$area} <br>";
            echo "The circumference of the circle is {$circumference} <br>";
            echo "The diameter of the circle is {$diameter} <br>";
        }
    }
    ?>
</body>
</html>
