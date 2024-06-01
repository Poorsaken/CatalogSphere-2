
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
            <link rel="stylesheet" href  = "./css/allproduct.css" /> 
        </head>
        <body>

        <div class="products_container">
            <div class="left_container">
                <?php include('./navigation/navigation.php'); ?>
            </div>

    <div class="div_right">
        <div class="table-container">
            <table class="product-table">
                <thead>
                    <tr>
                        <th>Picture</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Chipset</th>
                        <th>RAM</th>
                        <th>Storage</th>
                        <th>Display Size</th>
                        <th>Resolution</th>
                        <th>Refresh Rate</th>
                        <th>Connectivity</th>
                        <th>USB</th>
                        <th>Battery</th>
                        <th>OS</th>
                        <th>Price</th>
                        <th>Color</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('./classes/Crud.php');
                    include('./Classes/Database.php');

                    $DB = new Database();
                    $DB->connectDB();

                    $obj = new Crud();
                    $products = $obj->GetAllProducts();

                    foreach ($products as $index => $product) {
                $rowStyle = $index % 2 == 0 ? 'background-color: #f9f9f9;' : '';
                echo "<tr style='{$rowStyle}' data-product-id='{$product['id']}'>";
                //newly added 
                $imagePath = "uploaded_image/{$product['product_image']}";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'><img src='{$imagePath}' alt='{$product['model']}' style='width: 100px; height: auto;'></td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['brand']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['model']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['chipset']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['ram']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['storage']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['display_size']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['resolution']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['refresh_rate']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['connectivity']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['usb']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['battery']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['os']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['price']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['color']}</td>";
                echo "<td class='description' style='padding: 10px; border: 1px solid #ddd;'>{$product['product_desc']}</td>";

              
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

}
else {

    header("Location: loginform.php");
    exit();
}

?>





