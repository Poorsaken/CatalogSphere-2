
<?php

include('./routes/router.php')
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
<?php 

include('./navigation/navigation.php')

?>
</div>


<div class="right">

   <h1>Hi this is kaye shop!</h1>

        <button class="btn_toshop" onclick="gotoAddProducts()">Go to shop</button>


</div>

</div>

</body>
</html>