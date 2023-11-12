<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <?php
        // Option 1: Using a form
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            switch ($operation) {
                case "addition":
                    (float) $result = $num1 + $num2;
                    break;
                case "subtraction":
                    (float) $result = $num1 - $num2;
                    break;
                case "multiplication":
                    (float) $result = $num1 * $num2;
                    break;
                case "division":
                    (float) $result = ($num2 != 0) ? $num1 / $num2 : "Undefined (Division by zero)";
                    break;
                default:
                    (float) $result = "Invalid operation";
                    break;
            }

            echo "<p>Result: $result</p>";
        }
    ?>
    <!-- Option 1: Using a form -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="num1">Enter number 1:</label>
        <input type="number" name="num1" required>
        <label for="operation">Select operation:</label>
        <select name="operation" required>
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select>
        <label for="num2">Enter number 2:</label>
        <input type="number" name="num2" required>
        <input type="submit" value="Calculate">
    </form>

</body>
</html>
