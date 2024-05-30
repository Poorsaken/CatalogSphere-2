
<?php
session_start();
include('./routes/router.php');
include('./navigation/navigation.php');

        
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
?>


    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>WELCOME TO KAYESHOP</title>
            <link rel="stylesheet" href="./css/index.css"/>
        </head>
        <body>
            

        <div class="parent-flex">
            
                
                <div class="left">
                
                        </div>


                            <div class="right">
                            
                            <h1>Hi this is kaye shop!</h1>
                            
                            <button class="btn_toshop" onclick="gotoAddProducts()">Go to shop</button>
                            

                        
                            
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





