<?php
$title = "Aladdin";
$css = "/css/produits_style.css";
include("../_header.php"); ?>

<main>
    <!--name of the game-->
    <h1 class="product-game-title"><a href="/index.php" title="Home">Home/</a><a href="/php/platforms/super-nintendo.php" title="Nintendo-SNES">Nintendo-SNES/</a>Alladin</h1>
    <hr>
    <div class="product-img-and-description">
        <!--game picture-->
        <div class="product-img-container">
            <div class="product-image-cotation-bloc">
                <img src="/Images/games/snes/Disney's_Aladdin_(SNES)_cover_art.jpg" class="game-image" alt="Aladdin">
                <span class="product-cotation-box">+0%</span>
            </div>
        </div>
        <!--info section (global)-->
        <div class="product-description-container">
            <!--game description-->
            <div class="product-game-description">
                <p>Disney's Aladdin (アラジン, Arajin) is a 1993 platformer video game developed and published by Capcom for the Super Nintendo Entertainment System, based on the 1992 animated Disney film of the same name. Disney's Aladdin is a 2D side-scrolling video game in which the player controls Aladdin and his monkey Abu.</p>
            </div>
            <!--info about platform, year, platform & price-->
            <div class="product-platform-price-container">
                <div class="product-platform-years">
                    <h3>Platform: </h3>
                    <p>SNES</p>
                    <h3>Years: </h3>
                    <p>1993</p>
                </div>
                <div class="product-cotation-price">
                    <h3>Prices: </h3>
                    <?php
                    $priceList = ['Loose' => 20, 'In box' => 35, 'Complet in box' =>50];
                    foreach ($priceList as $types => $valueInEuro) {
                        echo "<p>$valueInEuro"."€ ($types)</p>";
                    }
                    ?>
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
            <iframe class="product-video" src="https://www.youtube.com/embed/_inY8qT5UT4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!--link section-->
        <div class="product-link-container">
            <h3>Buy one online:</h3>
            <label>Loose</label>
            <a href="https://www.ebay.fr/itm/Jeu-ALADDIN-pour-Super-Nintendo-SNES-version-PAL/164070137423?_trkparms=ispr%3D1&hash=item2633579e4f:g:c2UAAOSwT6lePFCx&enc=AQAEAAACQBPxNw%2BVj6nta7CKEs3N0qVuO0sh1MDab5c3%2BjTr9nZxy7MX%2FgB8nPSEnBsQT1HIg5woktiB09F4FkicrR33QEanc8ubHUTYiT5MLQv6YCIlXf1J0HZZg%2BNtrrPJMZzUWfgp%2BIAL1Mmjl91JUFZhhYfdrqyHTNsgJEwIpHeaNVXjYwzp5Ty6XHXLBClp11gn%2FMHHWt1sHbGOl6KyLxcRZ2XgBBRVmJV5vnpoRafnXh4gp%2BsWXxvZDfYLcIWeOjJD4UhXS4wpcsqRyQodi5dR2QRTwbxAta2PSbAiuY8kcVcup%2BaQzvxHuLIk7DcmKU26er3NppwUbbzMD2TGdJCb8BCzk8bPn88JvOIBVdAN9VEY8auJWrPjTJyr09N%2B3vzvJr8ERDdcGVwuBla%2BA8nk1oLIPQo7FSctDOncD8WZuOHeAlqItYHVkdtDNQ4E86qbRKsNrjRBU2zsvLJ4QnEaLM0%2BJBbFoM2dr%2FGjk1esLL7sYmCm5vvRF%2FwSNQk4XlcTBDbkDXGi7Z6HYw7czxMf%2BTiBrqeH9xbbBfwwrxQaS8F5UxawuMkl6fi%2FALD0oAOZ5j0LXrqu8UnoH9n%2FN9wjjV670z8o5PZT0ueFtVuR5rGiwDbNTVMHSEVp6PQ%2B04EiKfOkd1OEEieTc%2FQ5mqNsV0qv0h8tqI4YL59h3WehGwUpeEbTm44n4bfb6I5yLiLvCPpoGjEiiNgiO4IRxlu%2FTKlMh%2BXDetqAlxroOZlRs%2BYp4xV5Q43simx%2BsN43YJcBlw%3D%3D&checksum=1640701374234cba9a8d08bb4f1fab1234081103fcfc">[Ebay] Jeu ALADDIN pour Super Nintendo SNES version PAL (loose)</a>
            <label>In box</label>
            <a href="https://www.ebay.fr/itm/Snes-Super-Nintendo-Aladdin-Pal-Video-Game-No-Instructions/173970892639?hash=item288179275f:g:FegAAOSw4wRdMwWP">[Ebay] SNES Super Nintendo Aladdin PAL jeu vidéo sans instructions</a>
            <label>Complet in box</label>
            <a href="https://www.ebay.fr/itm/Aladdin-FRA-PAL-Super-nintendo-SNES/324098028314?hash=item4b75bf731a:g:JmkAAOSwOlBeZlDf">[Ebay] Aladdin - FRA - PAL - Super nintendo SNES</a>
        </div>
    </div>
</main>
<?php include("../_footer.php");?>
