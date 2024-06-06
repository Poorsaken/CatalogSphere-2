<?php
session_start();
include('./routes/router.php');

if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/updateproduct.css">
</head>
<body>

<div class="products_container">
    <div class="left_container">
        <?php include('./navigation/navigation.php'); ?>
    </div>

    <div class="div_right">
        <div class="title-header">
                <h>Update Products</h>
               </div>
        <div class="table-container">
           
                <tbody>
                    <?php
                    include('./classes/Crud.php');
                    include('./Classes/Database.php');

                    $DB = new Database();
                    $DB->connectDB();

                    $obj = new Crud();
                    $products = $obj-> GetAllProducts() ;
 
                   foreach ($products as $product) {


     echo "<div class='card'>";
                    echo "<div class='header-container'>";
                    echo "<div class='left-container'>";
                    //newly added 
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
                    echo "<form action='update_productform.php' method='POST'>";
                    echo "<input type='hidden' name='product_id' value='" . htmlspecialchars($product['id']) . "'>"; // Include product ID
                    echo "<input type='hidden' name='model' value='" . htmlspecialchars($product['model']) . "'>";
                    echo "<input type='hidden' name='brand' value='" . htmlspecialchars($product['brand']) . "'>";
                    echo "<input type='hidden' name='price' value='" . htmlspecialchars($product['price']) . "'>";
                    echo "<input type='hidden' name='color' value='" . htmlspecialchars($product['color']) . "'>";
                    echo "<input type='hidden' name='description' value='" . htmlspecialchars($product['product_desc']) . "'>";
                    echo "<input type='hidden' name='update_product_id' value='" . $product['id'] . "'>"; // Assuming 'id' is the primary key of your product table
                    echo "<button type='submit' style='padding: 5px 10px;'>Update</button>";
                    echo "</form>";
                    echo "</div>";
                    echo "</div>";
}

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



</body>
</html>

<?php
} else {
    header("Location: loginform.php");
    exit();
}
?>
