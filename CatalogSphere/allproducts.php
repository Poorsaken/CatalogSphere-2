<!DOCTYPE html>
<html>
<head>
    <title>Display Products</title>

    <link rel="stylesheet" href="./css/allproducts.css"/>
</head>
<body>

<div class="products-container">


<table>
    <thead>
        <tr>
            <th>Brand</th>
            <th>Model</th>
            <th>Specs</th>
            <th>Price</th>
            <th>Color</th>
        </tr>
    </thead>
    <tbody>
    <?php
        
        include('./classes/Crud.php');
        include('./Classes/Database.php');

        global $DB;
        global $con;
        $DB = new Database(); //instantation
        $DB->connectDB();

        // Create an instance of your class
        $obj = new Crud();

        // Call the function to get all products
        $products = $obj->GetAllProducts();

        // Display the products
        foreach ($products as $product) {
            echo "<tr>";
            echo "<td>{$product['brand']}</td>";
            echo "<td>{$product['model']}</td>";
            echo "<td>{$product['chipset']}</td>";
            echo "<td>{$product['ram']}</td>";
            echo "<td>{$product['storage']}</td>";
            echo "<td>{$product['display_size']}</td>";
            echo "<td>{$product['resolution']}</td>";
            echo "<td>{$product['usb']}</td>";
            echo "<td>{$product['battery']}</td>";
            echo "<td>{$product['os']}</td>";
            echo "<td>{$product['price']}</td>";
            echo "<td>{$product['color']}</td>";
            echo "<td>{$product['product_desc']}</td>";
            echo "</tr>";
        }
    ?>
    </tbody>
</table>
</div>





</body>
</html>
