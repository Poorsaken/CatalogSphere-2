<?php
// Include necessary files
include('./classes/Crud.php');
include('./classes/database.php');

// Create an instance of the Crud class
$Profile = new Crud();


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])){
    
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

    $success - $Profile->updateProfile($brand, $model, $chipset, $ram, $storage, $display_size, $resolution, $refresh_rate, $connectivity, $usb, $battery, $os, $price, $color, $description,);

    if ($success){

        echo "Record updated successfully";

    }else {

        echo "Failed to update record";
    }
}


if(isset($_GET['brand'])){

    $brand = $_GET['brand'];
    //brand lang di anay gin butang ko for testing lang//
    $row = $Profile ->updateProfile($brand);

}
?>

<div class="update_product_forms">
    <form method="POST" action="update_productform.php">
        Brand: <input type="text" name="brand" value="<?php echo $row['brand'];  ?>"><br>
        Model: <input type="text" name="model" value="<?php echo $row['model']; ?>"><br>
        Chipset: <input type="text" name="chipset" value="<?php echo $row['chipset']; ?>"><br>
        Ram: <input type="text" name="ram" value="<?php echo $row['ram']; ?>"><br>
        Storage: <input type="text" name="storage" value="<?php echo $row['storage']; ?>"><br>
        Display Size: <input type="text" name="display_size" value="<?php echo $row['display_size']; ?>"><br>
        Resolution: <input type="text" name="resolution" value="<?php echo $row['resolution']; ?>"><br>
        Refresh Rate: <input type="text" name="refresh_rate" value="<?php echo $row['refresh_rate']; ?>"><br>
        Connectivity: <input type="text" name="connectivity" value="<?php echo $row['connectivity']; ?>"><br>
        USB: <input type="text" name="usb" value="<?php echo $row['usb']; ?>"><br>
        Battery: <input type="text" name="battery" value="<?php echo $row['battery']; ?>"><br>
        Os: <input type="text" name="os" value="<?php echo $row['os']; ?>"><br>
        Price: <input type="text" name="price" value="<?php echo $row['price']; ?>"><br>
        Color: <input type="text" name="color" value="<?php echo $row['color']; ?>"><br>
        Description: <input type="text" name="description" value="<?php echo $row['description']; ?>"><br>
        <button type="submit" name="update">Update Product</button>
    </form>
</div>
