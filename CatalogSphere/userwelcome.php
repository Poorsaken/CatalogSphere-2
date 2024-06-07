
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
            <!-- <link rel="stylesheet" href="./css/indexs.css"/> -->
             <link rel="stylesheet" href="./css/indexs.css"/>
        </head>

        <style>

            .elon {
    margin-top: 5%;
    width: 100%;
    height: 500px;
    background-repeat: no-repeat;
    background-size: cover; /* Ensures the background image covers the entire area */
    background-position: center; /* Centers the background image */
    background-image: url('./img/smartphone.jpg');
    border-radius: 15px;
}

        </style>
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

                                <p>Welcome to Kaye Shop, your ultimate online destination for the latest and greatest in smartphones and accessories! At Kaye Shop, we pride ourselves on offering a diverse selection of high-quality smartphones from top brands around the world. Whether you’re looking for the latest flagship model, a budget-friendly option, or something in between, we’ve got you covered.</p>
                                 <div class="elon">
                             
                                    </div>
                            
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

                                        <p>Discover the future of mobile technology at Kaye Shop Explore our wide range of smartphones and accessories today and find the perfect device that meets all your needs. Welcome to the next level of mobile shopping!</p>

                        
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





