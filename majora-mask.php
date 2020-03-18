<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>Retro Invader</title>
    <meta lang="en">
    <meta name="title" content="Retro Invaders">
    <meta charset="UTF-8">
    <meta name="description" content="Retro Invaders helps you to find your favorite retro games">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="produits_style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900|Roboto:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="header_style.css" />
    <link rel="stylesheet" type="text/css" href="footer_style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">
    <link rel='stylesheet' id='thb-self-hosted-1-css' href="gilroy/gilroy.css">
</head>

<body>

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
    <h1 class="product-game-title"><a href="index.php" title="Home">Home/</a><a href="nintendo-64.php" title="Nintendo-64">Nintendo-64/</a>Zelda Majora's Mask</h1>
    <hr>
    <div class="product-img-and-description">
        <!--game picture-->
        <div class="product-img-container">
            <div class="product-image-cotation-bloc">
                <img src="Images/games/N64/The_Legend_of_Zelda_-_Majora's_Mask_Box_Art.jpg" class="game-image" alt="Zelda Majora's Mask">
                <span class="product-cotation-box">-15%</span>
            </div>
        </div>
        <!--info section (global)-->
        <div class="product-description-container">
            <!--game description-->
            <div class="product-game-description">
                <p>The Legend of Zelda: Majora's Mask is an action-adventure game developed and published by Nintendo for the Nintendo 64. It was released in 2000 as the sixth main installment in The Legend of Zelda series and was the second to use 3D graphics, following 1998's The Legend of Zelda: Ocarina of Time.</p>
            </div>
            <!--info about platform, year, platform & price-->
            <div class="product-platform-price-container">
                <div class="product-platform-years">
                    <h3>Platform: </h3>
                    <p>Nintendo 64</p>
                    <h3>Years: </h3>
                    <p>2000</p>
                </div>
                <div class="product-cotation-price">
                    <h3>Prices: </h3>
                    <p>39€ (Loose)</p>
                    <p>140€ (In box)</p>
                    <p>999€ (Complet in box)</p>
                    <div class="product-cotation-mobile">
                        <h3>Cotation: </h3>
                        <p class="cotation-negativ">-15%</p>
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
            <iframe class="product-video" src="https://www.youtube.com/embed/r_GJNdAdMtc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!--link section-->
        <div class="product-link-container">
            <h3>Buy one online:</h3>
            <label>Loose</label>
            <a href="https://www.ebay.fr/itm/The-legend-of-ZELDA-MAJORAS-MASK-jeu-nintendo-64-en-tres-bon-etat/264653839220?hash=item3d9e991b74:g:H~YAAOSwq~9eXSL5">The legend of ZELDA MAJORA'S MASK  , jeu nintendo 64 en très bon état</a>
            <label>Complet in box</label>
            <a href="https://www.ebay.fr/itm/Zelda-majoras-mask-Nintendo-64-comme-neuf-Near-Mint-Version-Pal-Eur/283811523393?hash=item42147c2b41:g:KuEAAOSwjVReaO4u">Zelda majora's mask Nintendo 64 comme neuf Near Mint Version Pal Eur</a>
            <label>Mint</label>
            <a href="https://www.ebay.fr/itm/Nintendo-64-ZELDA-MAJORAS-MASK-NEUF-NEW-SOUS-BLISTER-PAL-EUR/254249301955?hash=item3b327077c3:g:dW4AAOSw-3FZCvtB">Nintendo 64: ZELDA MAJORA'S MASK- NEUF/NEW SOUS BLISTER PAL EUR</a>
        </div>
    </div>

    <?php include("_footer.php");?>
</main>
</body>
</html>