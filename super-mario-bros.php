<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>Super Mario Bros</title>
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
    <h1 class="product-game-title"><a href="index.php" title="Home">Home/</a><a href="nes-classic.php" title="Sega-Genesis">NES/</a>Super Mario Bros.</h1>
    <hr>
    <div class="product-img-and-description">
        <!--game picture-->
        <div class="product-img-container">
            <div class="product-image-cotation-bloc">
                <img src="Images/games/NES/Super_Mario_Bros._box.png" class="game-image" alt="Super Mario Bros">
                <span class="product-cotation-box">+0%</span>
            </div>
        </div>
        <!--info section (global)-->
        <div class="product-description-container">
            <!--game description-->
            <div class="product-game-description">
                <p>Super Mario Bros is frequently cited as one of the greatest video games of all time, with praise on its precise controls. It is one of the bestselling games of all time, with more than 40 million physical copies.</p>
            </div>
            <!--info about platform, year, platform & price-->
            <div class="product-platform-price-container">
                <div class="product-platform-years">
                    <h3>Platform: </h3>
                    <p>NES</p>
                    <h3>Years: </h3>
                    <p>1987</p>
                </div>
                <div class="product-cotation-price">
                    <h3>Prices: </h3>
                    <p>11€ (Loose)</p>
                    <p>27€ (In box)</p>
                    <p>28€ (Complet in box)</p>
                    <div class="product-cotation-mobile">
                        <h3>Cotation: </h3>
                        <p class="cotation-positiv">+0%</p>
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
            <iframe class="product-video" src="https://www.youtube.com/embed/j8CHsUFsi1A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!--link section-->
        <div class="product-link-container">
            <h3>Buy one online:</h3>
            <label>Loose</label>
            <a href="https://www.ebay.fr/itm/SUPER-MARIO-BROS-NINTENDO-NES-Jeu-NES-PAL-FRA/263247725112?hash=item3d4ac98238:g:4K0AAOSwCV5Z1mAT">[Ebay] SUPER MARIO BROS - NINTENDO NES - Jeu NES PAL FRA (loose)</a>
            <label>In box</label>
            <a href="https://www.ebay.fr/itm/pour-nintendo-nes-super-mario-bros/183919073544?hash=item2ad26e5908:g:3SgAAOSwmY1dUuft">[Ebay] nintendo nes super mario bros</a>
            <label>Complet in box</label>
            <a href="https://www.ebay.fr/itm/suPer-MARIo-BRoS-FAH-cOmplet-pOur-NINTENDo-NES-1987/264504502331?hash=item3d95b2683b:g:t2MAAOSwFMRdq7G8">[Ebay] ~*~ suPer MARIo BRoS. - FAH ~~ cOmplet pOur NINTENDo NES ~ 1987 ~* ~~</a>
        </div>
    </div>

    <?php include("_footer.php");?>
</main>

</body>
</html>