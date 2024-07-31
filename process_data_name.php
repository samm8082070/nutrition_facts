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


// Retrieve user input (assuming form fields)
$selected_name = $_POST['name'];




$sql = "SELECT * FROM `nutrituion_facts` WHERE ";
$sql .= "`Food_Item_Name` = '$selected_name'";



echo $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<thead><tr>";
    echo "<th>ID</th><th>Food Item</th><th>Fat (g)</th><th>Salt (g)</th><th>Sodium (mg)</th><th>Carbs (g)</th><th>Protein (g)</th><th>Calories (kcal)</th>";
    echo "</tr></thead>";
    echo "<tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["ID"] . "</td>";
        echo "<td>" . $row["Food_Item_Name"] . "</td>";
        echo "<td>" . $row["Fat_g"] . "</td>";
        echo "<td>" . $row["Salt_g"] . "</td>";
        echo "<td>" . $row["Sodium_mg"] . "</td>";
        echo "<td>" . $row["Carbs_g"] . "</td>";
        echo "<td>" . $row["Protein_g"] . "</td>";
        echo "<td>" . $row["Calories_kcal"] . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "No records found";
}
//if ($result->num_errors > 0) {
//    echo "Error: " . $result->error;
//} else {
//    if ($result->num_rows > 0) {
//        while($row = $result->fetch_assoc()) {
//            // Access specific columns by name
//            $id = $row["ID"];
//            $food_name = $row["Food_Item_Name"];
//            $fat = $row["Fat_g"];
//            $salt = $row["Salt_g"];
//            $sodium = $row["Sodium_mg"];
//            $carbs = $row["Carbs_g"];
//            $protein = $row["Protein_g"];
//            $calories = $row["Calories_kcal"];
//
//            // Display data (modify as needed)
//            echo "ID: " . $id . "<br>";
//            echo "Food Item: " . $food_name . "<br>";
//            echo "Fat: " . $fat . "g<br>";
//            echo "Salt: " . $salt . "g<br>";
//            echo "Sodium: " . $sodium . "mg<br>";
//            echo "Carbs: " . $carbs . "g<br>";
//            echo "Protein: " . $protein . "g<br>";
//            echo "Calories: " . $calories . "kcal<br>";
//            echo "<br>"; // Add a line break between entries
//        }
//    } else {
//        echo "No records found";
//    }


//}

// Prepare and execute the query (consider prepared statements for security)
// ... (SQL execution logic based on your database structure)


$conn->close();
?>