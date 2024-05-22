<?php


session_start();
include('./routes/router.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/loginform.css"/>
</head>
<body>
    <div class="parent">

   <form action ="./login.php" method="post">
            <div class="wrapper">
  
            <div class="div">
                <div class="logo">
     <h2>Welcome.</h2>

                </div>
            
                    <?php if (isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error']; ?></p>
                <?php }?>

                <label>Username</label><br/>
                <input type = "text" name="username" placeholder="username"><br/>
                
                <label>Password</label><br/>
                <input type = "password" name="password" placeholder="password"><br/>

                  

                <button type="submit" class="login-btn">Login</button><br/>
                  
                <label>Dont have an Account? <a onclick ="ToSignup()" class="signup">Sign Up here.</a></label>
        

            </div>
                   

            </div>    
 
    </form>
    </div>
 
</body>
</html>