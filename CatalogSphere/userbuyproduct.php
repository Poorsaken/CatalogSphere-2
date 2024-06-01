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
    <link rel="stylesheet" href="./css/buyproduct.css"/>
</head>
<body>

<div class="products_container">
    <div class="left_container">
        <?php include('./navigation/usersnavigation.php'); ?>
    </div>

    <div class="div_right">
        <div class="header_buy">
            <div class="Welcome_to">Welcome to Catalog Sphere!</div>
            <div class="buypro">
                <p>Buy Product</p>
            </div>
        </div>

        <div class="card-container">
            <?php
            include('./classes/Database.php');
            include('./classes/Crud.php');
            $DB = new Database();
            $DB->connectDB();
            $obj = new Crud();
            $products = $obj->BuyProducts();

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'])) {
                $obj->InsertBuyProduct($_POST['product_id']);
            }

            if ($products) {
                echo "<div class='container'>";
                foreach ($products as $product) {
                    echo "<div class='card'>";
                    echo "<div class='header-container'>";
                    echo "<div class='left-container'>";
                    //newly added 
                    $imagePath = "uploaded_image/{$product['product_image']}";
                    echo "<div class='card-image'><img src='{$imagePath}' alt='{$product['model']}' style='width: 100px; height: auto;'></div>";
                    echo "</div>";
                    echo "<div class='right-container'>";
                    echo "<div class='card-model'><strong>{$product['model']}</strong></div>";
                    echo "<div class='card-brand'>{$product['brand']}</div>";
                    echo "<div class='card-price'>{$product['price']}</div>";
                    echo "<p>Color: {$product['color']}</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='title_description'>Description: </div>";
                    echo "<p class='card-description'>{$product['product_desc']}</p>";
                    echo "<div class='buy_container'>";
                    // Form starts here
                    echo "<form action='' method='POST'>";
                    echo "<input type='hidden' name='product_id' value='" . htmlspecialchars($product['id']) . "'>"; // Include product ID
                    echo "<input type='hidden' name='model' value='" . htmlspecialchars($product['model']) . "'>";
                    echo "<input type='hidden' name='brand' value='" . htmlspecialchars($product['brand']) . "'>";
                    echo "<input type='hidden' name='price' value='" . htmlspecialchars($product['price']) . "'>";
                    echo "<input type='hidden' name='color' value='" . htmlspecialchars($product['color']) . "'>";
                    echo "<input type='hidden' name='description' value='" . htmlspecialchars($product['product_desc']) . "'>";
                    echo "<button type='submit' name='buy_product' class='buy_btn' id='btn'>Buy Product</button>";
                    echo "</form>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";
            } else {
                echo "No products available.";
            }
            ?>
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
