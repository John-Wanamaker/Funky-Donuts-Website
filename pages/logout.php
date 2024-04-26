<?php
session_start();
$loggedInAtStartOfLogout = isset($_SESSION['customer_id']) ? true : false;
if($loggedInAtStartOfLogout) {
  $customerID = $_SESSION['customer_id'];
  include("../scripts/connectToDatabase.php");
  //The following included scripts performs pre-logout cleaunup
  include("../scripts/logoutProcess.php");
  session_unset();
  session_destroy();
}

include("../common/header.html");
?>

<body class="body w3-auto">
    <header class="w3-container">
        <?php
      echo '<div class ="w3-border w3-border-black w3-green">';
      include("../common/banner.php");
      include("../common/menus.html");
      ?>
    </header>


    <main class="w3-container">
        <div style="text-align: center;" class="w3-container w3-border-left w3-border-right
                    w3-border-black w3-green">
        <h4>Logout</h4>
        <?php
        if($loggedInAtStartOfLogout) {
          echo '<p>Thank you for visiting our e-store.<br>
                    You have successfully logged out.</p>
                  <p>If you wish to log back in, 
                    <a href="pages/form_login.php">click here</a>.</p>
                  <p>Or you can browse our product catalog without logging in by
                    <a href="pages/catalog.php">clicking here</a>.</p>';
        } else {
          echo '<p>Thank you for visiting Funky Donuts. You have not yet logged in.</p>
                  <p>If you do with to log in, <a href="pages/form_login.php">click here</a>.</p>
                  <p>Or you can browse our product catalog without logging in by
                    <a href="pages/catalog.php">clicking here</a>.</p>';
        }
        ?>   
                    
        </div>

        <?php
    include("../common/footer.html");
    ?>
    </main>
</body>