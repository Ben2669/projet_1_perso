<?php include("php/_header.php"); ?>

<main>
    <section class="banner-homepage">

        <div class="homepage-banner-content-container">
            <h2>Play your favorite retro games</h2>
            <p>Retro Invader helps you to get your favorite retro games and to have all the informations about prices evolution.</p>
        </div>

    </section>

    <section class="pick-game-homepage">

        <div class="heading-with-background">
            <h2>Pick a game!</h2>
        </div>

        <section class="align-left super-mario-bg">
            <div class="game-content-container">
                <div class="game-name-picture super-mario-bros"></div>
                <div class="game-category">
                    <span class="nintendo">NINTENDO</span>
                    <span class="tiret">-</span>
                    <span class="game-platform">NES</span>
                    <span class="tiret">-</span>
                    <span class="release-date">1993</span>
                </div>
                <p>Nintendo created platform games and got it at its best with Super Mario Bros. 2. Experience now one of the best platformers ever created!</p>
                <a href="php/super-mario-bros.php" class="button">MORE INFO</a>
            </div>
        </section>

        <section class="align-right street-fighter-bg">
            <div class="game-content-container">
                <div class="game-name-picture street-fighter"></div>
                <div class="game-category">
                    <span class="game-platform">ARCADE</span>
                    <span class="tiret">-</span>
                    <span class="release-date">1992</span>
                </div>
                <p>Ryu, CHun-Li, M. Bison... choose your favorite street fighter and battleyour friend!</p>
                <a href="php/street-fighter-2.php" class="button">MORE INFO</a>
            </div>
        </section>

        <section class="align-left sonic-bg">
            <div class="game-content-container">
                <div class="game-name-picture sonic"></div>
                <div class="game-category">
                    <span class="nintendo">SEGA</span>
                    <span class="tiret">-</span>
                    <span class="game-platform">MEGADRIVE</span>
                    <span class="tiret">-</span>
                    <span class="release-date">1992</span>
                </div>
                <p>With Sonic the Hedgehog, Sega became a real concurrent to Nintendo’s Mario.</p>
                <a href="php/sonic-the-hedgehog-2.php" class="button">MORE INFO</a>
            </div>
        </section>

    </section>

    <section class="platforms-homepage">

        <div class="heading-with-background">
            <h2 class="platforms-title">Select your platform</h2>
        </div>

        <div class="products-container-homepage">

            <a href="php/genesis.php">
                <div class="platform-container sega-megadrive">
                    <span class="number-of-games">2 JEUX</span>
                    <h3>Sega Genesis</h3>
                </div>
            </a>

            <a href="php/nes-classic.php">
                <div class="platform-container nes-classic">
                    <span class="number-of-games">1 JEUX</span>
                    <h3>NES Classic</h3>
                </div>
            </a>

            <a href="php/dreamcast.php">
                <div class="platform-container dreamcast">
                    <span class="number-of-games">1 JEUX</span>
                    <h3>Dreamcast</h3>
                </div>
            </a>

            <a href="php/nintendo-64.php">
                <div class="platform-container nintendo-64">
                    <span class="number-of-games">3 JEUX</span>
                    <h3>Nintendo 64</h3>
                </div>
            </a>

            <a href="php/arcade.php">
                <div class="platform-container arcade">
                    <span class="number-of-games">2 JEUX</span>
                    <h3>Arcade</h3>
                </div>
            </a>

            <a href="php/super-nintendo.php">
                <div class="platform-container super-nintendo">
                    <span class="number-of-games">4 JEUX</span>
                    <h3>Super Nintendo</h3>
                </div>
            </a>
        </div>

        <a href="php/plateformes.php" class="button">SEE ALL</a>

    </section>

    <section class="about-us-homepage">

        <div class="about-us-homepage-content-container">
            <h2>Let's meet</h2>
            <p>Video game is our passion since we were kids and we love to share it.</p>
            <a href="php/about_us.php" class="button pink-button">KNOW MORE</a>
        </div>

    </section>

    <section class="contact-homepage">

        <div class="heading-with-background">
            <h2>Any questions?</h2>
        </div>

        <input class="first-form-element" type="text" placeholder="Name">
        <input type="text" placeholder="Email Address">
        <input type="dropdown" placeholder="How can we help?">
        <textarea placeholder="Anything else?"></textarea>

        <button type="submit">SUBMIT</button>

    </section>


</main>
<?php include("php/_footer.php");?>