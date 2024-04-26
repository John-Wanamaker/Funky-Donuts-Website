<!--home page for funky donuts 1-->
<?php
session_start();
include("common/header.html");
?>

<div class="body w3-auto">
    <header class="w3-container">
        <?php
        echo '<div class ="w3-border w3-border-black w3-green">';
        include("common/banner.php");
        include("common/menus.html");
        echo '</div>';
        ?>
    </header>
        <main class="w3-container">
            <div class="w3-container w3-border-left w3-border-right
                    w3-border-black w3-green" style="padding-right:0">
                <article class="w3-half">
                    <h3>
                        Thanks for visiting Funky Donuts!
                    </h3>
                    <p>
                        At Funky Donuts, we believe in turning ordinary moments into
                        extraordinary memories, and what better way to do that than with
                        our unique and flavorful donut creations. From classic glazed
                        wonders to daring and inventive combinations, our donuts are crafted
                        with passion and a sprinkle of fun.
                    </p>
                    <p>
                        Get ready to treat yourself to a donut experience like no other
                        because at Funky Donuts, every donut is a masterpiece! ... We also
                        deliver, so check out our e-commerce section.
                    </p>
                </article>

                <!-- images and labels -->
            
                <div class="w3-half w3-padding w3-center w3-section">

                    <div class="slideshow-container">
                        <div class="mySlides">
                                <img src="images/products/drumstick_donut.png" style="width:100%" alt="Drumstick Donut">
                                    <footer class="w3-container w3-black">
                                        <div class="myLabels">Our Best Seller: Drumstick Donut</div>
                                    </footer>
                        </div>

                        <div class="mySlides">
                            <img src="images/products/choc_van_sprinkle.jpg" alt="Chocolate and Vanilla Sprinkle Donut" style="width:100%">
                            <footer class="w3-container w3-black">
                                <div class="myLabels">Chocolate and Vanilla Sprinkle</div>
                            </footer>
                        </div>

                        <div class="mySlides">
                            <img src="images/products/assorted_donuts.jpg" style="width:100%" alt="Assorted Donuts">
                            <footer class="w3-container w3-black">
                                <div class="myLabels">Assorted Donuts</div>
                            </footer>
                        </div>

                        <div class="mySlides">
                            <img src="images/products/maple_bacon_donuts.jpg"
                        alt="Maple Bacon Donut" style="width:100%">
                            <footer class="w3-container w3-black">
                                <div class="myLabels">Maple Bacon Donut</div>
                            </footer>
                        </div>

                        <div class="mySlides">
                            <img src="images/products/soap_donut.jpg"
                        alt="Soap Donut" style="width:100%">
                            <footer class="w3-container w3-black">
                                <div class="myLabels">Soap Donut</div>
                            </footer>
                        </div>

                        <div class="mySlides">
                            <img src="images/products/unicorn.jpg"
                        alt="Unicorn Donut" style="width:100%">
                            <footer class="w3-container w3-black">
                                <div class="myLabels">Unicorn Donut</div>
                            </footer>
                        </div>

                    <!-- Add more slides as needed -->

                        <a onclick="changeSlide(-1)">&#10094;</a>
                        <a onclick="changeSlide(1)">&#10095;</a>
                    </div>

                    
                </div>
            </div>
            <?php
            include("common/footer.html");
            ?>
        </main>
    
</div>
</html>

<script>
// JavaScript Code for carousel
var index = 0;

function carousel() {
  var slides = document.getElementsByClassName("mySlides");

  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  index++;
  if (index > slides.length) {
    index = 1;
  }

  slides[index - 1].style.display = "block";

  // Use setTimeout to call carousel function after 3 seconds
  setTimeout(carousel, 3000);
}

function changeSlide(n) {
  index += n;
  var slides = document.getElementsByClassName("mySlides");

  if (index > slides.length) {
    index = 1;
  } else if (index < 1) {
    index = slides.length;
  }

  for (var i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[index - 1].style.display = "block";
}

// Initial call to set the initial state
document.addEventListener("DOMContentLoaded", function () {
  carousel();
});

</script>