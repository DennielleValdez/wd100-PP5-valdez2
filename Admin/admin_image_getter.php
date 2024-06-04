<?php
include "skincare_pp5_db.php";

$brand = $_POST['brand'];
$category = $_POST["category"];
$name = $_POST["name"];
$desc = $_POST["desc"];
$price = $_POST["price"];
$stock = $_POST["stock"];
$directory = "../Admin/img/";
$image = $directory . basename($_FILES['image']['name']);


move_uploaded_file($_FILES['image']['tmp_name'], $image);
$storeProductStmt = "INSERT INTO all_products_tbl (Product_brand, Product_category, Product_name, Product_image, Product_description, Product_price, Product_stock) VALUES ('$brand', '$category', '$name', '$image', '$desc', '$price', '$stock')";
mysqli_query($conn, $storeProductStmt);
// echo "$brand <br> $category <br> $name <br> $desc <br> $price <br> $stock <br> $image";
header("Location: admin_add_remove.php");

?>