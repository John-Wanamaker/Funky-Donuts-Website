<?php
session_start();
// if(!preg_match('/shoppingCart.php/', $_SERVER['HTTP_REFERER'])) {
//     header("Location: ../pages/shoppingCart.php?productID=view");
//     exit;
// } else {
//     echo "<p> error </p>";
// }
$customerID = $_SESSION['customer_id'];
include("../common/header.html");
?>

<body class="body w3-auto">
    <header class="w3-container">
      <?php
      echo '<div class ="w3-border w3-border-black w3-green">';
      include("../common/banner.php");
      include("../common/menus.html");
      include("../scripts/connectToDatabase.php");
      ?>
    </header>


    <main class="w3-container">
        <div style="text-align: center;" class="w3-container w3-border-left w3-border-right
                    w3-border-black w3-green">
        <?php
        include("../scripts/checkoutProcess.php")
        ?>   
                    
        </div>

    <?php
    include("../common/footer.html");
    ?>
    </main>
</body>