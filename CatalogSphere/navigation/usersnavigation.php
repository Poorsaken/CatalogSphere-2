<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/navigation.css"/>
</head>
<body>
    <?php include('./routes/router.php'); ?>
    <div class="parents">
        <div class="logo" onclick="ToCustomerLandingPage()">
            <h1>CatalogSphere</h1>
        </div>

        <div class="navlinks">
            <a onclick="ToCustomerBuyProduct()"> All items </a>
        </div>
        <div class="navlinks">
            <a onclick="ViewOrderStatus()">Pending Orders</a>
        </div>
        <div class="navlinks">
            <a onclick="ViewApprovedOrder()">Approved Order</a>
        </div>

        <div class="div"></div>

        <div class="logout" onclick="ToLogout()">
            <div class="logout_text">
                <a class="logoutdiv">Logout</a>
            </div>
            <div class="logout_icon">
                <img src="../img/Vector.png" alt="">
            </div>
        </div>
    </div>

    <!-- Include the JavaScript code here or in a separate file -->
    <script>
        function setActiveLink(event) {
            // Remove the active class from all nav links
            const navLinks = document.querySelectorAll('.navlinks a');
            navLinks.forEach(link => link.classList.remove('active'));

            // Add the active class to the clicked link
            event.currentTarget.classList.add('active');
        }

        // Attach the event listener to each nav link
        document.querySelectorAll('.navlinks a').forEach(link => {
            link.addEventListener('click', setActiveLink);
        });
    </script>
</body>
</html>
