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
            <h2>Donut Workshops</h2>
            <p>Welcome to Funky Donut Workshops! We currently only offer one workshop Our workshop,
                "Donut Artistry: From Dough to Delight" invites you to craft sensational donuts from
                start to finish. For all ages! Here are some highlights you can expect during your
                experience:</p>
            
            <h3>Class Details</h3>
                <ul>
                    <li><strong>Date:</strong> 1st of Every Month</li>
                    <li><strong>Time:</strong> 5:00pm-7:00m</li>
                    <li><strong>Location:</strong> 7518 West Street</li>
                    <li><strong>Instructor:</strong> Chef Picasso</li>
                </ul>

            <p><h3>Dough Mastery:</h3>
                Dive into the basics of donut dough creation. Learn the techniques that set our donuts
                apart, from the perfect rise to achieving that delightful, fluffy texture.</p>

            <p><h3>Artistic Expression:</h3>
                Unleash your inner artist as you explore a variety of toppings, glazes, and decorations.
                Whether you prefer classic elegance or bold, innovative designs, this workshop is your canvas.</p>

            <p><h3>Guided by Experts: </h3>
                Our skilled chefs will guide you through each step of the process, ensuring that even beginners can
                create donut masterpieces. Gain insights into the art of flavor pairing and design aesthetics.</p>

            <p><h3>Create your Signature Donut: </h3>
                Experiment with different flavors, colors, and textures to create a donut that reflects your unique
                taste and style. The possibilities are endless, and the results are deliciously satisfying.</p>
        </div>

        <?php
    include("../common/footer.html");
    ?>
    </main>
</body>