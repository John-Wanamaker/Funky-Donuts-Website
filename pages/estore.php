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
        <div class="w3-container w3-border-left w3-border-right w3-border-black w3-green">
            <h3>Greetings to our online store ... we appreciate your visit.</h3>
            <p>
                Explore our diverse collection of truly distinctive products. For your convenience while shopping and browsing, kindly select from the options below:
            </p>
            <ul>
                <li>
                    To peruse our captivating product catalog,
                    <a class='underline' href="pages/catalog.php">click here</a>.
                </li>
                <?php
                if(isset($_SESSION['customer_id'])) {
                    echo 
                        '<li>Trying to log in as a different user?<br>
                            you must first
                            <a href="pages/logout.php">click here to log out</a>.
                        </li>';
                } else {
                    echo
                        '<li>
                            Ready to make a purchase and already have a username and password?
                            <br>To sign in to our online store and commence shopping,
                            <a class=\'underline\' href="pages/form_login.php">click here</a>.
                        </li>
                        <li>
                            Need to register for our online store to facilitate your future purchases?
                            <br>To register (a one-time process),
                            <a class=\'underline\' style=\'border-radius: 0px;\' href="pages/form_registration.php">click here</a>.
                        </li>';
                }
                ?>
                <!-- <li>
                    Ready to make a purchase and already have a username and password?
                    <br>To sign in to our online store and commence shopping,
                    <a title="Not yet active" class='underline' href="pages/sorry.php">click here</a>.
                </li>
                <li>
                    Need to register for our online store to facilitate your future purchases?
                    <br>To register (a one-time process),
                    <a title="Not yet active" class='underline' style='border-radius: 0px;' href="pages/sorry.php">click here</a>.
                </li> -->
            </ul>
        </div>

        <?php
    include("../common/footer.html");
    ?>
    </main>
</body>