<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/allproduct.css" /> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="products_container">
    <div class="left_container">
        <?php include('./navigation/navigation.php'); ?>
    </div>

    <div class="div_right">
        <div class="table-container">
            <table class="product-table">
                <div class="">
                    <h1>Customer Order</h1>
                </div>
                <thead>
                    <tr>
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
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('./classes/Crud.php');
                    include('./Classes/Database.php');

                    $DB = new Database();
                    $DB->connectDB();

                    $obj = new Crud();
                    $products = $obj->GetAllBuyProducts();

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
                        echo "<td class='description' style='padding: 10px; border: 1px solid #ddd;'>{$product['status']}</td>";
                        echo "<td style='padding: 10px; border: 1px solid #ddd;'>
                                <button class='approve-btn' data-product-id='{$product['id']}'>Approve</button>
                                <button class='reject-btn' data-product-id='{$product['id']}'>Reject</button>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</body>
</html>
