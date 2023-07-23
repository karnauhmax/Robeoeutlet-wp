<!DOCTYPE html>
<html lang="en" class="page">
 <head>
 <meta charset="<?php bloginfo('charset')?>">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <meta name="theme-color" content="#111111">
 <title>Marshall</title>

 <link rel="preload" fetchpriority="high" as="image" href="<?php bloginfo('template_url'); ?>/assets/img/content/hero.webp" type="image/webp">

 <?php wp_head(); ?>
</head>


<body <?php if (is_404()) { echo 'data-page="not-found"'; } ?> class="page__body">
  <div class="site-container">
  <?php if (!is_404()) { ?>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a href="/" class="logo header__logo header__logo-desktop">
                    <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" class="image" width="208" height="30" alt="Robeoutlet">
                </a>
                <div class="header__info" data-menu>
                    <a href="/" class="logo header__logo header__logo-mob">
                        <img loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" class="image" width="208" height="30" alt="Robeoutlet">
                    </a>
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__item">
                                <a href="#" class="menu__link bold-on-hover" data-uppercase="FRAMELESS DOORS" data-content="frameless doors">
                                    frameless doors
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link bold-on-hover" data-uppercase="FRAMED DOORS" data-content="framed doors">
                                    framed doors
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="#" class="menu__link bold-on-hover" data-uppercase="WARDROBE INSERTS" data-content="wardrobe inserts">
                                    wardrobe inserts
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <a href="index.html#reviews" class="header__link header__reviews header__link-mob" data-goto=".reviews">
                        reviews
                    </a>
                    <a href="cart.html" class="header__link header__cart header__link-mob">
                        cart (0)
                    </a>
                </div>
                <a href="index.html#reviews" class="header__link header__reviews header__link-desktop" data-goto=".reviews">
                    reviews
                </a>
                <a href="cart.html" class="header__link header__cart header__link-desktop">
                    cart (0)
                </a>
                <button class="burger" aria-label="Open Menu" aria-expanded="false" data-burger>
                    <span class="burger__line"></span>
                </button>
            </div>
        </div>
    </header>
<?php } ?>
