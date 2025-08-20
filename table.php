<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h3>Daily Filipino Products</h3>

<?php
$products = array(
    array("name" => "Bigas (Rice)", "price" => 45.00, "stock" => 25),
    array("name" => "Mantika (Cooking Oil)", "price" => 75.50, "stock" => 8),
    array("name" => "Kape (Coffee)", "price" => 120.00, "stock" => 15),
    array("name" => "Toyo (Soy Sauce)", "price" => 18.00, "stock" => 5),
    array("name" => "Sabon (Laundry Soap)", "price" => 12.50, "stock" => 30),
    array("name" => "Tinapay (Bread)", "price" => 35.00, "stock" => 7)
);
?>

<table class="custom-table">
    <tr>
        <th>No.</th>
        <th>Product Name</th>
        <th>Price (₱)</th>
        <th>Stock</th>
    </tr>

    <?php
    $no = 1;
    foreach ($products as $p) {
        $rowClass = ($p["stock"] < 10) ? "low-stock" : "";
        echo "<tr class='$rowClass'>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $p["name"] . "</td>";
        echo "<td>" . number_format($p["price"], 2) . "</td>";
        echo "<td>" . $p["stock"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
