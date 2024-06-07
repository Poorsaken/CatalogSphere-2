
<?php
session_start();
include('./routes/router.php');


        
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
?>


   
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <!-- <link rel="stylesheet" href  = "./css/allproduct.css" />  -->
            <link rel="stylesheet" href  = "./css/allproducts.css" /> 
        </head>
        <body>

        <div class="products_container">
            <div class="left_container">
                <?php include('./navigation/usersnavigation.php'); ?>
            </div>


 
 <div class="div_right">
     <div class="header_buy">
                    <div class="Welcome_to">Your Pending Orders</div>
                        <div class="buypro">
                    
                </div>
                    
                </div>
              
                 <div class="product-list">
               
                <tbody>
                    <?php
                    include('./classes/Crud.php');
                    include('./Classes/Database.php');
            
                    $DB = new Database(); // instantiation
                    $DB->connectDB();
                    // Create an instance of your class
                    $obj = new Crud();
                    // Call the function to get all products
                    $products = $obj->GetAllBuyProducts();

                    // Display the products
                   foreach ($products as $index => $product) {

                        echo "<div class='card'>";
                        echo "<div class='header-container'>";
                        echo "<div class='left-container'>";
                        // Display product image
                        $imagePath = "uploaded_image/{$product['product_image']}";
                        echo "<div class='card-image'><img src='{$imagePath}' alt='{$product['model']}' style='width: 100%; height: 100%; object-fit: cover;'></div>";

                        echo "</div>";
                        echo "<div class='right-container'>";
                        echo "<div class='card-model'><strong>{$product['model']}</strong></div>";
                        echo "<div class='card-brand'>{$product['brand']}</div>";
                        echo "<div class='card-price'>{$product['price']}</div>";
                        echo "<p>Color: {$product['color']}</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='specs_container'>";

                        echo "<div class='specss'>";
                        echo "<p class='card-enc'>{$product['chipset']}</p>";
                        echo "<p class='card-enc'>{$product['ram']}</p>";
                        echo "<p class='card-enc'>{$product['storage']}</p>";
                        echo "<p class='card-enc'>{$product['display_size']}</p>";
                        echo "<p class='card-enc'>{$product['resolution']}</p>";
                        echo "</div>";

                        echo "<div class='specss'>";
                        echo "<p class='card-enc'>{$product['refresh_rate']}</p>";
                        echo "<p class='card-enc'>{$product['connectivity']}</p>";
                        echo "<p class='card-enc'>{$product['price']}</p>";
                        echo "<p class='card-enc'>{$product['os']}</p>";
                        echo "</div>";

                        echo "</div>";
                        echo "<div class='title_description'>Description: </div>";
                        echo "<p class='card-description'>{$product['product_desc']}</p>";
                        echo "<div class='buy_container'>";
                        // Form starts here
                     
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
             

      
            </div>
            </div>
            
        
        </body>
        </html>


    <?php

}
else {

    header("Location: loginform.php");
    exit();
}

?>









