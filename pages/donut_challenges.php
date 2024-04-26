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

            <h2>Donut Challenges</h2>
            <p>At Funky Donuts, we believe that enjoying a donut should be
                more than just a tasty treat; it should be a challenge, an experience to
                remember. Join us on a journey of exciting challenges with rewards
                that will leave you craving for more. All challenges are walk-on, so
                just show up and participate!</p>

            <h3>Challenge 1: The Sprinkle Sprint</h3>
            <p>Devour 12 classic glazed donut covered in sprinkles in the quickest
                time. The winner will Earn the title of "Sprinkle Sprint Champion"
                and receive a voucher for 24 free donuts of your choice. - January 10th </p>

            <h3>Challenge 2: The Blindfold Wizard</h3>
            <p>Savour and identify the flavors of three mystery-filled donuts blindfolded.
                The winner will gain the coveted "The Blindfold Wizard" badge and enjoy a
                complimentary coffee subscription for a month. - April 21st
            </p>

            <h3>Challenge 3: The Donut Architect</h3>
            <p> Build the tallest donut tower using our assorted donuts without it
                toppling over. Become the "The Donut Architect" and receive a
                personalized donut tower for your next special event. - June 14th</p>

        </div>

        <?php
    include("../common/footer.html");
    ?>
    </main>
</body>