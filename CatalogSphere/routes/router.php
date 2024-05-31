<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<script>
        function gotoAddProducts() {
            // Redirect to your PHP file
            window.location.href = 'userbuyproduct.php';
        }

         function ViewProducts() {
            // Redirect to your PHP file
            window.location.href = 'allproducts.php';
        }

         function ToMain() {
            // Redirect to your PHP file
            window.location.href = 'welcome.php';
        }
         function ToSignup() {
            // Redirect to your PHP file
            window.location.href = 'signupform.php';
        }
         function ToLogin() {
            // Redirect to your PHP file
            window.location.href = 'loginform.php';
        }
         function ToLogout() {
            // Redirect to your PHP file
            window.location.href = 'logout.php';
        }

        function gotoDeleteProducts() {

            window.location.href = 'delete.php';
        }
        function ViewDeletedProducts() {

            window.location.href = 'deletedproducts.php';
        }

        function ToUpdateProducts(){

            window.location.href = 'updateproducts.php';
        }


    
    </script>

</body>
</html>