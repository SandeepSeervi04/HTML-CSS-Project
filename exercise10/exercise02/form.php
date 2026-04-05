<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
    <link rel="stylesheet" href="style8.css">
</head>
<body>

<div class="container">
    <h2>Form Validation</h2>

    <form method="POST">
        <input type="text" name="name" placeholder="Enter Name">
        <input type="number" name="age" placeholder="Enter Age">
        <button type="submit">Submit</button>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $age = $_POST['age'];

        if(empty($name) || empty($age)) {
            echo "<p>❌ All fields required</p>";
        } else if($age < 18) {
            echo "<p>❌ Must be 18+</p>";
        } else {
            echo "<p>✅ Name: $name | Age: $age</p>";
        }
    }
    ?>
</div>

</body>
</html>