<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>Virtual Tennis</title>
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
    <h1 class="product-game-title"><a href="index.php" title="Home">Home/</a><a href="dreamcast.php" title="Sega-Genesis">Sega-Dreamcast/</a>Virtual Tennis</h1>
    <hr>
    <div class="product-img-and-description">
        <!--game picture-->
        <div class="product-img-container">
            <div class="product-image-cotation-bloc">
                <img src="Images/games/dreamcast/vten.jpg" class="game-image" alt="Virtual-Tennis">
                <span class="product-cotation-box">+0%</span>
            </div>
        </div>
        <!--info section (global)-->
        <div class="product-description-container">
            <!--game description-->
            <div class="product-game-description">
                <p>Directly translated from the popular arcade stand-up, Virtua Tennis offers a light-year jump from the Pong-style tennis of yesteryear. Sporting rich 3-D graphics, crisp animation, and realistic sound effects, you'll swear you're courtside at a grand slam.</p>
            </div>
            <!--info about platform, year, platform & price-->
            <div class="product-platform-price-container">
                <div class="product-platform-years">
                    <h3>Platform: </h3>
                    <p>Sega Dreamcast</p>
                    <h3>Years: </h3>
                    <p>1999</p>
                </div>
                <div class="product-cotation-price">
                    <h3>Prices: </h3>
                    <p>10€ (Complet in box)</p>
                    <p>15€ (Complet in box)</p>
                    <p>55€ (Mint)</p>
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
            <iframe class="product-video" src="https://www.youtube.com/embed/VaDjt_H0iX8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!--link section-->
        <div class="product-link-container">
            <h3>Buy one online:</h3>
            <label>Loose</label>
            <a href="https://www.ebay.fr/itm/Virtual-Tennis-2-Dreamcast-Boite-Notice/114119335112?hash=item1a920adcc8:g:1jsAAOSwDuleSqs6">[Ebay] Virtual Tennis 2 Dreamcast (Boite + Notice)</a>
            <label>In box</label>
            <a href="https://www.ebay.fr/itm/SEGA-Dreamcast-Virtual-Tennis-2-Manual-INCLUDED/143492243278?hash=item2168cddf4e:g:GasAAOSwzwReEc8N">[Ebay] SEGA Dreamcast - Virtual Tennis 2 - Manual INCLUDED</a>
            <label>Complet in box</label>
            <a href="https://www.ebay.fr/itm/jeu-sega-dreamcast-sous-blister-neuf-VIRTUA-TENNIS/114141176379?hash=item1a9358223b:g:8~8AAOSwPQBdbOAK">[Ebay] jeu sega dreamcast sous blister neuf VIRTUA TENNIS</a>
        </div>
    </div>

    <?php include("_footer.php");?>
</main>

</body>
</html>