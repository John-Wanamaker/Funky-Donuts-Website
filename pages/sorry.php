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
      ?>
    </header>
    <main class="w3-container">
        <div style="text-align: center;" class="w3-container w3-border-left w3-border-right
                    w3-border-black w3-green">
            <h1>Sorry!</h3>
                <h2>This page has not yet been activated, or has been temporarily
                    deactivated.</h2>
        </div>

        <?php
    include("../common/footer.html");
    ?>
    </main>
</body>