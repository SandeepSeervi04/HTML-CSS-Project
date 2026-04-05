<?php
$conn = new mysqli("localhost", "root", "", "product_db");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
    <link rel="stylesheet" href="style9.css">
</head>
<body>

<div class="container">
    <h2>Add Product</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Product Name">
        <input type="number" name="price" placeholder="Price">
        <button type="submit">Add</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $conn->query("INSERT INTO products(name, price) VALUES('$name','$price')");
    }

    $result = $conn->query("SELECT * FROM products");

    echo "<h3>Products:</h3>";
    while($row = $result->fetch_assoc()) {
        echo "<p>".$row['name']." - ₹".$row['price']."</p>";
    }
    ?>
</div>

</body>
</html>