<?php
session_start();
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
        <div style="text-align: left;" class="w3-container w3-border-left w3-border-right
                    w3-border-black w3-green">
        <h4>Complete List of Product Categories</h4>
        
        <?php
        include("../scripts/catalogProcess.php");
        ?>

                    
        </div>

        <?php
    include("../common/footer.html");
    ?>
    </main>
</body>
