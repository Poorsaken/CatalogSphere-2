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

include('./routes/router.php')
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
        <a>Delete Products</a>
    </div>
</div>

</body>
</html>