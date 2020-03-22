<?php
$title = "Nintendo 64";
$css = "/css/plateformes_style.css";
include("../_header.php"); ?>

    <main>

        <section class="banner-platforms">
            <h1>Pick a game</h1>
            <p>Select your favorite game and get ready to play!</p>
        </section>

        <section class="nav-and-bloc-container">


            <nav class="nav-platforms">
                <h2>Select your platform</h2>

                <div class="nav-platforms-links-container">

                    <?php
                    $platforms = [
                        'genesis.php">Genesis',
                        'nes-classic.php">NES Classic',
                        'dreamcast.php">Dreamcast',
                        'nintendo-64.php">Nintendo 64',
                        'arcade.php">Arcade',
                        'super-nintendo.php">Super Nintendo',
                    ];
                    function sortPlatforms ($platformsArray)
                    {
                        sort($platformsArray);
                        foreach ($platformsArray as $platformsArrayValue) {
                            echo '<h2><a href="/php/platforms/'.$platformsArrayValue.'</a></h2>';
                        };
                    };
                    sortPlatforms($platforms);
                    ?>
                </div>

            </nav>

            <section>

                <div class="bloc-container">
                    <div class="bloc tloz-oot-container"><span>Nintendo 64</span><h3>TLoZ Ocarina of Time</h3><a href="/php/products/ocarina-of-time.php" class="button button-on-hover">See More</a></div>
                    <div class="bloc tloz-mm-container"><span>Nintendo 64</span><h3>TLoZ Majora's Mask</h3><a href="/php/products/majora-mask.php" class="button button-on-hover">See More</a></div>
                    <div class="bloc super-mario-64-container"><span>Nintendo 64</span><h3>Super Mario 64</h3><a href="/php/products/super-mario-64.php" class="button button-on-hover">See More</a></div>
                </div>

            </section>
    </main>

<?php include("../_footer.php");?>