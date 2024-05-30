<?php
session_start();
include('./routes/router.php');

if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
    if(isset($_POST['update_product_id'])) {
        $product_id = $_POST['update_product_id'];

        include('./classes/Crud.php');
        include('./Classes/Database.php');

        $DB = new Database();
        $DB->connectDB();

        $obj = new Crud();
        $product = $obj->GetProductById($product_id);

        // Now $product variable contains the details of the selected product
        // You can use these details to populate the form fields
    } else {
        // Handle the case where update_product_id is not set
    }
} else {
    header("Location: loginform.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
</head>
<body>

<?php
// Check if $product variable is set and not empty before populating form fields
if(isset($product) && !empty($product)) {
?>
    <h2>Update Product</h2>


    <form action="updateproductfunction.php" method="POST">
        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
        
        <label for="brand">Brand:</label>
        <input type="text" id="brand" name="brand" value="<?php echo $product['brand']; ?>"><br>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" value="<?php echo $product['model']; ?>"><br>

        <label for="chipset">Chipset:</label>
        <input type="text" id="chipset" name="chipset" value="<?php echo $product['chipset']; ?>"><br>

        <label for="ram">RAM:</label>
        <input type="text" id="ram" name="ram" value="<?php echo $product['ram']; ?>"><br>

        <label for="storage">Storage:</label>
        <input type="text" id="storage" name="storage" value="<?php echo $product['storage']; ?>"><br>

        <label for="display_size">Display Size:</label>
        <input type="text" id="display_size" name="display_size" value="<?php echo $product['display_size']; ?>"><br>

        <label for="resolution">Resolution:</label>
        <input type="text" id="resolution" name="resolution" value="<?php echo $product['resolution']; ?>"><br>

        <label for="refresh_rate">Refresh Rate:</label>
        <input type="text" id="refresh_rate" name="refresh_rate" value="<?php echo $product['refresh_rate']; ?>"><br>

        <label for="connectivity">Connectivity:</label>
        <input type="text" id="connectivity" name="connectivity" value="<?php echo $product['connectivity']; ?>"><br>

        <label for="usb">USB:</label>
        <input type="text" id="usb" name="usb" value="<?php echo $product['usb']; ?>"><br>

        <label for="battery">Battery:</label>
        <input type="text" id="battery" name="battery" value="<?php echo $product['battery']; ?>"><br>

        <label for="os">OS:</label>
        <input type="text" id="os" name="os" value="<?php echo $product['os']; ?>"><br>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="<?php echo $product['price']; ?>"><br>

        <label for="color">Color:</label>
        <input type="text" id="color" name="color" value="<?php echo $product['color']; ?>"><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description"><?php echo $product['product_desc']; ?></textarea><br>

        <button type="submit">Update Product</button>
    </form>
<?php
} else {
    echo "Error: Product details not found.";
}
?>

</body>
</html>
