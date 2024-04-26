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
            <h2>Donut Fitness Classes</h2>
            <h3>Join Our Free Fitness Class</h3>
            <p>At Funky Donuts, we believe in the delightful balance between savoring the
                joy of donuts and embracing a healthy, active lifestyle. That's why we're
                thrilled to extend an invitation to all our wonderful customers to participate
                in our Donut Fitness Class, and the best part—it's absolutely free!</p>

            <h3>Class Details</h3>
            <ul>
                <li><strong>Date:</strong> Every Tuesday and Thursday</li>
                <li><strong>Time:</strong> 6:00am-7:00am</li>
                <li><strong>Location:</strong> 7518 West Street</li>
                <li><strong>Instructor:</strong> Robert Williams</li>
            </ul>

            <h2>Why Combine Donuts and Fitness?</h2>
            <h3>Burn Calories</h3>
            <p>Engaging in physical activity is a fantastic way to burn off those delicious
                donut calories. Our fitness class provides a fun and effective way to stay active.</p>

            <h3>Boost Energy</h3>
            <p>Regular exercise increases energy levels, ensuring you're active and ready to
                enjoy your favorite donuts. It's the perfect way to fuel your day!</p>

            <h3>Community Bonding</h3>
            <p>Our Donut Fitness Class isn't just about exercise; it's an opportunity to
                connect with fellow donut enthusiasts. Share your love for donuts while staying
                fit together and building a supportive community.</p>

            <h3>Well-Being</h3>
            <p>A healthy lifestyle contributes to overall well-being, allowing you to indulge in
                your favorite treats guilt-free. It's all about finding the right balance for a
                happy and healthy life.</p>

            <h2>How to Join?</h2>
            <p>Participating in the Donut Fitness Class is easy! Just show up at our shop on the
                specified date and time, ready to have fun, get moving, and enjoy the perfect blend
                of donuts and fitness.</p>
            <p>We can't wait to see you there!</p>
            <p><em>Note: Please consult with a healthcare professional before starting any new
                    fitness program.</em></p>

        </div>

        <?php
    include("../common/footer.html");
    ?>
    </main>
</body>