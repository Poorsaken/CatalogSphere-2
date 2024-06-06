<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/allproducts.css" />  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .products_container {
            display: flex;
        }

        .left_container {
            width: 20%;
        }

        .div_right {
            width: 80%;
            padding: 20px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .product-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: calc(33.333% - 20px);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .product-card h2 {
            margin-top: 0;
        }

        .product-card .product-info {
            margin-bottom: 10px;
        }

        .product-card .product-info span {
            display: block;
        }

        .product-card form {
            margin-top: 10px;
        }

        .product-card form input[type="submit"] {
            padding: 5px 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="products_container">
    <div class="left_container">
        <?php include('./navigation/navigation.php'); ?>
    </div>

    <div class="div_right">
        <div class="">
            <h1>Customer Order</h1>
        </div>
        <div class="card-container">
            <?php
            include('./classes/Crud.php');
            include('./Classes/Database.php');

            $DB = new Database();
            $DB->connectDB();

            $obj = new Crud();
            $products = $obj->GetAllBuyProducts();

            // Handle delete request
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_product_id'])) {
                $obj->ApproveProduct($_POST['delete_product_id']);
            }

            foreach ($products as $index => $product) {
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
                    echo "<form action='' method='POST'>";
                    echo "<input type='hidden' name='product_id' value='" . htmlspecialchars($product['id']) . "'>"; // Include product ID
                    echo "<input type='hidden' name='model' value='" . htmlspecialchars($product['model']) . "'>";
                    echo "<input type='hidden' name='brand' value='" . htmlspecialchars($product['brand']) . "'>";
                    echo "<input type='hidden' name='price' value='" . htmlspecialchars($product['price']) . "'>";
                    echo "<input type='hidden' name='color' value='" . htmlspecialchars($product['color']) . "'>";
                    echo "<input type='hidden' name='description' value='" . htmlspecialchars($product['product_desc']) . "'>";
                 
                    echo "</form>";
                    echo "</div>";
                    echo "</div>";
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>
