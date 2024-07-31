<?php

$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "nutrition_facts";


$conn = new mysqli($servername, $username ,$password , $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if($_POST['selected_table'] == "food_category"){
    $sql_create = "INSERT INTO food_category (category_id, category) VALUES (" . $_POST['id'] . ", '" . $_POST['category'] . "')";



    $result= $conn->query($sql_create);
    if ($result) {
        echo "Record created successfully";
    } else {
        echo "Error created record: " . $conn->error;
    }
    exit;
}
//------------------------------------------------------------------------------

if($_POST['selected_table'] == "food_item_description"){
    $sql_create = "INSERT INTO food_item_description (Food_Item_ID, description, vitamins, description_id) VALUES (" . $_POST['Food_Item_ID'] . ", '" . $_POST['description'] . "', '" . $_POST['vitamins'] . "', " . $_POST['description_id'] . ")";



    $result= $conn->query($sql_create);
    if ($result) {
        echo "Record created successfully";
    } else {
        echo "Error created record: " . $conn->error;
    }
    exit;
}
//------------------------------------------------------------------------------
if($_POST['selected_table'] == "food_item_table"){

    $sql_create = "INSERT INTO food_item_table (Food_Item_ID, Food_Item_Name, category_id, Nutrition_Fact_ID, description_id) VALUES (" . $_POST['Food_Item_ID'] . ", '" . $_POST['Food_Item_Name'] . "', " . $_POST['category_id'] . ", " . $_POST['Nutrition_Fact_ID'] . ", " . $_POST['description_id'] . ")";



    $result= $conn->query($sql_create);
    if ($result) {
        echo "Record created successfully";
    } else {
        echo "Error created record: " . $conn->error;
    }
    exit;

}
//------------------------------------------------------------------------------
if($_POST['selected_table'] == "nutrition_fact_table"){

    $sql_create = "INSERT INTO nutrition_fact_table (Nutrition_Fact_ID, Food_Item_ID, Fat_g, Salt_g, Sodium_mg, Carbs_g, Protein_g, Calories_kcal) VALUES (" . $_POST['Nutrition_Fact_ID'] . ", " . $_POST['Food_Item_ID'] . ", " . $_POST['Fat_g'] . ", " . $_POST['Salt_g'] . ", " . $_POST['Sodium_mg'] . ", " . $_POST['Carbs_g'] . ", " . $_POST['Protein_g'] . ", " . $_POST['Calories_kcal'] . ")";

    $result= $conn->query($sql_create);
    if ($result) {
        echo "Record created successfully";
    } else {
        echo "Error created record: " . $conn->error;
    }
    exit;
}
//------------------------------------------------------------------------------
if($_POST['selected_table'] == "nutrituion_facts"){

    $sql_create = "INSERT INTO nutrituion_facts (ID, Food_Item_Name, Fat_g, Salt_g, Sodium_mg, Carbs_g, Protein_g, Calories_kcal) VALUES (" . $_POST['ID'] . ", '" . $_POST['Food_Item_Name'] . "', " . $_POST['Fat_g'] . ", " . $_POST['Salt_g'] . ", " . $_POST['Sodium_mg'] . ", " . $_POST['Carbs_g'] . ", " . $_POST['Protein_g'] . ", " . $_POST['Calories_kcal'] . ")";

    $result= $conn->query($sql_create);
    if ($result) {
        echo "Record created successfully";
    } else {
        echo "Error created record: " . $conn->error;
    }
    exit;
}