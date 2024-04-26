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
        <div style="text-align: center;" class="w3-container w3-border-left w3-border-right
                    w3-border-black w3-green">
        <h4 class = "w3-center">Items Available in Your Chosen Category&nbsp;&nbsp;&nbsp;&nbsp;
            <a class = 'w3-button w3-black w3-round w3-small' href = 'pages/catalog.php'>Return to Category List</a>
        </h4> 
         
        <?php
        include("../scripts/categoryProcess.php");
        ?>     
        </div>

        <?php
    include("../common/footer.html");
    ?>
    </main>
</body>