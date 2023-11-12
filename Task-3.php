<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <?php
        // Option 1: Using a form
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score1 = $_POST["score1"];
            $score2 = $_POST["score2"];
            $score3 = $_POST["score3"];

            $average = ($score1 + $score2 + $score3) / 3;

            if ($average >= 90) {
                $grade = "A";
            } else if ($average >= 80) {
                $grade = "B";
            } else if ($average >= 70) {
                $grade = "C";
            } else if ($average >= 60) {
                $grade = "D";
            } else {
                $grade = "F";
            }

            echo "<p>Average Score: $average</p>";
            echo "<p>Grade: $grade</p>";
        }
    ?>
    <!-- Option 1: Using a form -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="score1">Test Score 1:</label>
        <input type="number" name="score1" required>
        <label for="score2">Test Score 2:</label>
        <input type="number" name="score2" required>
        <label for="score3">Test Score 3:</label>
        <input type="number" name="score3" required>
        <input type="submit" value="Calculate">
    </form>

</body>
</html>
