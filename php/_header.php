<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title;?></title>
    <meta lang="en">
    <meta name="title" content="Retro Invaders">
    <meta charset="UTF-8">
    <meta name="description" content="Retro Invaders helps you to find your favorite retro games">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href=<?php echo $css;?>>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900|Roboto:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/header_style.css" />
    <link rel="stylesheet" type="text/css" href="/css/footer_style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">
    <link rel='stylesheet' id='thb-self-hosted-1-css' href="/gilroy/gilroy.css">
</head>
<body>
<div id="nav-mobile-container" class="nav-mobile-full no-content">
    <div class="close-menu-mobile no-content">
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <nav class="mobile-nav">
        <ul>
            <a href="/php/plateformes.php"><li>Platforms</li></a>
            <a href="/php/about_us.php"><li>About Us</li></a>
            <a href="/php/contact.php"><li>Contact</li></a>
        </ul>
    </nav>
</div>
<header>
    <section class="logo">
        <a href="/index.php">
            <img class ="logo_smartphone" alt="logo_retro_invaders_smartphone" src="/Images/Autres/blog-loco-green.png" height="110" width="auto">
            <div class="logo-header"></div>
        </a>
    </section>
    <section class="menu_burger_container">
        <article id="burger-menu-click" class="menu_burger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </article>
    </section>
    <nav>
        <ul>
            <li><a href="/php/plateformes.php">Platforms</a></li>
            <li><a href="/php/about_us.php">About Us</a></li>
            <li><a href="/php/contact.php">Contact</a></li>
        </ul>
    </nav>
</header>