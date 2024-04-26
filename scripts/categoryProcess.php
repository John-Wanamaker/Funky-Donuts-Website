<?php
$categoryCode = $_GET['categoryCode'];
$query = "SELECT * FROM my_Products
                    WHERE catCode = '$categoryCode'
                    ORDER BY name ASC";
$category = mysqli_query($db, $query);
$numRecords = mysqli_num_rows($category);
echo "<div style = 'overflow-x:auto;'>
<table class = 'w3-table w3-border w3-bordered'> 
    <tr>
        <th>Product Images</th>
        <th>Produt Name</th>
        <th>Price</th>
        <th># in Stock</th>
        <th>Purchase?</th>
    </tr>";
for($i=1;$i<=$numRecords; $i++) {
    $row = mysqli_fetch_array($category, MYSQLI_ASSOC);
    $productImageFile = $row['image_file'];
    $productName = $row['name'];
    $productPrice = $row['price'];
    $productPriceAsString = sprintf("$%.2f", $productPrice);
    $productQuantity = $row['quantity'];
    $productID = $row['product_id'];
    $shoppingCartURL = "pages/shoppingCart.php?productID=$productID";
    echo 
    "<tr>
        <td class = 'w3-center'>
            <img width = '70%'
                src = 'images/products/$productImageFile'
                alt = 'Product Image'>
        </td><td>
            $productName
        </td><td class = 'w3-right-align'>
            $productPriceAsString
        </td><td class = 'w3-center'>
            $productQuantity
        </td><td>  
            <a classs = 'w3-button w3-black w3-round w3-small'
                href ='$shoppingCartURL'>
                Buy this item
            </a>
        </td><td>";
}
echo "</table></div>";
mysqli_close($db);
?>
