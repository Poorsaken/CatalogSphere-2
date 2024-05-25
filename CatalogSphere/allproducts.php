<!DOCTYPE html>
<html>
<head>
    <title>Display Products</title>
    <link rel="stylesheet" href="./css/Allproducts.css">
</head>
<body>




<div class="products-container">


<div class="left_container">


    <?php include('./navigation/navigation.php'); ?>
</div>


   <div class="div_right">
        <table class="product-table">
            <thead>
                <tr>
                    <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Brand</th>
                    <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Model</th>
                    <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Chipset</th>
                    <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">RAM</th>
                    <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Storage</th>
                    <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Display Size</th>
                    <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Resolution</th>
                    <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">USB</th>
                    <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Battery</th>
                    <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">OS</th>
                    <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Price</th>
                    <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Color</th>
                    <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('./classes/Crud.php');
                include('./Classes/Database.php');

                $DB = new Database(); // instantiation
                $DB->connectDB();

                // Create an instance of your class
                $obj = new Crud();

                // Call the function to get all products
                $products = $obj->GetAllProducts();

                // Display the products
                foreach ($products as $index => $product) {
                    $rowStyle = $index % 2 == 0 ? 'background-color: #f9f9f9;' : '';
                    echo "<tr style='{$rowStyle}'>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['brand']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['model']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['chipset']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['ram']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['storage']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['display_size']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['resolution']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['usb']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['battery']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['os']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['price']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['color']}</td>";
                    echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['product_desc']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
