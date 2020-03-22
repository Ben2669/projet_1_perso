<?php
$title = "Dreamcast";
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
                    <div class="bloc virtual-tennis-container"><span>Dreamcast</span><h3>Virtual Tennis</h3><a href="/php/products/virtual-tennis.php" class="button button-on-hover">See More</a></div>
                </div>

            </section>
    </main>

<?php include("../_footer.php");?>