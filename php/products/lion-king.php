<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>Lion's King</title>
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
    <h1 class="product-game-title"><a href="index.php" title="Home">Home/</a><a href="super-nintendo.php" title="Nintendo-SNES">Nintendo-SNES/</a>Disney Lion's King</h1>
    <hr>
    <div class="product-img-and-description">
        <!--game picture-->
        <div class="product-img-container">
            <div class="product-image-cotation-bloc">
                <img src="Images/games/snes/Lion+King,+The+(USA)-image.jpg" class="game-image" alt="Lion's King">
                <span class="product-cotation-box">+0%</span>
            </div>
        </div>
        <!--info section (global)-->
        <div class="product-description-container">
            <!--game description-->
            <div class="product-game-description">
                <p>The Lion King is a side-scrolling platform game in which players control the protagonist, Simba, through the events of the film, going through both child and adult forms as the game progresses.</p>
            </div>
            <!--info about platform, year, platform & price-->
            <div class="product-platform-price-container">
                <div class="product-platform-years">
                    <h3>Platform: </h3>
                    <p>SNES</p>
                    <h3>Years: </h3>
                    <p>1994</p>
                </div>
                <div class="product-cotation-price">
                    <h3>Prices: </h3>
                    <p>15€ (Loose)</p>
                    <p>23€ (In box)</p>
                    <p>50€ (Complet in box)</p>
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
            <iframe class="product-video" src="https://www.youtube.com/embed/wpUNh557FnA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!--link section-->
        <div class="product-link-container">
            <h3>Buy one online:</h3>
            <label>Loose</label>
            <a href="https://www.ebay.fr/itm/Jeu-LE-ROI-LION-Disney-pour-Super-Nintendo-SNES-version-PAL/153859846678?hash=item23d2c2f216:g:HrMAAOSw4i5eZ6Lg">[Ebay] Jeu LE ROI LION (Disney) pour Super Nintendo SNES version PAL (loose)</a>
            <label>In box</label>
            <a href="https://www.ebay.fr/itm/Disneys-The-Lion-King-For-Super-Nintendo-SNES-Boxed-No-manual-PAL/293423722822?hash=item44516ab146:g:dPYAAOSwmU9eHaoS">[Ebay] Disney's Le Roi Lion pour Super Nintendo/SNES boxed (no manual) PAL</a>
            <label>Complet in box</label>
            <a href="https://www.ebay.fr/itm/Super-Nintendo-Le-Roi-Lion-PAL-FAH-SNES-Super-NES-JRF/233491319975?hash=item365d2acca7:g:ErYAAOSwQY9eQYJb">[Ebay] Super Nintendo Le Roi Lion [PAL-FAH] SNES Super NES *JRF*</a>
        </div>
    </div>

    <?php include("_footer.php");?>
</main>

</body>
</html>