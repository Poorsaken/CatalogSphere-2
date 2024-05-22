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
    $usb = $req['usb'];
    $battery = $req['battery'];
    $os = $req['os'];
    $price = $req['price'];
    $color = $req['color'];
    $product_desc = $req['product_desc'];

    try {
        $sql = "INSERT INTO `tbl_products`
         (brand,
         model,
         chipset,
         ram,
         storage,
         display_size,
         resolution,
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
          '$usb',
          '$battery',
          '$os',     
          '$price',
          '$color',
          '$product_desc')";
        
        $con->exec($sql);
    }catch(PDOException $e){

        echo $sql . "<br>" . $e->getMessage();
    }
    }





    
    function UpdateProduct($req){



    }
    }
?>