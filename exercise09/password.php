<!DOCTYPE html>
<html>
<head>
    <title>Password Checker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">
    <h2>Password Strength Checker</h2>

    <form method="POST">
        <input type="password" name="pass" placeholder="Enter password" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pass = $_POST['pass'];

        if (strlen($pass) < 6) {
            echo "<p style='color:red;'>Weak Password</p>";
        } else {
            echo "<p style='color:green;'>Strong Password</p>";
        }
    }
    ?>
</div>

</body>
</html>