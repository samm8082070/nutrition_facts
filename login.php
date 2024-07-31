<?php
// Database connection details
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

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM `users_admins` WHERE ";
$sql .= "`username` = '$username' AND `password` = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc(); // Fetch the first row as an associative array

    if ($row["status"] == "active" && $row["role"] == "admin") {
        header("Location: table_selection.html");
        exit;
    } else {
        echo $row["status"] . " " . $row["role"];
    }
} else {
    echo "no users found";
}


