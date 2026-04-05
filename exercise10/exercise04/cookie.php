<?php
setcookie("name", "Student", time()+3600);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie</title>
    <link rel="stylesheet" href="style10.css">
</head>
<body>

<div class="container">
    <h2>Cookie Value:</h2>
    <p><?php echo $_COOKIE['name'] ?? "Not Set"; ?></p>
</div>

</body>
</html>