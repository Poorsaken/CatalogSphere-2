
<?php
session_start();
include('./routes/router.php');
include('./navigation/usersnavigation.php');

        
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
?>


    <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>WELCOME TO KAYESHOP</title>
            <link rel="stylesheet" href="./css/indexs.css"/>
        </head>
        <body>
            

        <div class="parent-flex">
            
                
                <div class="left">
                
                        </div>


                            <div class="right">
                            
                            <!-- <h1>Hi this is kaye shop!</h1>
                            
                            <button class="btn_toshop" onclick="gotoAddProducts()">Go to shop</button>
                             -->

                             <div class="header_wrapper">
                                
                                <div class="div-header">
                                 <h>On our platform you can buy</h><br/>
                                <h>And Choose different Phones</h><br/>

                                <p>Welcome to Kaye Shop, your ultimate online destination for the latest and greatest in smartphones and accessories! At Tech Haven, we pride ourselves on offering a diverse selection of high-quality smartphones from top brands around the world. Whether you’re looking for the latest flagship model, a budget-friendly option, or something in between, we’ve got you covered.</p>
                                 </div>

                                <div class="div-header">

                                    <div class="two_pics">

                                        <div class="picture_one">
                                            <img src='./img/muslim.jpg' alt=''/>
                                        </div>

                                        <div class="picture_one">
                                            <img src='./img/ip15.jpg' alt=''/>
                                        </div>
                                        
                                
                                    </div>

                        
                                 </div>


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





