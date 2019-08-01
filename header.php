
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"/>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class( ); ?>>
    <header id="header">
      <nav class="header-navigation">
        <div class="menu-hamburger" id="menuHamburger">
          <div class="menu-hamburger__line"></div>
          <div class="menu-hamburger__line"></div>
          <div class="menu-hamburger__line"></div>
        </div>
        <div class="row" style="display: flex">
          <div class="logo"><?php bloginfo('name'); ?></div>
        <?php wp_nav_menu(array(
              'theme_location' => 'header_menu',
              'container'       => false, 
              'menu_class'      => 'header-menu', 
              'echo'            => true,
              
            )); ?>
        </div>
        <div class="menu-side">
          <div class="menu-side__information"></div>
          <div class="menu-side__language"> 
            <div class="menu-side__active">EN</div>
            <div class="menu-side__language-drop">
              <div class="menu-side__choise">RU</div>
              <div class="menu-side__choise">UA</div>
            </div>
          </div>
        </div>
      
      <div class="header-menu-adaptive-wrapper" id="menuAdaptive">
        <?php wp_nav_menu(array(
          'theme-location'  => 'adaptive_menu',
          'container'       => false,
          'menu_class'      => 'header-menu-adaptive'
        )); ?>
        <div class="header-menu-adaptive-close" id="menuAdaptiveClose">
          <div class="header-menu-adaptive-close__line"></div>
          <div class="header-menu-adaptive-close__line"></div>
        </div>
      </div>
      </nav>
    </header>