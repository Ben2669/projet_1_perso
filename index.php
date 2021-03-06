<?php
$message = '';
if ($_POST) {
    $error = array();
    if (empty($_POST["userName"])) {
        $error['userName1'] = "Name is required";
    } else {
        $userName = trim($_POST['userName']);
    }
    if (empty($_POST["userEmail"])) {
        $error['userEmail1'] = "Email is required";
    } else {
        $userEmail = trim($_POST['userEmail']);
        if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            $error['userEmail1'] = "Invalid email format";
        }
    }
    if (!empty($_POST["platformChoice"])) {
        $platformChoice = $_POST['platformChoice'];
    }
    if (!empty($_POST["message"])) {
        $message = trim($_POST['message']);
    }
    if (count($error) == 0) {
        header("Location: /php/subscribe_success.php?userName=$userName&userEmail=$userEmail");
    }
}
$title = "Retro Invader";
$css = "/css/index_style.css";
include("php/_header.php");
?>
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
                <a href="php/products/super-mario-bros.php" class="button">MORE INFO</a>
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
                <a href="php/products/street-fighter-2.php" class="button">MORE INFO</a>
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
                <a href="php/products/sonic-the-hedgehog-2.php" class="button">MORE INFO</a>
            </div>
        </section>
    </section>
    <section class="platforms-homepage">
        <div class="heading-with-background">
            <h2 class="platforms-title">Select your platform</h2>
        </div>
        <div class="products-container-homepage">
            <a href="php/platforms/genesis.php">
                <div class="platform-container sega-megadrive">
                    <span class="number-of-games">2 JEUX</span>
                    <h3>Sega Genesis</h3>
                </div>
            </a>
            <a href="php/platforms/nes-classic.php">
                <div class="platform-container nes-classic">
                    <span class="number-of-games">1 JEUX</span>
                    <h3>NES Classic</h3>
                </div>
            </a>
            <a href="php/platforms/dreamcast.php">
                <div class="platform-container dreamcast">
                    <span class="number-of-games">1 JEUX</span>
                    <h3>Dreamcast</h3>
                </div>
            </a>
            <a href="php/platforms/nintendo-64.php">
                <div class="platform-container nintendo-64">
                    <span class="number-of-games">3 JEUX</span>
                    <h3>Nintendo 64</h3>
                </div>
            </a>
            <a href="php/platforms/arcade.php">
                <div class="platform-container arcade">
                    <span class="number-of-games">2 JEUX</span>
                    <h3>Arcade</h3>
                </div>
            </a>
            <a href="php/platforms/super-nintendo.php">
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
    <form novalidate class="contact-homepage" method="post" target="">
        <div class="heading-with-background">
            <h2>Subscribe to our newsletter!</h2>
        </div>
        <label for="name" class="first-form-element">
            <input required <?php if (isset($userName)) echo "value='$userName'"; if (isset($error['userName1'])) echo 'id="border-error"'; ?> name="userName" type="text" placeholder="Name">
        </label>
        <div class="text-error"><?php if (isset($error['userName1'])) echo $error['userName1']; ?></div>
        <label for="email">
            <input required <?php if (isset($userEmail)) echo "value='$userEmail'"; if (isset($error['userEmail1'])) echo 'id="border-error"';?> name="userEmail" type="text" placeholder="Email Address">
        </label>
        <div class="text-error"><?php if (isset($error['userEmail1'])) echo $error['userEmail1']; ?></div>
        <label for="platform_choice">
            <select name="platformChoice">
                <option value="default">Only interested in a specific platform? Choose here!</option>
                <?php
                $platforms = [
                    'Genesis',
                    'NES Classic',
                    'Dreamcast',
                    'Nintendo 64',
                    'Arcade',
                    'Super Nintendo',
                ];
                function sortPlatforms($platformsArray)
                {
                    sort($platformsArray);
                    foreach ($platformsArray as $platformsArrayValue) {
                        echo "<option value='$platformsArrayValue'>$platformsArrayValue</option>";
                    };
                }
                ;
                sortPlatforms($platforms);
                ?>
            </select>
        </label>
        <label for="message">
            <textarea  name="message" placeholder="Want to know more about a specific game? Tell us here!"><?php if (isset($message)) echo $message;?></textarea>
        </label>
        <button type="submit">SUBSCRIBE!</button>
    </form>
</main>
<?php include_once("php/_footer.php"); ?>