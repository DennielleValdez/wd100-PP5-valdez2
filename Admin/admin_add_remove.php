<?php

session_start();
include "admin.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin product page</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php
include "admin_navbar.php";
?>

    <div class="container main-container">
    <div class="container_fluid">
        <div class="container mt-5">
            <div class="card d-flex justify-content-center align-items-center">
                <div class="card-header">
                    <h1 class="text-center mt-3">Product Import</h1>
                    <hr>
                    <br>
                    <div class="card-body">
                        <div class="row">

                            <form action="admin_image_getter.php" method="POST" enctype = "multipart/form-data">
                                <div class="row">

                                    <div class="col-md-12">
                                        <label for="brand">Brand:</label><br>
                                        
                                        <select class="form-select" type="text" name="brand" required><br>
                                            <option selected>Select brand</option>
                                            <option value="Olay">Olay</option>
                                            <option value="Estee Lauder">Estee Lauder</option>
                                            <option value="Dior">Dior</option>
                                        </select>
                                        <br>
                                    </div> 

                                    <div class="col-md-12">
                                        <label for="category">Category:</label><br>
                                        
                                        <select class="form-select" type="text" name="category" required><br>
                                            <option selected>Select brand</option>
                                            <option value="cat1">cat1 - Cleansers</option>
                                            <option value="cat2">cat2 - Moisturizers</option>
                                            <option value="cat3">cat3 - Serums</option>
                                            <option value="cat4">cat4 - Specialty Products</option>
                                        </select>
                                        <br>
                                    </div> 

                                    <div class="col-md-12">
                                        <label for="name">Product Name:</label><br>
                                        <input class="form-control" type="text" name="name" required><br>
                                    </div> 

                                    <div class="col-md-12">
                                        <label for="price">Price:</label><br>
                                        <input class="form-control" type="number" step="0.01" name="price" required><br>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="stock">Stock:</label><br>
                                        <input class="form-control" type="number" name="stock" required><br>
                                    </div>
                                    
                                    <!-- IMAGE -->
                                    <div class="col-md-12">
                                        <label for="formFileMultiple" class="form-label">Image</label>
                                        <input class="form-control" type="file" name="image" multiple>
                                        <br>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                        <textarea class="form-control" name="desc" rows="3"></textarea>
                                        <br>
                                    </div>
                                    
                                    <hr><br>
                                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                                        <input type="submit" value="Add Product">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
<br><hr>
    <!-- PAGINATION -->
    <div class="pagination mt-5 justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>

    <?php
        include "skincare_pp5_db.php";
    ?>
    
    <div class="container">
        <div class="row">
            <?php
            $productStmt = "SELECT * FROM all_products_tbl";
            $productQuery = mysqli_query($conn, $productStmt);
            while ($productShow = mysqli_fetch_assoc($productQuery)){
                echo "
                   
                    <div class='col-4 mt-5'>
                        <form action='admin_add_remove_modify.php' method='POST' class='product-form'>
                        
                        <div class='card-image d-flex justify-content-center align-items-center'>
                            <img src='$productShow[Product_image]' class='w-70 image'>
                        </div>

                        <div class='card-details'>

                            <input type='hidden' name='id' value='$productShow[Product_ID]'>

                            <div class='input-group input-group-sm mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-sm'>Brand</span>
                                <input type='text' name='brand' value='$productShow[Product_brand]'>
                            </div>
                            
                            <div class='input-group input-group-sm mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-sm'>Category</span>
                                <input type='text' name='category' value='$productShow[Product_category]'>
                            </div>

                            <div class='input-group input-group-sm mb-3'>
                                <span class='input-group-text name-box' id='inputGroup-sizing-sm'>Name</span>
                                <textarea class='form-control name' name='name' value='$productShow[Product_name]' rows='2'>$productShow[Product_name]</textarea>
                             </div>

                            <div class='input-group input-group-sm mb-3'>
                                <span class='input-group-text description-box' id='inputGroup-sizing-sm'>Description</span>
                                <textarea class='form-control desc' name='description' rows='3'>$productShow[Product_description]</textarea>
                             </div>

                             <div class='input-group input-group-sm mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-sm'>Price</span>
                                <input type='text' name='price' value='$ $productShow[Product_price]'>
                            </div>

                            <div class='input-group input-group-sm mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-sm'>stock</span>
                                <input type='number' name='stock' value='$productShow[Product_stock]'>
                            </div>
                        </div>

                        <div class='card-footer d-flex justify-content-center align-items-center'>
                            <input type='submit' value='Delete' name ='DELETE' class='deleteBtn'>

                            <input type='submit' value='Update' name ='UPDATE' class='updateBtn'>
                        </div>
                        </form>
                    </div>
                
                ";


            
            }
            ?>
        </div>
    </div>
    </div>
</body>

<!-- BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- <script src="admin.js"></script> -->


</html>