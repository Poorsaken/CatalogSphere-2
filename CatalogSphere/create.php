
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
    <link rel="stylesheet" href="./css/create.css"/>
</head>
<body>
  
</body>
</html>


<div class="parent-flex">


  <div class="left">
    <?php 

    include('./navigation/navigation.php')

    ?>
  </div>

    <div class="right">


    <?php

include('classes/Crud.php');
include('./Classes/Database.php');

global $DB;
global $con;
$DB = new Database(); //instantation
$DB->connectDB();


$profile = new Crud();

   if (isset($_REQUEST['btn'])) {
        $profile->InsertProduct($_REQUEST);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }

?>








    <form action="" method="POST" id="myForm">

<div class="parent">
  <!-- brand name -->
 <h2>Product Name:</h2>
  <div class="parent-flex">
      <div class="left-container">
          <label for="brand">Brand:</label><br/>
    <input type="text" id="brand" name="brand" required><br><br>
      </div>


      <div class="right-container">
      <label for="model">Model:</label><br/>
    <input type="text" id="model" name="model" required><br><br>  
      </div>

  </div>

  <h2>Specifications:</h2>


  <div class="parent-flex"> 

    <div class="left-container">
        <label for="Chipset">Chipset:</label><br/>
  <input type="text" id="chipset" name="chipset" required><br><br>
      </div>


      <div class="right-container">
  <label for="ram">RAM:</label><br/>
  <input type="text" id="ram" name="ram" required><br><br>
      </div>

      <div class="right-container">
  <label for="storage">Storage:</label><br/>
  <input type="text" id="storage" name="storage" required><br><br>

      </div>

  </div>


   <div class="parent-flex"> 

    <div class="left-container">


  <label for="display_size">Display Size:</label><br/>
  <input type="text" id="display_size" name="display_size" required><br><br>
      </div>


      <div class="right-container">


  <label for="Resolution">Resolution:</label><br/>
  <input type="text" id="resolution" name="resolution" required><br><br>
      </div>

      <div class="right-container">


  <label for="refresh_rate:">Refresh Rate:</label><br/>
  <input type="text" id="refresh_rate" name="refresh_rate" required><br><br>

      </div>

  </div>

   <div class="parent-flex"> 

    <div class="left-container">



  <label for="Capacity:">Capacity:</label><br/>
  <input type="text" id="capacity" name="capacity" required><br><br>
      </div>


      <div class="right-container">



  <label for="connectivity:">Connectivity:</label><br/>
  <input type="text" id="connectivity" name="connectivity" required><br><br>
      </div>

      <div class="right-container">


  <label for="usb">USB:</label><br/>
  <input type="text" id="usb" name="usb" required><br><br>

      </div>

  </div>


  <div class="parent-flex"> 

    <div class="left-container">



  <label for="battery">Battery:</label><br/>
  <input type="text" id="battery" name="battery" required><br><br>
      </div>


      <div class="right-container">



  <label for="os">Operating System(OS):</label><br/>
  <input type="text" id="os" name="os" required><br><br>

      </div>


    
  </div>


  <div class="parent-flex"> 

    <div class="left-container">



  <label for="price">Price:</label><br/>
  <input type="text" id="price" name="price" required><br><br>
      </div>


      <div class="right-container">


  <label for="color">Color:</label><br/>
  <input type="text" id="color" name="color" required><br><br>
      </div>


    
  </div>
  




<div class="parent-flex">


<div class="left-container">

  <label for="product_desc">Product Description:</label>
        <input type="text" id="product_desc" name="product_desc" class="product_desc" required><br><br>
 <button name="btn" id="btn" >SUBMIT</button>
      </div>



      </div>

</div>



  
</div>



        
    




        

    </form>



    </div>
</div>




    <script>
document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('btn').addEventListener('click', function() {
    document.getElementById('myForm').reset();
  });
});
</script>


