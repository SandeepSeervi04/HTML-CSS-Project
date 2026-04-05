<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Page</title>
    <link rel="stylesheet" href="style10.css">
</head>
<body>

<div class="container">
    <h2>Welcome</h2>
    <p><?php echo $_SESSION["user"]; ?></p>
</div>

</body>
</html>