<?php

/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package tgk
 */

echo "</div><!--End site wrap-->";
/**
 * tgk_hook_footer hook.
 * @see tgk_footer_template - 20
 */
do_action('tgk_hook_footer');

do_action('tgk_hook_menu_mobile');
wp_footer();
?>
</body>

</html>