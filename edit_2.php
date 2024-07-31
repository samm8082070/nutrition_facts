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
    $sql_update = "UPDATE food_category SET category_id = " . $_POST['id'] . ", category = '" . $_POST['category'] . "' WHERE category_id = " . $_POST['id_old'];


$result= $conn->query($sql_update);
    if ($result) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
exit;
}
//------------------------------------------------------------------------------

if($_POST['selected_table'] == "food_item_description"){
    $sql_update = "UPDATE food_item_description SET Food_Item_ID = " . $_POST['Food_Item_ID'] . ", description = '" . $_POST['description'] . "', vitamins = '" . $_POST['vitamins'] . "', description_id = " . $_POST['description_id'] . " WHERE Food_Item_ID = " . $_POST['id_old'];



    $result= $conn->query($sql_update);
    if ($result) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
exit;
}
//------------------------------------------------------------------------------
if($_POST['selected_table'] == "food_item_table"){

    $sql_update = "UPDATE food_item_table SET Food_Item_ID = " . $_POST['Food_Item_ID'] . ", Food_Item_Name = '" . $_POST['Food_Item_Name'] . "', category_id = " . $_POST['category_id'] . ", Nutrition_Fact_ID = " . $_POST['Nutrition_Fact_ID'] . ", description_id = " . $_POST['description_id'] . " WHERE Food_Item_ID = " . $_POST['Food_Item_ID'];



    $result= $conn->query($sql_update);
    if ($result) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    exit;

}
//------------------------------------------------------------------------------
if($_POST['selected_table'] == "nutrition_fact_table"){

    $sql_update = "UPDATE nutrition_fact_table SET Nutrition_Fact_ID = " . $_POST['Nutrition_Fact_ID'] . ", Food_Item_ID = " . $_POST['Food_Item_ID'] . ", Fat_g = " . $_POST['Fat_g'] . ", Salt_g = " . $_POST['Salt_g'] . ", Sodium_mg = " . $_POST['Sodium_mg'] . ", Carbs_g = " . $_POST['Carbs_g'] . ", Protein_g = " . $_POST['Protein_g'] . ", Calories_kcal = " . $_POST['Calories_kcal'] . " WHERE Nutrition_Fact_ID = " . $_POST['Nutrition_Fact_ID'];

    $result= $conn->query($sql_update);
    if ($result) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    exit;
}
//------------------------------------------------------------------------------
if($_POST['selected_table'] == "nutrituion_facts"){

    $sql_update = "UPDATE nutrituion_facts SET ID = " . $_POST['ID'] . ", Food_Item_Name = '" . $_POST['Food_Item_Name'] . "', Fat_g = " . $_POST['Fat_g'] . ", Salt_g = " . $_POST['Salt_g'] . ", Sodium_mg = " . $_POST['Sodium_mg'] . ", Carbs_g = " . $_POST['Carbs_g'] . ", Protein_g = " . $_POST['Protein_g'] . ", Calories_kcal = " . $_POST['Calories_kcal'] . " WHERE ID = " . $_POST['ID'];
echo $sql_update;
    $result= $conn->query($sql_update);
    if ($result) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    exit;
}