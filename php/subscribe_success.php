<?php

$title = "Retro Invader";
$css = "/css/index_style.css";
include("_header.php");
?>

<main>
    <section>
        <h2>Thanks for subscribing <?php echo $_POST['userName'];?>!</h2>
        <div class="one-of-us">
            <img src="" alt="one_of_us.gif">
            <p>You're one of us now!</p>
            <img src="" alt="retro_invader_logo.jpg">
        </div>
        <p>Retro gaming community grows more and more each day! We'll send you some exciting news about it from now on to <?php echo $_POST['userEmail'];?> ;)</p>
    </section>
</main>

<?php include("_footer.php");?>
