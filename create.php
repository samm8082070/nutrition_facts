<?php




$selected_table = $_GET['selected_table'];



//-------------------------------------------------------
if($selected_table == "food_category"){

        ?>
        <form method="post" action="create2.php">


            <input type="hidden" name="selected_table" value="food_category">

            <label for="category_id"> Category_id:</label>
            <input type="text" name="id" value="">




            <label for="category">Category:</label>
            <input type="text" name="category" value="">

            <button type="submit">Update</button>
        </form>

        <?php

    }

//------------------------------------------------------
//Food_Item_ID
if($selected_table == "food_item_description"){


        ?>
        <form method="post" action="create2.php">



            <input type="hidden" name="selected_table" value="food_item_description">

            <label for="food_item_id"> Food_Item_ID:</label>
            <input type="text" name="Food_Item_ID" value="">

            <label for="description"> Description:</label>
            <input type="text" name="description" value="">

            <label for="vitamins"> Vitamins:</label>
            <input type="text" name="vitamins" value="">

            <label for="description_id"> Description_ID:</label>
            <input type="text" name="description_id" value="">


            <button type="submit">Update</button>
        </form>

        <?php



}
//------------------------------------------------------
if($selected_table == "food_item_table"){


        ?>
        <form method="post" action="create2.php">



            <input type="hidden" name="selected_table" value="food_item_table">

            <label for="food_item_id"> Food_Item_ID:</label>
            <input type="text" name="Food_Item_ID" value="">

            <label for="food_item_name"> Food_Item_Name:</label>
            <input type="text" name="Food_Item_Name" value="">

            <label for="category_id"> Category_ID:</label>
            <input type="text" name="category_id" value="">

            <label for="nutrition_fact_id"> Nutrition_Fact_ID:</label>
            <input type="text" name="Nutrition_Fact_ID" value="">

            <label for="description_id"> Description_ID:</label>
            <input type="text" name="description_id" value="">


            <button type="submit">Update</button>
        </form>

        <?php


}
//------------------------------------------------------
if($selected_table == "nutrition_fact_table"){

        ?>
        <form method="post" action="create2.php">



            <input type="hidden" name="selected_table" value="nutrition_fact_table">

            <label for="nutrition_fact_id"> Nutrition_Fact_ID:</label>
            <input type="text" name="Nutrition_Fact_ID" value="">

            <label for="food_item_id"> Food_Item_ID:</label>
            <input type="text" name="Food_Item_ID" value="">

            <label for="fat_g"> Fat (g):</label>
            <input type="text" name="Fat_g" value="">

            <label for="salt_g"> Salt (g):</label>
            <input type="text" name="Salt_g" value="">

            <label for="sodium_mg"> Sodium (mg):</label>
            <input type="text" name="Sodium_mg" value="">

            <label for="carbs_g"> Carbs (g):</label>
            <input type="text" name="Carbs_g" value="">

            <label for="protein_g"> Protein (g):</label>
            <input type="text" name="Protein_g" value="">

            <label for="calories_kcal"> Calories (kcal):</label>
            <input type="text" name="Calories_kcal" value="">

            <button type="submit">Update</button>
        </form>

        <?php


}
//------------------------------------------------------
if($selected_table == "nutrituion_facts"){

        ?>
        <form method="post" action="create2.php">



            <input type="hidden" name="selected_table" value="nutrituion_facts">

            <label for="id"> ID:</label>
            <input type="text" name="ID" value="">

            <label for="food_item_name"> Food Item Name:</label>
            <input type="text" name="Food_Item_Name" value="">


            <label for="fat_g"> Fat (g):</label>
            <input type="text" name="Fat_g" value="">

            <label for="salt_g"> Salt (g):</label>
            <input type="text" name="Salt_g" value="">

            <label for="sodium_mg"> Sodium (mg):</label>
            <input type="text" name="Sodium_mg" value="">

            <label for="carbs_g"> Carbs (g):</label>
            <input type="text" name="Carbs_g" value="">

            <label for="protein_g"> Protein (g):</label>
            <input type="text" name="Protein_g" value="">

            <label for="calories_kcal"> Calories (kcal):</label>
            <input type="text" name="Calories_kcal" value="">


            <button type="submit">Update</button>
        </form>

        <?php


}
