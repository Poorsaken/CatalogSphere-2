<?php


class Crud{

    
    //AMO NI SA ANG PA DISPLAY ITEMS
 function GetAllProducts(){
    global $con;
    try {
        $sql = "SELECT * FROM `tbl_products` ORDER BY id";
        $stmt = $con->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


function GetAllDeletedProducts(){

    global $con;
    try {

        $sql= "SELECT * FROM `tbl_deletedproducts` ORDER BY id";
        $stmt = $con ->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}



function getProductDetailsByBrand($brand, $model) {
    global $con; // Assuming $con is your database connection object
    $sql = "SELECT * FROM `tbl_products` WHERE brand = :brand AND model = :model";
    
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $brand, $model); // Assuming both brand and model are strings
    
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // Fetch the row as an associative array
        $row = $result->fetch_assoc();
        return $row;
    } else {
        // No matching row found
        return null;
    }
}









function getProfileById($id){
  global $con;
  try {
      $sql = "SELECT * FROM `tbl_student_records` WHERE `id` = :id";
      $stmt = $con->prepare($sql);
      $stmt->bindParam(':id', $id);
      $stmt->execute();
      return $stmt->fetch(PDO::FETCH_ASSOC); 
  } catch(PDOException $e){
      echo "Error fetching record: " . $e->getMessage();
      return false; 
  }
}




function updateProfile($product_id, $brand, $model, $chipset, $ram, $storage, $display_size, $resolution, $refresh_rate, $connectivity, $usb, $battery, $os, $price, $color, $description){
    global $con;
    try {
        $sql = "UPDATE `tbl_products` 
                SET `brand` = :brand, 
                    `model` = :model, 
                    `chipset` = :chipset, 
                    `ram` = :ram, 
                    `storage` = :storage, 
                    `display_size` = :display_size, 
                    `resolution` = :resolution, 
                    `refresh_rate` = :refresh_rate, 
                    `connectivity` = :connectivity, 
                    `usb` = :usb, 
                    `battery` = :battery, 
                    `os` = :os, 
                    `price` = :price, 
                    `color` = :color, 
                    `description` = :description
                WHERE `product_id` = :product_id";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->bindParam(':brand', $brand);
        $stmt->bindParam(':model', $model);
        $stmt->bindParam(':chipset', $chipset);
        $stmt->bindParam(':ram', $ram);
        $stmt->bindParam(':storage', $storage);
        $stmt->bindParam(':display_size', $display_size);
        $stmt->bindParam(':resolution', $resolution);
        $stmt->bindParam(':refresh_rate', $refresh_rate);
        $stmt->bindParam(':connectivity', $connectivity);
        $stmt->bindParam(':usb', $usb);
        $stmt->bindParam(':battery', $battery);
        $stmt->bindParam(':os', $os);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':color', $color);
        $stmt->bindParam(':description', $description);
        $stmt->execute();
        return true; 
    } catch(PDOException $e){
        echo "Error updating record: " . $e->getMessage();
        return false; 
    }
}






















    function InsertProduct($req){
    
    global $con;
    $brand = $req['brand'];
    $model = $req['model'];
    $chipset = $req['chipset'];
    $ram = $req['ram'];
    $storage = $req['storage'];
    $display_size = $req['display_size'];
    $resolution = $req['resolution'];
    $refresh_rate = $req['refresh_rate']; // Make sure to include this field
    $connectivity = $req['connectivity']; // Make sure to include this field
    $usb = $req['usb'];
    $battery = $req['battery'];
    $os = $req['os'];
    $price = $req['price'];
    $color = $req['color'];
    $product_desc = $req['product_desc'];

    // Debugging output to check if values are being received
    // echo "<pre>";
    // print_r($req);
    // echo "</pre>";

    try {
        $sql = "INSERT INTO tbl_products
         (brand,
         model,
         chipset,
         ram,
         storage,
         display_size,
         resolution,
         refresh_rate,
         connectivity,
         usb,
         battery,
         os,
         price,
         color,
         product_desc)
          VALUES 
          ('$brand',
          '$model',
          '$chipset',
          '$ram',
          '$storage',
          '$display_size',
          '$resolution',
          '$refresh_rate',
          '$connectivity',
          '$usb',
          '$battery',
          '$os',     
          '$price',
          '$color',
          '$product_desc')";
        
        $con->exec($sql);
             echo "<script>alert('New record created successfully');</script>";
    }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage(); // Display SQL error message
    }
}


    
    function UpdateProduct($req){



    }

function RemoveRowFromTableById($req){
    global $con;

    try {
        // Construct DELETE SQL query to delete the record from the original table by ID
        $sql = "DELETE FROM `tbl_products` WHERE id = :id";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage(); // Display SQL error message
    }
}



// Function to delete products
  function deleteProduct($product_id){
    global $con;

    try {
        // Fetch product details from tbl_products
        $sql = "SELECT * FROM tbl_products WHERE id = $product_id";
        $result = $con->query($sql);
        $product = $result->fetch(PDO::FETCH_ASSOC);

        if ($product) {
            // Insert product details into tbl_deletedproducts
            $sql = "INSERT INTO tbl_deletedproducts
                    (brand, model, chipset, ram, storage, display_size, resolution, refresh_rate, connectivity, usb, battery, os, price, color, product_desc)
                    VALUES
                    ('{$product['brand']}', '{$product['model']}', '{$product['chipset']}', '{$product['ram']}', '{$product['storage']}', '{$product['display_size']}', '{$product['resolution']}', '{$product['refresh_rate']}', '{$product['connectivity']}', '{$product['usb']}', '{$product['battery']}', '{$product['os']}', '{$product['price']}', '{$product['color']}', '{$product['product_desc']}')";
            $con->exec($sql);

            // Delete the product from tbl_products
            $sql = "DELETE FROM tbl_products WHERE id = $product_id";
            $con->exec($sql);
        } else {
            echo "Product not found.";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


    

  function SignUp($req) {
    global $con;

    $username = $req['username'];
    $password = $req['password'];

    try {
        // Prepare SQL and bind parameters
        $sql = "INSERT INTO `tbl_login` (username, password) VALUES (:username, :password)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        
        // Execute the query
        $stmt->execute();


        echo "<script>alert('Inserted Successfuly')</script>";
           header("Location: signupform.php"); // Replace "success.php" with the URL of the success page
    exit(); // Ensure no further code is executed after redirection
        
       
    } catch(PDOException $e) {
        // Output a JavaScript snippet to trigger an alert for error
        echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
    }
}
}


?>