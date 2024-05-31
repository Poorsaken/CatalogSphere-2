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
    <link rel="stylesheet" href="./css/updateproducts.css">
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
                    $products = $obj-> GetAllProducts() ;

                   foreach ($products as $product) {
    echo "<tr>";
    echo "<td style='border: 1px solid black; padding: 5px;'>{$product['brand']}</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>{$product['model']}</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>{$product['chipset']}</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>{$product['ram']}</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>{$product['storage']}</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>{$product['display_size']}</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>{$product['resolution']}</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>{$product['refresh_rate']}</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>{$product['connectivity']}</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>{$product['usb']}</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>{$product['battery']}</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>{$product['os']}</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>{$product['price']}</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>{$product['color']}</td>";
    echo "<td style='border: 1px solid black; padding: 5px;' class='description'>{$product['product_desc']}</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>";
    echo "<form method='POST' action='update_productform.php'>";
    echo "<input type='hidden' name='update_product_id' value='" . $product['id'] . "'>"; // Assuming 'id' is the primary key of your product table
    echo "<button type='submit' style='padding: 5px 10px;'>Update</button>";
    echo "</form>";
    echo "</td>";
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

<?php
} else {
    header("Location: loginform.php");
    exit();
}
?>
