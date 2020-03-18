<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Site d'argus des jeux vidéo rétro">
    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altered Beast</title>
    <link rel="stylesheet" href="produits_style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<!--header section-->
<?php include("_header.php"); ?>
<!--main section-->
<main>
    <!--name of the game-->
    <h1 class="product-game-title"><a href="#" title="#">#/</a><a href="#" title="#">#/</a>#</h1>
    <hr>
    <div class="product-img-and-description">
        <!--game picture-->
        <div class="product-img-container">
            <img src="Images/games/#" class="game-image" alt="nom du jeu">
        </div>
        <!--info section (global)-->
        <div class="product-description-container">
            <!--game description-->
            <div class="product-game-description">
                <p>#</p>
            </div>
            <!--info about platform, year, platform & price-->
            <div class="product-platform-price-container">
                <div class="product-platform-years">
                    <h3>Platform: </h3>
                    <p>#</p>
                    <h3>Years: </h3>
                    <p>#</p>
                </div>
                <div class="product-cotation-price">
                    <h3>Prices: </h3>
                    <p>#€ (Loose)</p>
                    <p>#€ (In box)</p>
                    <p>#€ (Complet in box)</p>
                    <div class="product-cotation-mobile">
                        <h3>Cotation: </h3>
                        <p class="cotation-positiv">#%</p>
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
            <iframe class="product-video" src="https://www.youtube.com/embed/jFiTLTSwAgw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!--link section-->
        <div class="product-link-container">
            <h3>Buy one online:</h3>
            <label>Loose</label>
            <a href="#">#</a>
            <label>In box</label>
            <a href="#">#</a>
            <label>Complet in box</label>
            <a href="#">#</a>
        </div>
    </div>

</main>
<?php include("_footer.php");?>
</body>
</html>