<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <?php
        // Option 1: Using a form
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            if ($num1 > $num2){
                $larger_num = $num1;
                echo "<p>The larger number is: $larger_num</p>";
            }
            else if ($num2 > $num1){
                $larger_num = $num2;
                echo "<p>The larger number is: $larger_num</p>";
            }
            else {
                echo "<p>The number are equal</p>";
            }
        }
    ?>
    <!-- Option 1: Using a form -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="num1">Enter number 1:</label>
        <input type="number" name="num1" required>
        <label for="num2">Enter number 2:</label>
        <input type="number" name="num2" required>
        <input type="submit" value="Compare">
    </form>
</body>
</html>
