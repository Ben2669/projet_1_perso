<?php
$title = "One of us!";
$css = "/css/index_style.css";
include("_header.php");
?>
<main>
    <section class="banner-homepage">
        <div class="homepage-banner-content-container">
            <h2>Thanks for subscribing <?php echo $_GET['userName'];?>!</h2>
        </div>

    </section>
    <section class="main-subscribe-content">
        <div class="thank-you">
            <img src="/Images/Autres/thnakyou.gif" alt="thank_you.gif">

        </div>
        <div class="user_email_text">
            <img src="https://raw.githubusercontent.com/WildCodeSchool/lyon-0320-golden-retro/dev/Images/Autres/retro-invaders-green.png" height="auto" width="250" alt="retro_invader_logo.jpg">
            <p>Retro gaming community grows more and more each day! We'll send you some exciting news about it from now on to <u><?php echo $_GET['userEmail'];?></u> ;)</p>
        </div>

    </section>
</main>

<?php include("_footer.php");?>
