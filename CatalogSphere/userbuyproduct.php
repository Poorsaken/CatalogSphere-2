
<?php
session_start();
include('./routes/router.php');


        
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
?>


   
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href  = "./css/buyproducts.css" /> 
        </head>
        <body>

        <div class="products_container">
            <div class="left_container">
                <?php include('./navigation/usersnavigation.php'); ?>
            </div>


          
    <div class="div_right">
        <div class="header_buy">
 <div class="Welcome_to">Welcome to Catalog Sphere!</div>
            <div class="buypro">
            <p>Buy Product</p>
        </div>
        </div>
           
      <div class="card-container">

      
        <?php

        include('./classes/Crud.php');
                    include('./Classes/Database.php');
                    $DB = new Database();
                    $DB->connectDB();
                    $obj = new Crud();
                    $products = $obj->GetAllProducts();



                    
       echo "<div class = 'container'>";
                    
                   

        foreach ($products as $product) {
            // echo "<div class='card'>";
            //      echo "<div class='card-header'>{$product['brand']} {$product['model']}</div>";
            // echo "<div class='card-body'>";
            // echo "<p><strong>Color:</strong> {$product['color']}</p>";
            //              echo "<p class='card-description'>{$product['product_desc']}</p>";
            //      echo "</div>";
            // echo "</div>";

            echo "<div class ='card'>";

                    echo "<div class='header-container'>";
                   
                            echo "<div class='left-container'>";

                                        echo "<div class='card-image'>";
                                        
                                        echo "</div>";

                                echo "</div>";

                    
                            echo "<div class='right-container'>";
                                   echo "<div class='card-model'><strong>{$product['model']}</strong></div>";
                             echo "<div class='card-brand'>{$product['brand']} </div>";
            echo "<p>Color: {$product['color']}</p>";
                            echo "</div>";
                    echo "</div>";
              
 echo "<div class = 'title_description'>Description: </div>";
            
                  echo "<p class='card-description'>  {$product['product_desc']}</p>";

                   echo "<div class = 'buy_container'>";
                     echo "<div class = 'buy_tbn'> Buy Product </div>";
                   echo "</div>";
            echo "</div>";

            

        }

         echo "</div>";
        ?>
    </div>
    </div>
</div>
            
        
        </body>
        </html>


    <?php

}
else {

    header("Location: loginform.php");
    exit();
}

?>





