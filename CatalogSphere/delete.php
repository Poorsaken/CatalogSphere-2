<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/allproducts.css"/> 
</head>
<body>

<div class="products-container">
    <div class="left-container">
        <?php 
        include('./navigation/navigation.php');
        ?>
    </div>

    <div class="div_right">
        <table class="product-table">
        <thead>
            <tr>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;"></th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Brand</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Model</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Chipset</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">RAM</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Storage</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Display Size</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Resolution</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">refresh Rate</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Connectivity</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">USB</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Battery</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">OS</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Price</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Color</th>
                <th style="background-color: #f2f2f2; padding: 10px; border: 1px solid #ddd;">Description</th>
            </tr>
        </thead>
        <tbody>
          <?php
            include('./classes/Crud.php');
            include('./Classes/Database.php');

            $DB = new Database(); // instantiation
            $DB->connectDB();

            $obj = new Crud();

            $products = $obj->GetAllProducts();

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['selectedRows'])) {
                $selectedRows = json_decode($_POST['selectedRows'], true);
                foreach ($selectedRows as $row) {
                    
                    $obj->MoveToDeletedProducts($row);
                }
            }
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['selectedRows'])) {
                $selectedRows = json_decode($_POST['selectedRows'], true);
                foreach ($selectedRows as $row) {
                    
                   $obj->RemoveRowFromTableById($row);
                }
            }


            // Display the products
            foreach ($products as $index => $product) {
                $rowStyle = $index % 2 == 0 ? 'background-color: #f9f9f9;' : '';
                echo "<tr style='{$rowStyle}'>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'><input type='checkbox' class='row-checkbox' data-product='" . htmlspecialchars(json_encode($product)) . "'></td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['brand']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['model']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['chipset']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['ram']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['storage']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['display_size']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['resolution']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['refresh_rate']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['connectivity']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['usb']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['battery']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['os']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['price']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['color']}</td>";
                echo "<td style='padding: 10px; border: 1px solid #ddd;'>{$product['product_desc']}</td>";
                echo "</tr>";
            }
            ?>

        </tbody>
        </table>
        
        <form method="POST" action="" id="productForm">
            <input type="hidden" name="selectedRows" id="selectedRows">
            <button type="button" class="insert-btn" id="insertBtn">Insert</button><br/>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        document.getElementById('insertBtn').addEventListener('click', () => {
            const selectedRows = [];
            document.querySelectorAll('.row-checkbox:checked').forEach(checkbox => {
                const row = checkbox.closest('tr');
                const cells = row.children;
                const rowData = {
                    brand: cells[1].innerText,
                    model: cells[2].innerText,
                    chipset: cells[3].innerText,
                    ram: cells[4].innerText,
                    storage: cells[5].innerText,
                    display_size: cells[6].innerText,
                    resolution: cells[7].innerText,
                    refresh_rate: cells[8].innerText, // Adjust indices if necessary
                    connectivity: cells[9].innerText, // Adjust indices if necessary
                    usb: cells[10].innerText,
                    battery: cells[11].innerText,
                    os: cells[12].innerText,
                    price: cells[13].innerText,
                    color: cells[14].innerText,
                    product_desc: cells[15].innerText // Adjust indices if necessary
                };
                selectedRows.push(rowData);
               
            });
            document.getElementById('selectedRows').value = JSON.stringify(selectedRows);
            document.getElementById('productForm').submit();
        });
    });
</script>



</body>
</html>









