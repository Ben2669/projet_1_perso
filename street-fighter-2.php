<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <title>Street Fighter 2</title>
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
    <h1 class="product-game-title"><a href="index.php" title="Home">Home/</a><a href="super-nintendo.php" title="Nintendo-SNES">Nintendo-SNES/</a>Street Fighter 2</h1>
    <hr>
    <div class="product-img-and-description">
        <!--game picture-->
        <div class="product-img-container">
            <div class="product-image-cotation-bloc">
                <img src="Images/games/snes/SF2_JPN_flyer.jpg" class="game-image" alt="Street Fighter 2">
                <span class="product-cotation-box">+13%</span>
            </div>
        </div>
        <!--info section (global)-->
        <div class="product-description-container">
            <!--game description-->
            <div class="product-game-description">
                <p>Street Fighter II: The World Warrior[a] is a competitive fighting game developed by Capcom and originally released for arcade systems in 1991.</p>
            </div>
            <!--info about platform, year, platform & price-->
            <div class="product-platform-price-container">
                <div class="product-platform-years">
                    <h3>Platform: </h3>
                    <p>SNES</p>
                    <h3>Years: </h3>
                    <p>1991</p>
                </div>
                <div class="product-cotation-price">
                    <h3>Prices: </h3>
                    <p>21€ (Loose)</p>
                    <p>136€ (Complet in box)</p>
                    <p>189€ (Mint)</p>
                    <div class="product-cotation-mobile">
                        <h3>Cotation: </h3>
                        <p class="cotation-positiv">+13%</p>
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
            <iframe class="product-video" src="https://www.youtube.com/embed/UyRex_mgbxU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!--link section-->
        <div class="product-link-container">
            <h3>Buy one online:</h3>
            <label>Loose</label>
            <a href="https://www.ebay.fr/itm/STREET-FIGHTER-II-2-SUPER-NINTENDO-Jeu-SUPER-NES-SNES-version-PAL-FAH/253040366760?hash=item3aea6194a8:g:N34AAOSwy3NZZPfT">[Ebay] STREET FIGHTER II 2 - SUPER NINTENDO - Jeu SUPER NES SNES version PAL FAH (loose)</a>
            <label>In box</label>
            <a href="https://www.ebay.fr/itm/Super-Street-Fighter-II-2-Nintendo-Super-NES-SNES-Pal/263696813843?hash=item3d658e0f13:g:X8IAAOSwgSta~sOi">[Ebay] Super Street Fighter II 2 Nintendo Super NES SNES Pal</a>
            <label>Complet in box</label>
            <a href="https://www.ebay.fr/itm/Jeu-super-nintendo-street-fighter-2-fah-pal-snes-excellent-etat-MINT/202917926082?hash=item2f3ed9d4c2:g:37oAAOSwunNeNxOo">[Ebay] Jeu super nintendo street fighter 2 fah pal snes excellent état MINT</a>
        </div>
    </div>

    <?php include("_footer.php");?>
</main>

</body>
</html>