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
                    $products = $obj->GetAllProducts();

                    foreach ($products as $product) {
                        echo "<tr>";
                        echo "<td>{$product['brand']}</td>";
                        echo "<td>{$product['model']}</td>";
                        echo "<td>{$product['chipset']}</td>";
                        echo "<td>{$product['ram']}</td>";
                        echo "<td>{$product['storage']}</td>";
                        echo "<td>{$product['display_size']}</td>";
                        echo "<td>{$product['resolution']}</td>";
                        echo "<td>{$product['refresh_rate']}</td>";
                        echo "<td>{$product['connectivity']}</td>";
                        echo "<td>{$product['usb']}</td>";
                        echo "<td>{$product['battery']}</td>";
                        echo "<td>{$product['os']}</td>";
                        echo "<td>{$product['price']}</td>";
                        echo "<td>{$product['color']}</td>";
                        echo "<td class='description'>{$product['product_desc']}</td>";
                        echo "<td>";
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
