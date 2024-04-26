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
        <div class="w3-container w3-border-left w3-border-right
                    w3-border-black w3-green" style="padding-right:0">
            <h3>Our Location</h3>
            <p> At Funky Donuts, we believe in quality over quantity, and our singular
                store ensures that each donut is crafted with attention and care. Although,
                we do ship worldwide!</p>

            <p>Our vision extends beyond a single location. We dream of expanding first locally,
                where donut enthusiasts can gather. Our ultimate aspiration? To share the joy of
                Funky Donuts worldwide, bringing our unique flavors to donut lovers around the globe.
                Stay tuned as we grow and work towards making Funky Donuts a household name far and wide!</p>

            <p> Funky Donuts, Inc. <br>
                7518 West Street<br>
                Halifax, NS<br>
                Canada B4B 8X4<br>
                Tel: 902.434.1025</p>
        </div>

        <?php
    include("../common/footer.html");
    ?>
    </main>
</body>