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


$selected_table = $_GET['selected_table'];
$id = $_GET['id'];
$sql = "SELECT * FROM ".$selected_table." WHERE ";

//-------------------------------------------------------
if($selected_table == "food_category"){
    $sql .= "`category_id` = '$id'";
    echo $sql;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>
    <form method="post" action="edit_2.php">

        <input type="hidden" name="id_old" value="<?php echo $row['category_id']; ?>">
        <input type="hidden" name="selected_table" value="food_category">

        <label for="category_id"> Category_id:</label>
        <input type="text" name="id" value="<?php echo $row['category_id']; ?>">




        <label for="category">Category:</label>
        <input type="text" name="category" value="<?php echo $row['category']; ?>">

        <button type="submit">Update</button>
    </form>

    <?php

}}

//------------------------------------------------------
//Food_Item_ID
if($selected_table == "food_item_description"){

    $sql = $sql."Food_Item_ID = ".$_GET['id'];
    echo $sql;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <form method="post" action="edit_2.php">


            <input type="hidden" name="id_old" value="<?php echo $row['Food_Item_ID']; ?>">
            <input type="hidden" name="selected_table" value="food_item_description">

            <label for="food_item_id"> Food_Item_ID:</label>
            <input type="text" name="Food_Item_ID" value="<?php echo $row['Food_Item_ID']; ?>">

            <label for="description"> Description:</label>
            <input type="text" name="description" value="<?php echo $row['description']; ?>">

            <label for="vitamins"> Vitamins:</label>
            <input type="text" name="vitamins" value="<?php echo $row['vitamins']; ?>">

            <label for="description_id"> Description_ID:</label>
            <input type="text" name="description_id" value="<?php echo $row['description_id']; ?>">


            <button type="submit">Update</button>
        </form>

        <?php

    }

}
//------------------------------------------------------
if($selected_table == "food_item_table"){

    $sql = $sql."Food_Item_ID = ".$_GET['id'];
    echo $sql;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <form method="post" action="edit_2.php">


            <input type="hidden" name="id_old" value="<?php echo $row['Food_Item_ID']; ?>">
            <input type="hidden" name="selected_table" value="food_item_table">

            <label for="food_item_id"> Food_Item_ID:</label>
            <input type="text" name="Food_Item_ID" value="<?php echo $row['Food_Item_ID']; ?>">

            <label for="food_item_name"> Food_Item_Name:</label>
            <input type="text" name="Food_Item_Name" value="<?php echo $row['Food_Item_Name']; ?>">

            <label for="category_id"> Category_ID:</label>
            <input type="text" name="category_id" value="<?php echo $row['category_id']; ?>">

            <label for="nutrition_fact_id"> Nutrition_Fact_ID:</label>
            <input type="text" name="Nutrition_Fact_ID" value="<?php echo $row['Nutrition_Fact_ID']; ?>">

            <label for="description_id"> Description_ID:</label>
            <input type="text" name="description_id" value="<?php echo $row['description_id']; ?>">


            <button type="submit">Update</button>
        </form>

        <?php

    }
}
//------------------------------------------------------
if($selected_table == "nutrition_fact_table"){
    $sql = $sql."Nutrition_Fact_ID = ".$_GET['id'];
    echo $sql;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <form method="post" action="edit_2.php">


            <input type="hidden" name="id_old" value="<?php echo $row['Nutrition_Fact_ID']; ?>">
            <input type="hidden" name="selected_table" value="nutrition_fact_table">

            <label for="nutrition_fact_id"> Nutrition_Fact_ID:</label>
            <input type="text" name="Nutrition_Fact_ID" value="<?php echo $row['Nutrition_Fact_ID']; ?>">

            <label for="food_item_id"> Food_Item_ID:</label>
            <input type="text" name="Food_Item_ID" value="<?php echo $row['Food_Item_ID']; ?>">

            <label for="fat_g"> Fat (g):</label>
            <input type="text" name="Fat_g" value="<?php echo $row['Fat_g']; ?>">

            <label for="salt_g"> Salt (g):</label>
            <input type="text" name="Salt_g" value="<?php echo $row['Salt_g']; ?>">

            <label for="sodium_mg"> Sodium (mg):</label>
            <input type="text" name="Sodium_mg" value="<?php echo $row['Sodium_mg']; ?>">

            <label for="carbs_g"> Carbs (g):</label>
            <input type="text" name="Carbs_g" value="<?php echo $row['Carbs_g']; ?>">

            <label for="protein_g"> Protein (g):</label>
            <input type="text" name="Protein_g" value="<?php echo $row['Protein_g']; ?>">

            <label for="calories_kcal"> Calories (kcal):</label>
            <input type="text" name="Calories_kcal" value="<?php echo $row['Calories_kcal']; ?>">

            <button type="submit">Update</button>
        </form>

        <?php

    }
}
//------------------------------------------------------
if($selected_table == "nutrituion_facts"){
    $sql = $sql."ID = ".$_GET['id'];
    echo $sql;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <form method="post" action="edit_2.php">


            <input type="hidden" name="id_old" value="<?php echo $row['ID']; ?>">
            <input type="hidden" name="selected_table" value="nutrituion_facts">

            <label for="id"> ID:</label>
            <input type="text" name="ID" value="<?php echo $row['ID']; ?>">

            <label for="food_item_name"> Food Item Name:</label>
            <input type="text" name="Food_Item_Name" value="<?php echo $row['Food_Item_Name']; ?>">


            <label for="fat_g"> Fat (g):</label>
            <input type="text" name="Fat_g" value="<?php echo $row['Fat_g']; ?>">

            <label for="salt_g"> Salt (g):</label>
            <input type="text" name="Salt_g" value="<?php echo $row['Salt_g']; ?>">

            <label for="sodium_mg"> Sodium (mg):</label>
            <input type="text" name="Sodium_mg" value="<?php echo $row['Sodium_mg']; ?>">

            <label for="carbs_g"> Carbs (g):</label>
            <input type="text" name="Carbs_g" value="<?php echo $row['Carbs_g']; ?>">

            <label for="protein_g"> Protein (g):</label>
            <input type="text" name="Protein_g" value="<?php echo $row['Protein_g']; ?>">

            <label for="calories_kcal"> Calories (kcal):</label>
            <input type="text" name="Calories_kcal" value="<?php echo $row['Calories_kcal']; ?>">


            <button type="submit">Update</button>
        </form>

        <?php

    }
}
