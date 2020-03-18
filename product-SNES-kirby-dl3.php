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
<!--header section-->
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
<!--main section-->
<main>
    <!--name of the game (brand, platform, game name)-->
    <h1 class="product-game-title"><a href="#" title="Home">Home/</a><a href="#" title="Nintendo-SNES">Nintendo-SNES/</a>Kirby DreamLand 3</h1>
    <hr>
    <div class="product-img-and-description">
        <!--game picture-->
        <div class="product-img-container">
            <div class="product-image-cotation-bloc">
                <img src="Images/games/snes/kirby-dl3-snes.png" class="game-image" alt="KIRBY'S DREAM LAND 3">
                <span class="product-cotation-box">+0%</span>
            </div>
        </div>
        <!--info section (global)-->
        <div class="product-description-container">
            <!--game description-->
            <div class="product-game-description">
                <p>Kirby's Dream Land 3 is a platformer video game developed by HAL Laboratory and published by Nintendo for the Super Nintendo Entertainment System. Starring Kirby, it is the fifth installment in the Kirby series and the third game under the Kirby's Dream Land name.</p>
            </div>
            <!--info about platform, year, platform & price-->
            <div class="product-platform-price-container">
                <div class="product-platform-years">
                    <h3>Platform: </h3>
                    <p>Nintendo SNES</p>
                    <h3>Years: </h3>
                    <p>1997</p>
                </div>
                <div class="product-cotation-price">
                    <h3>Prices: </h3>
                    <p>55€ (Loose)</p>
                    <p>83€ (Loose)</p>
                    <p>135€ (In box)</p>
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
            <iframe src="https://www.youtube.com/embed/UlPlxkYSykY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!--link section-->
        <div class="product-link-container">
            <h3>Buy one online:</h3>
            <label>Loose</label>
            <a href="https://www.ebay.fr/itm/Kirbys-Dream-Land-3-for-Super-Nintendo-SNES-PAL-English/223840620263?hash=item341df0cee7:g:1McAAOSwJ4hY~pwB" title="[Ebay] Kirby's Dream Land 3 pour Super Nintendo SNES PAL Anglais">[Ebay] Kirby's Dream Land 3 pour Super Nintendo SNES PAL Anglais</a>
            <label>In box</label>
            <a href="https://www.ebay.fr/itm/Kirbys-Dream-Land-3-Super-Nintendo-Entertainment-System-1997-VG-CART-ONLY/143537967613?_trkparms=aid%3D1110004%26algo%3DSPLICE.COMP%26ao%3D1%26asc%3D20200220094952%26mei" title="[Ebay] Kirby's Dream Land 3 (Super Nintendo Entertainment System, 1997) VG - CART">[Ebay] Kirby's Dream Land 3 (Super Nintendo Entertainment System, 1997) VG - CART</a>
            <label>Complet in box</label>
            <a href="https://www.ebay.fr/itm/KIRBYS-DREAM-LAND-3-SNES-SUPER-NINTENDO-GAME/352465270037?hash=item5210913515:g:CaYAAOSwIlBeX5mp" title="[Ebay] KIRBY'S DREAM LAND 3 SNES SUPER NINTENDO GAME">[Ebay] KIRBY'S DREAM LAND 3 SNES SUPER NINTENDO GAME</a>
        </div>
    </div>

    <?php include("_footer.php");?>
</main>

</body>
</html>