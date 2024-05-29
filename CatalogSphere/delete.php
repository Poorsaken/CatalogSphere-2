<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/delete.css"/>
</head>
<body>

<div class="products-container">
    <div class="left-container">
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
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Refresh Rate</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Connectivity</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">USB</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Battery</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">OS</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Price</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Color</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Description</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Action</th>
            </tr>
        </thead>
        <tbody>
          <?php
            include('./classes/Crud.php');
            include('./Classes/Database.php');

            $DB = new Database();
            $DB->connectDB();

            $obj = new Crud();

            // Handle delete request
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_product_id'])) {
                $obj->deleteProduct($_POST['delete_product_id']);
            }

            $products = $obj->GetAllProducts();

            foreach ($products as $index => $product) {
                $rowStyle = $index % 2 == 0 ? 'background-color: #f9f9f9;' : '';
                echo "<tr style='{$rowStyle}' data-product-id='{$product['id']}'>";
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
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['product_desc']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>";
                echo "<form method='POST' action=''>";
                echo "<input type='hidden' name='delete_product_id' value='{$product['id']}'>";
                echo "<input type='submit' value='Delete' style='padding: 5px 10px;'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
          ?>
        </tbody>
        </table>
    </div>
</div>

</body>
</html>
