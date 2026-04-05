<?php
session_start();
$_SESSION["user"] = "Student";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session</title>
    <link rel="stylesheet" href="style10.css">
</head>
<body>

<div class="container">
    <h2>Session Created</h2>
    <a href="session2.php">Go to Next Page</a>
</div>

</body>
</html>