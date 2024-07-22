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
$selected_calorie = $_POST['calorie_dropdown'];
$selected_fat = $_POST['fat_dropdown'];
$selected_protein = $_POST['protein_dropdown'];
$selected_carbs = $_POST['carbs_dropdown'];
$selected_salt = $_POST['salt_dropdown'];
$selected_sodium = $_POST['sodium_dropdown'];

// Construct SQL query based on user selections (adjust logic as needed)
$conditions = "";

$sql = "SELECT * FROM `nutrituion_facts` WHERE ";


if ($selected_calorie != "default") {
    if (!empty($conditions)) {
        $conditions .= " AND ";
    }
    $conditions .= "Calories_kcal BETWEEN " ;
    $conditions .= $selected_calorie ;
}
//---------------------------------------
if ($selected_fat != "default") {
    if (!empty($conditions)) {
        $conditions .= " AND ";
    }
    $conditions .= "Fat_g BETWEEN " ;
    $conditions .= $selected_fat ;
}
//---------------------------------------
if ($selected_protein != "default") {
    if (!empty($conditions)) {
        $conditions .= " AND ";
    }
    $conditions .= "Protein_g BETWEEN " ;
    $conditions .= $selected_protein ;
}
//---------------------------------------
if ($selected_sodium != "default") {
    if (!empty($conditions)) {
        $conditions .= " AND ";
    }
    $conditions .= "Sodium_mg BETWEEN " ;
    $conditions .= $selected_sodium ;
}
//---------------------------------------
if ($selected_salt != "default") {
    if (!empty($conditions)) {
        $conditions .= " AND ";
    }
    $conditions .= "Salt_g BETWEEN " ;
    $conditions .= $selected_salt ;
}
//---------------------------------------
if ($selected_carbs != "default") {
    if (!empty($conditions)) {
        $conditions .= " AND ";
    }
    $conditions .= "Carbs_g BETWEEN " ;
    $conditions .= $selected_carbs ;
}


if (empty($conditions) ) {

    echo "Please select at least one criteria for searching.";
    exit;
}
$sql .= $conditions;

echo $sql;
$result = $conn->query($sql);

//if ($result->num_errors > 0) {
//    echo "Error: " . $result->error;
//} else {
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            // Access specific columns by name
            $id = $row["ID"];
            $food_name = $row["Food_Item_Name"];
            $fat = $row["Fat_g"];
            $salt = $row["Salt_g"];
            $sodium = $row["Sodium_mg"];
            $carbs = $row["Carbs_g"];
            $protein = $row["Protein_g"];
            $calories = $row["Calories_kcal"];

            // Display data (modify as needed)
            echo "ID: " . $id . "<br>";
            echo "Food Item: " . $food_name . "<br>";
            echo "Fat: " . $fat . "g<br>";
            echo "Salt: " . $salt . "g<br>";
            echo "Sodium: " . $sodium . "mg<br>";
            echo "Carbs: " . $carbs . "g<br>";
            echo "Protein: " . $protein . "g<br>";
            echo "Calories: " . $calories . "kcal<br>";
            echo "<br>"; // Add a line break between entries
        }
    } else {
        echo "No records found";
    }
//}

// Prepare and execute the query (consider prepared statements for security)
// ... (SQL execution logic based on your database structure)


$conn->close();
?>
