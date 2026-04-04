<!DOCTYPE html>
<html>
<head>
    <title>PHP Table Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Multiplication Table (PHP)</h2>

    <form method="POST">
        <input type="number" name="number" placeholder="Enter a number" required>
        <button type="submit">Generate</button>
    </form>

    <div class="output">
        <?php
        if(isset($_POST['number'])) {
            $num = $_POST['number'];

            echo "<h3>Table of $num</h3>";

            for($i = 1; $i <= 10; $i++) {
                echo "$num × $i = " . ($num * $i) . "<br>";
            }
        }
        ?>
    </div>
</div>

</body>
</html>