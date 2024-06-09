<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/buyproducts.css"/>
    <link rel="stylesheet" href="./css/usercards.css"/>
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
                foreach ($products as $product) {
                    echo "<div class='carduser-container'>";
                    echo "<div class='image-wrapper'>";
                    $imagePath = "uploaded_image/{$product['product_image']}";
                    echo "<img src='{$imagePath}' class='img' alt='{$product['model']}'>";
                    echo "<div class='information'>";
                    echo "<div class='model'>{$product['brand']} {$product['model']}</div>";
                    echo "<div class='brand'>{$product['brand']}</div>";
                    echo "<div class='color'>{$product['color']}</div>";
                    echo"<div class=''/>";
                    
                    
                    echo "<form action='' method='POST'>";
                     echo "<div class='price'>PHP {$product['price']}</div>";
                     echo "<div class='space'></div>";
                    echo "<input type='hidden' name='product_id' value='" . htmlspecialchars($product['id']) . "'>"; // Include product ID
                    echo "<button type='submit' name='buy_product' class='buy' id='btn'>Buy Product</button>";
                    echo "</form>";
                                
                        
                    echo "</div>";
                    echo "</div>";

                     
                  
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "No products available.";
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>
