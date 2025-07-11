<?php
$host = "localhost";
$user = "root";
$pass = "";         
$db = "cars";        

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cars";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Car List</title>
</head>
<body>
    <h1>My Car List</h1>
    <ul>
        <?php
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li>{$row['year']} {$row['make']} {$row['model']}</li>";
            }
        } else {
            echo "<li>No cars found.</li>";
        }
        ?>
    </ul>
</body>
</html>

<?php $conn->close(); ?>
