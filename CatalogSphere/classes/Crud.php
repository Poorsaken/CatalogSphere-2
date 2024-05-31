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


 function BuyProducts(){
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




function GetProductById($product_id){
    global $con;
    try {
        $sql = "SELECT * FROM `tbl_products` WHERE id = :product_id";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
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

function GetAllBuyProducts(){

    global $con;
    try {

        $sql= "SELECT * FROM `tbl_buyproduct` ORDER BY id";
        $stmt = $con ->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}

function GetAllApprovedOrder(){

    global $con;
    try {

        $sql= "SELECT * FROM `tbl_approved` ORDER BY id";
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











// Assuming $con is your PDO connection





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



function UpdateProduct($id, $brand, $model, $chipset, $ram, $storage, $display_size, $resolution, $refresh_rate, $connectivity, $usb, $battery, $os, $price, $color, $description){
    global $con;
    try {
        $sql = "UPDATE `tbl_products` SET brand = :brand, model = :model, chipset = :chipset, ram = :ram, storage = :storage, display_size = :display_size, resolution = :resolution, refresh_rate = :refresh_rate, connectivity = :connectivity, usb = :usb, battery = :battery, os = :os, price = :price, color = :color, product_desc = :description WHERE id = :id";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':id', $id);
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

        return true; // Return true if the update was successful
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false; // Return false if there was an error
    }
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


  function ApproveProduct($product_id){
    global $con;

    try {
        // Fetch product details from tbl_products
        $sql = "SELECT * FROM tbl_buyproduct WHERE id = $product_id";
        $result = $con->query($sql);
        $product = $result->fetch(PDO::FETCH_ASSOC);

        if ($product) {
            // Insert product details into tbl_deletedproducts
            $sql = "INSERT INTO tbl_approved
                    (brand, model, chipset, ram, storage, display_size, resolution, refresh_rate, connectivity, usb, battery, os, price, color, product_desc)
                    VALUES
                    ('{$product['brand']}', '{$product['model']}', '{$product['chipset']}', '{$product['ram']}', '{$product['storage']}', '{$product['display_size']}', '{$product['resolution']}', '{$product['refresh_rate']}', '{$product['connectivity']}', '{$product['usb']}', '{$product['battery']}', '{$product['os']}', '{$product['price']}', '{$product['color']}', '{$product['product_desc']}')";
            $con->exec($sql);

            // Delete the product from tbl_products
            $sql = "DELETE FROM tbl_buyproduct WHERE id = $product_id";
            $con->exec($sql);
        } else {
            echo "";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


function getApprovedProductById($product_id) {
    global $con;
    try {
        // Prepare the SQL query to fetch a product by its ID from the tbl_approved table
        $sql = "SELECT * FROM `tbl_approved` WHERE `id` = :id";
        $stmt = $con->prepare($sql);
        
        // Bind the product ID parameter to the query
        $stmt->bindParam(':id', $product_id, PDO::PARAM_INT);
        
        // Execute the query
        $stmt->execute();
        
        // Fetch and return the result as an associative array
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Handle any exceptions by displaying the error message
        echo "Error fetching record: " . $e->getMessage();
        return false;
    }
}



    

  function SignUp($req) {
    global $con;

    $username = $req['username'];
    $password = $req['password'];

 $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    

    try {
        // Prepare SQL and bind parameters
        $sql = "INSERT INTO `tbl_login` (username, password) VALUES (:username, :password)";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);
        
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

function InsertBuyProduct($product_id){
    global $con;
    $status = 0;  // Define the variable with value "pending"

    try {
        // Fetch product details from tbl_products
        $sql = "SELECT * FROM tbl_products WHERE id = :product_id";
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($product) {
            // Insert product details into tbl_buyproduct
            $sql = "INSERT INTO tbl_buyproduct
                    (brand, model, chipset, ram, storage, display_size, resolution, refresh_rate, connectivity, usb, battery, os, price, color, product_desc, status)
                    VALUES
                    (:brand, :model, :chipset, :ram, :storage, :display_size, :resolution, :refresh_rate, :connectivity, :usb, :battery, :os, :price, :color, :product_desc, :status)";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(':brand', $product['brand']);
            $stmt->bindParam(':model', $product['model']);
            $stmt->bindParam(':chipset', $product['chipset']);
            $stmt->bindParam(':ram', $product['ram']);
            $stmt->bindParam(':storage', $product['storage']);
            $stmt->bindParam(':display_size', $product['display_size']);
            $stmt->bindParam(':resolution', $product['resolution']);
            $stmt->bindParam(':refresh_rate', $product['refresh_rate']);
            $stmt->bindParam(':connectivity', $product['connectivity']);
            $stmt->bindParam(':usb', $product['usb']);
            $stmt->bindParam(':battery', $product['battery']);
            $stmt->bindParam(':os', $product['os']);
            $stmt->bindParam(':price', $product['price']);
            $stmt->bindParam(':color', $product['color']);
            $stmt->bindParam(':product_desc', $product['product_desc']);
            $stmt->bindParam(':status', $status);  // Use the "pending" status
            $stmt->execute();

            // Delete the product from tbl_products
            $sql = "DELETE FROM tbl_products WHERE id = :product_id";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
            $stmt->execute();
        } else {
            // Handle case where product is not found (optional)
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}


}






?>