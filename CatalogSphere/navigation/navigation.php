<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="./css/navigation.css"/>
</head>
<body>


<?php 

include('./routes/router.php');

?>

<div class="parents">


    <div class="logo" onclick="ToMain()">

    <h1 >CatalogSphere</h1>

    </div>

    <div class="navlinks">
        <a onclick="ViewProducts()">All Products</a>
    </div>
    <div class="navlinks">
        <a onclick="">Deleted Products</a>
    </div>
    <div class="navlinks_add">
        <a onclick="gotoAddProducts()">Add Products</a>
    </div>
    <div class="navlinks_upd">
        <a >Update Products</a>
    </div>
    <div class="navlinks_del">
        <a onclick="gotoDeleteProducts()">Delete Products</a>
    </div>

        <div class="div">


        </div>
<div class="logout" onclick="ToLogout()">
    <div class="logout_text">
        <a class="logoutdiv">Logout</a>
    </div>
    <div class="logout_icon">
        <img src="../img/Vector.png" alt="">
    </div>
</div>

      



</div>

</body>
</html>