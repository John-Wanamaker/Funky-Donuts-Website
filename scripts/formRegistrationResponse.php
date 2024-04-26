<?php
include("../common/header.html");
?>

<body class="body w3-auto">
    <header class="w3-container">
        <?php
      echo '<div class ="w3-border w3-border-black w3-green">';
      include("../common/banner.php");
      include("../common/menus.html");
      include("connectToDatabase.php");
      echo '</div>';
      ?>
    </header>

    <main class="w3-container">
        <div style="text-align: center;" class="w3-container w3-border-left w3-border-right
                    w3-border-black w3-green">

        <?php
        //saved values used to fill in registration form values if we have to go back to the registration 
        //form and try again

        $_SESSION['POST_SAVE'] = $_POST;

        include("formRegistrationProcess.php");
        ?>
            
    
        </div>

        <?php
    include("../common/footer.html");
    ?>
    </main>
</body>