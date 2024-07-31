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
$selected_table = $_GET['selected_table'];

if($_GET['selected_table'] == "food_category") {
   $sql= "DELETE FROM food_category WHERE category_id =". $id;

    $result= $conn->query($sql);
    if ($result) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    exit;
}
//------------------------------------------------------------------------------

if($_GET['selected_table'] == "food_item_description"){
    $sql= "DELETE FROM food_item_description WHERE Food_Item_ID =". $id;


    $result= $conn->query($sql);
    if ($result) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    exit;
}
//------------------------------------------------------------------------------

if($_GET['selected_table'] == "food_item_table"){
    $sql= "DELETE FROM food_item_table WHERE Food_Item_ID =". $id;


    $result= $conn->query($sql);
    if ($result) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    exit;
}
//------------------------------------------------------------------------------

if($_GET['selected_table'] == "nutrition_fact_table"){
    $sql= "DELETE FROM nutrition_fact_table WHERE Nutrition_Fact_ID =". $id;


    $result= $conn->query($sql);
    if ($result) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    exit;
}
//------------------------------------------------------------------------------

if($_GET['selected_table'] == "nutrituion_facts"){
    $sql= "DELETE FROM nutrituion_facts WHERE ID =". $id;


    $result= $conn->query($sql);
    if ($result) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    exit;
}