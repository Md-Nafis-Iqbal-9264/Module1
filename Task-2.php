<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <?php
        // Option 1: Using a form
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST["temperature"];
            $conversion = $_POST["conversion"];

            if ($conversion == "celsius_to_fahrenheit") {
                $converted_temp = ($temperature * 9/5) + 32;
            } else {
                $converted_temp = ($temperature - 32) * 5/9;
            }

            echo "<p>Converted Temperature: $converted_temp</p>";
        }
    ?>
    <!-- Option 1: Using a form -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="temperature">Temperature:</label>
        <input type="text" name="temperature" required>
        <label for="conversion">Conversion:</label>
        <select name="conversion" required>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>
        <input type="submit" value="Convert">
    </form>

</body>
</html>
