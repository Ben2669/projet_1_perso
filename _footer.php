<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" type="text/css" href="footer_style.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
<footer>
    <section class="items">
        <article class="hidden">
            <a href="plateformes.php">
                <div>Platforms</div>
            </a>
        </article>
        <article class="hidden">
            <a href="produits.php">
                <div>Products</div>
            </a>
        </article>
        <article class="hidden">
            <a href="about_us.php">
                <div>About Us</div>
            </a>
        </article>
        <article class="hidden">
            <a href="index.php">
                <div class="logo_retro_invaders">
                    <img class="logo_desktop" alt="logo_retro_invaders_desktop" src="Images/Autres/blog-loco-green.png" height="150" width="auto">
                </div>
            </a>
        </article>
        <article class="hidden">
            <a href="contact.php">
                <div>Contact</div>
            </a>
        </article>
        <article>
            <div>FAQ</div>
        </article>

        <article>
            <div>Legal Mentions</div>
        </article>
    </section>

    <section class="logo-rs-footer-container">
        <article>
            <a href="https://www.instagram.com/?hl=fr">
                <img alt="logo_instagram" src="Images/Autres/instagram-green.png" height="40" width="auto">
            </a>
        </article>

        <article>
            <a href="https://twitter.com/?lang=fr">
                <img alt="logo_twitter" src="Images/Autres/twitter-green.png" height="40" width="auto">
            </a>
        </article>

        <article>
            <a href="https://fr-fr.facebook.com/">
                <img alt="logo_facebook" src="Images/Autres/facebook-green.png" height="40" width="auto">
            </a>
        </article>

        <article>
            <a href="https://www.pinterest.fr/">
                <img alt="logo_pinterest" src="Images/Autres/pinterest-green.png" height="40" width="auto">
            </a>
        </article>

    </section>
</footer>

<script type="text/javascript">
    jQuery(function(){
        var div = jQuery("#burger-menu-click"), div = jQuery("#nav-mobile-container"), div = jQuery(".close-menu-mobile");
        jQuery("#burger-menu-click").click(function(){
            jQuery("#burger-menu-click").toggleClass ("no-content");
            jQuery("#nav-mobile-container").toggleClass ("no-content");
            jQuery(".close-menu-mobile").toggleClass ("no-content");
        });
        jQuery(".close-menu-mobile").click(function(){
            jQuery("#burger-menu-click").toggleClass ("no-content");
            jQuery("#nav-mobile-container").toggleClass ("no-content");
            jQuery(".close-menu-mobile").toggleClass ("no-content");
        });
    });
</script>

</body>