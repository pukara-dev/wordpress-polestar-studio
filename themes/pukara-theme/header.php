<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="site-logo">
            <?php if (function_exists('the_custom_logo')) {
                the_custom_logo();
            } else {
                echo 'Logo here'; // Fallback text if the custom logo is not set
            } ?>
        </div>
        <div class="header-navigation-wrapper">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'primary',
                    'menu_class' => 'primary-menu',
                    'container' => false,
                )
            ); ?>
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                &#9776;
            </button>
        </div>
    </header>
    <?php wp_footer(); ?>
</body>

</html>