<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <title>Temple of Zeus</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
  <script src="scripts/jquery-3.2.1.min.js"></script>
  <script src="scripts/active-page.js" type="text/javascript"></script>
  <script src="scripts/slideshow.js" type="text/javascript"></script>
</head>

<body>

  <?php include "includes/header-nav.php";?>

  <div id="slide-and-we-are" class="section">
    <div id="slideshow">
      <div id="img-box">
        <img id="current_img" alt="slideshowplaceholder" src="images/slideshowplaceholder.jpg"/>
      </div>
      <div class="clear"></div>
      <div id="button_container">
        <!--this whole section is taken from the lab-->
        <button class="slide_button" id="left">Previous</button>
        <button class="slide_button" id="right">Next</button>
      </div> <!-- end of button_container div -->
    </div>


    <div id="we-are-block">
      <div class="we-are-section">
        <div class="we-are">
          <p>WHO WE ARE</p>
        </div>
        <div class="we-are-descr">
          <p>A Café that serves simple lunch and breakfast Monday thru Friday.</p>
        </div>
      </div>
      <div class="we-are-section">
        <div class="we-are">
          <p>OUR PHILOSOPHY</p>
        </div>
        <div class="we-are-descr">
          <p id="philosophy">
            We believe in using organic, fresh, and locally sourced ingredients
            to produce high quality food. It's about respect, and making
            sure everyone is welcome.
          </p>
        </div>
      </div>
      <div class="we-are-section">
        <div class="we-are">
          <p>WHERE WE ARE</p>
        </div>
        <div class="we-are-descr">
          <p>Find us in Klarman Hall on Cornell's Campus in Ithaca, New York. Or <br>
            <a href="https://www.google.com/maps/dir//Klarman+Hall,+East+Avenue,+Ithaca,+NY/@42.4491776,-76.5531726,12z/data=!3m1!4b1!4m9!4m8!1m0!1m5!1m1!1s0x89d0818a6fdd2641:0x9fff4a38f365e6ab!2m2!1d-76.4831324!2d42.4490723!3e2">
              Get Directions From Wherever You Are</a>
            </p>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>



    <div id="quote-strip" class="section">
      <div class="quote">
        <p>
          "Best soup in Ithaca. Curry sweet pea tastes like your childhood but better.
          Gimme coffee, and teas from a Cornell alum's company. The best tuna salad
          you'll ever eat (sounds weird but it's true)." <!-- And the best salad dressings.
          Local bagged snacks like dark chocolate batons, dried papaya and
          honey/nut bars (made by a local guy who works at CTB/IB).
          And the people are pretty cool too."-->
        </p>
      </div>
      <div class="quote">
        <p>
          "Zeus offers comfort food with healthy, fresh ingredients. Yummy taste
          with diverse, friendly staff. Brightens my lunch time."
        </p>
      </div>
      <div class="quote">
        <p>
          "A most pleasant atmosphere overflowing with positive energy.
          The food is great, ambrosial. I love the soup. Zeus was the king of the
          gods and the Temple of Zeus is the king of restaurants. Lol."
        </p>
      </div>
      <div class="clear"></div>
    </div>





  </body>

  </html>
