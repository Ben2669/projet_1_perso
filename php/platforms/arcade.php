<?php
$title = "Arcade";
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
                <div class="bloc street-fighter-container"><span>Arcade</span><h3>Street Fighter 2</h3><a href="/php/products/street-fighter-2.php" class="button button-on-hover">See More</a></div>
                <div class="bloc metal-slug-container"><span>Arcade</span><h3>Metal Slug</h3><a href="/php/products/metal-slug.php" class="button button-on-hover">See More</a></div>
            </div>

        </section>
</main>

<?php include("../_footer.php");?>
