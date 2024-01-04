<?php

/**
 * Header template
 */
$classes = [
    'tgk-header',
];

$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
$phone_site = get_field("phone_site", "options");
?>

<header class="<?php echo implode(' ', $classes) ?>">
    <div class="container">
        <div class="tgk-header-inner">
            <div class="tgk-header-logo">
                <?php
                if (has_custom_logo()) {
                    echo '<a href="/"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
                ?>
            </div>
            <div class=" tgk-header-menu">
                <?php
                if (has_nav_menu('main-menu')) {
                    wp_nav_menu([
                        'theme_location' => 'main-menu',
                        'menu_class' => 'main-menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'bootstrap' => false
                    ]);
                }
                ?>
            </div>

            <div class="d-md-none d-flex tgk-menu-open">
                <span id="tgk-menu-open"><img src="<?= get_template_directory_uri() . '/resources/assets/images/menu-svgrepo-com.svg' ?>" alt="Icon Menu" /></span>
                <span id="tgk-menu-close"><img class="close" src="<?= get_template_directory_uri() . '/resources/assets/images/close-circle-svgrepo.svg' ?>" alt="Icon Close" /></span>
            </div>
        </div>
    </div>
</header> <!-- #site-header -->