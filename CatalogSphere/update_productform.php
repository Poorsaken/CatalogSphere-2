<?php
// Include necessary files
include('./classes/Crud.php');
include('./classes/database.php');

// Create an instance of the Crud class
$Profile = new Crud();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Collect form data
    $id = $_POST['update_product_id']; // Retrieve product ID from hidden input
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

    $success = $Profile->updateProfile($id, $brand, $model, $chipset, $ram, $storage, $display_size, $resolution, $refresh_rate, $connectivity, $usb, $battery, $os, $price, $color, $description);

    if ($success) {
        echo "Record updated successfully";
    } else {
        echo "Failed to update record";
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $row = $Profile->getProfileById($id);
      if ($row) {
        // Display the fetched record
        echo "ID: " . $row['brand'] . "<br>";
        echo "Name: " . $row['model'] . "<br>";
        echo "Address: " . $row['chipset'] . "<br>";
        // Continue displaying other fields as needed
    } else {
        echo "Record not found";
    }
  
    
} else {
    // Initialize $row with empty values if no id is provided
    $row = array(
        'brand' => '',
        'model' => '',
        'chipset' => '',
        'ram' => '',
        'storage' => '',
        'display_size' => '',
        'resolution' => '',
        'refresh_rate' => '',
        'connectivity' => '',
        'usb' => '',
        'battery' => '',
        'os' => '',
        'price' => '',
        'color' => '',
        'description' => ''
    );
}
?>

<div class="update_product_forms">
    <form method="POST" action="update_productform.php">
        
        <input type="hidden" name="update_product_id" value="<?php echo isset($_GET['id']) ? htmlspecialchars($_GET['id']) : (isset($_POST['update_product_id']) ? htmlspecialchars($_POST['update_product_id']) :''); ?>">
        Brand: <input type="text" name="brand" value="<?php echo htmlspecialchars($row['brand']); ?>"><br>
        Model: <input type="text" name="model" value="<?php echo htmlspecialchars($row['model']); ?>"><br>
        Chipset: <input type="text" name="chipset" value="<?php echo htmlspecialchars($row['chipset']); ?>"><br>
        Ram: <input type="text" name="ram" value="<?php echo htmlspecialchars($row['ram']); ?>"><br>
        Storage: <input type="text" name="storage" value="<?php echo htmlspecialchars($row['storage']); ?>"><br>
        Display Size: <input type="text" name="display_size" value="<?php echo htmlspecialchars($row['display_size']); ?>"><br>
        Resolution: <input type="text" name="resolution" value="<?php echo htmlspecialchars($row['resolution']); ?>"><br>
        Refresh Rate: <input type="text" name="refresh_rate" value="<?php echo htmlspecialchars($row['refresh_rate']); ?>"><br>
        Connectivity: <input type="text" name="connectivity" value="<?php echo htmlspecialchars($row['connectivity']); ?>"><br>
        USB: <input type="text" name="usb" value="<?php echo htmlspecialchars($row['usb']); ?>"><br>
        Battery: <input type="text" name="battery" value="<?php echo htmlspecialchars($row['battery']); ?>"><br>
        Os: <input type="text" name="os" value="<?php echo htmlspecialchars($row['os']); ?>"><br>
        Price: <input type="text" name="price" value="<?php echo htmlspecialchars($row['price']); ?>"><br>
        Color: <input type="text" name="color" value="<?php echo htmlspecialchars($row['color']); ?>"><br>
        Description: <input type="text" name="description" value="<?php echo htmlspecialchars($row['description']); ?>"><br>
        <button type="submit" name="update">Update Product</button>
    </form>
</div>
