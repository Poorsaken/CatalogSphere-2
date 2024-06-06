<?php
session_start();
include('./routes/router.php');

if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
        $product_id = $_POST['product_id'];

        // Collect updated product details from the form
        $brand = $_POST['brand'];
        $model = $_POST['model'];
        $chipset = $_POST['chipset'];
        $ram = $_POST['ram'];
        $storage = $_POST['storage'];
        $display_size = $_POST['display_size'];
        $resolution = $_POST['resolution'];
        $refresh_rate = $_POST['refresh_rate'];
        $connectivity = $_POST['connectivity'];
        $usb = $_POST['usb'];
        $battery = $_POST['battery'];
        $os = $_POST['os'];
        $price = $_POST['price'];
        $color = $_POST['color'];
        $description = $_POST['description'];

        include('./classes/Crud.php');
        include('./Classes/Database.php');

        $DB = new Database();
        $DB->connectDB();

        $obj = new Crud();
        $result = $obj->UpdateProduct($product_id, $brand, $model, $chipset, $ram, $storage, $display_size, $resolution, $refresh_rate, $connectivity, $usb, $battery, $os, $price, $color, $description);

        if($result) {
            echo "Product updated successfully.";
            // Redirect user to a page indicating success
             header("Location: updateproducts.php");
        } else {
            echo "Error updating product.";
            // Redirect user to a page indicating error
        }
    } else {
        // Handle invalid request method or missing product_id
        echo "Invalid request.";
    }
} else {
    header("Location: loginform.php");
    exit();
}
?>
