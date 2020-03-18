<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>Super Mario 64</title>
    <meta lang="en">
    <meta name="title" content="Retro Invaders">
    <meta charset="UTF-8">
    <meta name="description" content="Retro Invaders helps you to find your favorite retro games">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="produits_style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-5.12.1-web/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900|Roboto:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="header_style.css" />
    <link rel="stylesheet" type="text/css" href="footer_style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">
    <link rel='stylesheet' id='thb-self-hosted-1-css' href="gilroy/gilroy.css">
</head>
<div id="nav-mobile-container" class="nav-mobile-full no-content">
    <div class="close-menu-mobile no-content">
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <nav class="mobile-nav">
        <ul>
            <a href="plateformes.php"><li>Platforms</li></a>
            <a href="about_us.php"><li>About Us</li></a>
            <a href="contact.php"><li>Contact</li></a>
        </ul>
    </nav>

</div>

<?php include("_header.php"); ?>

<main>
    <!--name of the game-->
    <h1 class="product-game-title"><a href="index.php" title="Home">Home/</a><a href="nintend-64.html" title="nintendo 64">Nintendo 64/</a>Super Mario 64</h1>
    <hr>
    <div class="product-img-and-description">
        <!--game picture-->
        <div class="product-img-container">
            <div class="product-image-cotation-bloc">
                <img src="Images/games/N64/Super_Mario_64_box_cover.jpg" class="game-image" alt="Super Mario 64">
                <span class="product-cotation-box">+8%</span>
            </div>
        </div>
        <!--info section (global)-->
        <div class="product-description-container">
            <!--game description-->
            <div class="product-game-description">
                <p>Super Mario 64 is a 3D platformer in which the player controls Mario through several courses. Each course is an enclosed world in which the player is free to wander in all directions and discover the environment without time limits.</p>
            </div>
            <!--info about platform, year, platform & price-->
            <div class="product-platform-price-container">
                <div class="product-platform-years">
                    <h3>Platform: </h3>
                    <p>Nintendo 64</p>
                    <h3>Years: </h3>
                    <p>1997</p>
                </div>
                <div class="product-cotation-price">
                    <h3>Prices: </h3>
                    <p>12€ (Loose)</p>
                    <p>44€ (In box)</p>
                    <p>95€ (Complet in box)</p>
                    <div class="product-cotation-mobile">
                        <h3>Cotation: </h3>
                        <p class="cotation-positiv">+8%</p>
                    </div>
                </div>
            </div>
            <!--
              <div class="product-game-ban">
                  <img src="Images/games/sega-genesis/altered-beast-img.jpg">
                </div>
            -->
        </div>
    </div>
    <!--Viedo and link section-->
    <div class="product-video-and-links">
        <!--video section-->
        <div class="product-video-container">
            <h3>Watch a lets play!</h3>
            <iframe class="product-video" src="https://www.youtube.com/embed/XnqGFn0Byg4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!--link section-->
        <div class="product-link-container">
            <h3>Buy one online:</h3>
            <label>Loose</label>
            <a href="https://www.ebay.fr/itm/Jeu-Nintendo-64-Super-Mario-64/193347358128?hash=item2d04668db0:g:O2cAAOSw7QdeWElz">[Ebay] Jeu Nintendo 64 Super Mario 64 (loose)</a>
            <label>In box</label>
            <a href="https://www.ebay.fr/itm/SUPER-MARIO-64-NINTENDO-64-N64-PAL-EUR-FR/293497506701?hash=item4455d08b8d:g:HEgAAOSwSWZeXDCC">[Ebay] SUPER MARIO 64 NINTENDO 64 N64 PAL EUR FR 🌟</a>
            <label>Complet in box</label>
            <a href="https://www.ebay.fr/itm/SUPER-MARIO-64-PAL-NINTENDO-64/163935685785?hash=item262b540c99:g:8dUAAOSwzjddxTG7">[Ebay] SUPER MARIO 64 - PAL - NINTENDO 64</a>
        </div>
    </div>

    <?php include("_footer.php");?>
</main>

</body>
</html>