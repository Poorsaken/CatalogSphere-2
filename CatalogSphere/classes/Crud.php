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