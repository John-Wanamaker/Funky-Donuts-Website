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
            <h3>Our Vision and Mission</h3>
            <p>Welcome to Funky Donuts, where our vision is to redefine the donut
                experience. We aim to create a world where every bite is a celebration,
                a burst of creativity, and a moment of joy. At Funky Donuts, we are on
                a mission to craft exceptional moments by pushing the boundaries of
                donut innovation. Our commitment to quality ensures that each donut
                is a masterpiece, made with the finest ingredients.</p>

            <p>Our mission extends beyond the kitchen; it's about building a community.
                We strive to provide inclusive spaces where diverse communities can come
                together to share in the delight of our delicious creations. From fostering
                connections to embracing sustainability, Funky Donuts is not just a store;
                it's a destination for memorable experiences and sweet connections. Join us
                on this delightful journey, and let's spread happiness, one donut at a time!</p>
        </div>

        <?php
    include("../common/footer.html");
    ?>
    </main>
</body>