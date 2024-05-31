<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php


session_start();
include('./routes/router.php');
include ('classes/Crud.php');
      include('./Classes/Database.php');
global $DB;
global $con;

      $Signup = new Crud();
      $DB = new Database(); //instantiation
      $DB->connectDB();
      if (isset($_REQUEST['btn'])) {
        $Signup->SignUp($_REQUEST);
        exit();
      

      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="./css/LoginForm.css"/>
</head>
<body>


    <div class="parent">

    
   <form action ="" method="POST">

    <div class="logo">
                     <h1>Create your Account.</h1>

                </div>
            <div class="wrapper">
  
            <div class="div">
               
            
                    <?php if (isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error']; ?></p>
                <?php }?>

                

                <label>Username</label><br/>
                <input type = "text" name="username" placeholder="username"><br/>
                
                <label>Password</label><br/>
                <input type = "password" name="password" placeholder="password"><br/>

                  

                  <button class="login-btn" name="btn" id="btn">SUBMIT</button><br/>
                  
                <label> <a onclick ="ToLogin()" class="signup">Login here.</a></label>
        

            </div>
                   

            </div>    
 
    </form>
    </div>

    <script>
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('myForm').addEventListener('submit', function() {
        // Reset form fields after submission
        document.getElementById('myForm').reset();
    });
});
</script>
 
</body>
</html>

</body>
</html>