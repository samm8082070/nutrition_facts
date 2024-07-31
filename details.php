<?php

$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "nutrition_facts";

// Create connection
$conn = new mysqli($servername, $username ,$password , $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['id'];
$sql = "SELECT *
    FROM food_item_description
WHERE";

$sql = $sql . " Food_Item_ID = '$id'";

$result = $conn->query($sql);

$imagePath = 'images/id/' . $id . '.jpg';

echo '<img src="' . $imagePath . '" alt="Image Description">';

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Process the fetched data
    echo "Food Item ID: " . $row["Food_Item_ID"] . "<br>";
    echo "Description: " . $row["description"] . "<br>";
    echo "Vitamins: " . $row["vitamins"] . "<br>";
} else {
    echo "No data found for the given ID";
}
$conn->close();
?>
