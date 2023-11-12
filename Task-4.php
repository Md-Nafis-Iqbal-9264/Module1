<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <?php
        // Option 1: Using a form
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];
            $result = ($number % 2 == 0) ? "Even" : "Odd";
            echo "<p>The number $number is $result.</p>";
        }
    ?>
    <!-- Option 1: Using a form -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" required>
        <input type="submit" value="Check">
    </form>

</body>
</html>
