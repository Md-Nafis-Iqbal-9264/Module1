<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <?php
        $temperature = random_int((int) -10,(int) 30);

        if ($temperature <= 0) {
            $message = "It's freezing!";
        } elseif ($temperature <= 15) {
            $message = "It's cool.";
        } else {
            $message = "It's warm.";
        }

        echo "<p>Temperature: $temperature &deg;C</p>";
        echo "<p>$message</p>";
    ?>
</body>
</html>
