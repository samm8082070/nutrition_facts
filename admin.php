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

//---------------------------------------------------------------------
$selected_table = $_POST['selected_table'];


// Build SQL query based on selected table
$sql = "SELECT * FROM " . $selected_table;
$result = $conn->query($sql);

if($_POST['selected_table']=="nutrituion_facts"){
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
        echo "<td><a href='edit.php?id=" . $row["ID"].'&selected_table='.$selected_table . "'>" . "edit" . "</td>";
        echo "<td><a href='delete.php?id=" . $row["ID"].'&selected_table='.$selected_table . "'>" . "delete" . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
        echo "<a href='create.php?selected_table=" . $selected_table . "'>create</a>";

    }
}
//-----------------------------------------------------
if ($_POST['selected_table'] == "food_item_table") {
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<thead><tr>";
        echo "<th>Food Item ID</th><th>Food Item Name</th><th>Category ID</th><th>Nutrition Fact ID</th><th>Description ID</th>";
        echo "<th>Edit</th><th>Delete</th>";
        echo "</tr></thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Food_Item_ID"] . "</td>";
            echo "<td>" . $row["Food_Item_Name"] . "</td>";
            echo "<td>" . $row["category_id"] . "</td>";
            echo "<td>" . $row["Nutrition_Fact_ID"] . "</td>";
            echo "<td>" . $row["description_id"] . "</td>";
            echo "<td><a href='edit.php?id=" . $row["Food_Item_ID"] . "&selected_table=" . $selected_table . "'>Edit</a></td>";
            echo "<td><a href='delete.php?id=" . $row["Food_Item_ID"] . "&selected_table=" . $selected_table . "'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "<a href='create.php?selected_table=" . $selected_table . "'>create</a>";
    }
}
//-----------------------------------------------------------------------------
if($_POST['selected_table']=="nutrition_fact_table"){
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<thead><tr>";
        echo "<th>Nutrition Fact ID</th><th>Food Item ID</th><th>Fat (g)</th><th>Salt (g)</th><th>Sodium (mg)</th><th>Carbs (g)</th><th>Protein (g)</th><th>Calories (kcal)</th>";
        echo "</tr></thead>";
        echo "<tbody>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Nutrition_Fact_ID"] . "</td>";
            echo "<td>" . $row["Food_Item_ID"] . "</td>";
            echo "<td>" . $row["Fat_g"] . "</td>";
            echo "<td>" . $row["Salt_g"] . "</td>";
            echo "<td>" . $row["Sodium_mg"] . "</td>";
            echo "<td>" . $row["Carbs_g"] . "</td>";
            echo "<td>" . $row["Protein_g"] . "</td>";
            echo "<td>" . $row["Calories_kcal"] . "</td>";
            echo "<td><a href='edit.php?id=" . $row["Nutrition_Fact_ID"] . "&selected_table=nutrition_fact_table'>edit</a></td>";
            echo "<td><a href='delete.php?id=" . $row["Nutrition_Fact_ID"] . "&selected_table=nutrition_fact_table'>delete</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "<a href='create.php?selected_table=" . $selected_table . "'>create</a>";
    }
}
//----------------------------------------------------------------
if ($_POST['selected_table'] == "food_category") {
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<thead><tr>";
        echo "<th>Category ID</th><th>Category</th>";
        echo "</tr></thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["category_id"] . "</td>";
            echo "<td>" . $row["category"] . "</td>";
            echo "<td><a href='edit.php?id=" . $row["category_id"] . "&selected_table=" . $selected_table . "'>edit</a></td>";
            echo "<td><a href='delete.php?id=" . $row["category_id"] . "&selected_table=" . $selected_table . "'>delete</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "<a href='create.php?selected_table=" . $selected_table . "'>create</a>";
    }
}
//---------------------------------------------------------------------
if ($_POST['selected_table'] == "food_item_description") {
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<thead><tr>";
        echo "<th>Food Item ID</th><th>Description</th><th>Vitamins</th><th>Description ID</th>";
        echo "</tr></thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Food_Item_ID"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["vitamins"] . "</td>";
            echo "<td>" . $row["description_id"] . "</td>";
            echo "<td><a href='edit.php?id=" . $row["Food_Item_ID"] . "&selected_table=" . $selected_table . "'>edit</a></td>";
            echo "<td><a href='delete.php?id=" . $row["Food_Item_ID"] . "&selected_table=" . $selected_table . "'>delete</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "<a href='create.php?selected_table=" . $selected_table . "'>create</a>";
    }
}
?>
