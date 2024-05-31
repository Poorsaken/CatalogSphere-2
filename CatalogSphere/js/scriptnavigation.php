<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<script>

    function viewOrderStatus() {
    // Get the link element
    var link = document.getElementById('pendingOrderLink');
    
    // Add the 'active' class to change the color
    link.classList.add('active');
    
    // Optionally, remove the 'active' class from other links if needed
    // For example, if you have multiple links and only one should be active at a time
    var allLinks = document.querySelectorAll('.navlinks a');
    allLinks.forEach(function(item) {
        if (item !== link) {
            item.classList.remove('active');
        }
    });
}

</script>
</body>
</html>