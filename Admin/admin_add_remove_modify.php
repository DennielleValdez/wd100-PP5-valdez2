<?php
include "skincare_pp5_db.php";

$id = $_POST['id'];
if (isset($_POST['DELETE'])) {
    
    echo "$id";

    $productDelete = "DELETE FROM all_products_tbl WHERE Product_ID = $id";
    mysqli_query($conn, $productDelete);
    header("Location: admin_add_remove.php");
}

if (isset($_POST['UPDATE'])) {

    $brand = $_POST['brand'];
    $category = $_POST['category'];
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    echo "$id $brand $category $name $desc $price $stock";

    $productDelete = "UPDATE all_products_tbl SET Product_brand = '$brand', Product_category = '$category', Product_name = '$name', Product_description = '$desc', Product_price = '$price', Product_stock = '$stock' WHERE Product_id = $id";
    mysqli_query($conn, $productDelete);
    header("Location: admin_add_remove.php");
}

?>