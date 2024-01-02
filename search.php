<?php



/**



 * The template for displaying search results pages



 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result



 * @package tgk



 */



get_header();



?>



    <main id="primary" class="site-main lib-filter-wrap">



        <!--Start news hero header-->



		<?= tgk_template_news_hero_header(); ?>



        <!--End news hero header-->



		<?php



		if ( have_posts() ) :

			?>

            <div class="wrap__blog">

                <div class="wrap-content__blog">

					<?php

					get_template_part( 'template-parts/content-loop', get_post_type() );



					echo '<div class="nav-filter-wrap">';



					tgk_the_posts_navigation( [



						'prev_text' => tgk_svg_icon( 'arrow_prev' ) . __( 'Prev' ),



						'next_text' => __( 'Next' ) . tgk_svg_icon( 'arrow_next' ),



					] );



					echo '</div>';

					?>

                </div>

                <div class="wrap-sidebar-blog">

					<?php get_template_part('template-parts/sidebar/sidebar','form-search'); ?>

					<?php get_template_part('template-parts/sidebar/sidebar','new-post'); ?>

<!--					--><?php //get_template_part('template-parts/sidebar/sidebar','category'); ?>

					<?php get_template_part('template-parts/sidebar/sidebar','tags'); ?>

                </div>

            </div>

		<?php

		else :



			get_template_part( 'template-parts/content', 'none' );



		endif;



		?>



    </main><!-- #main -->



<?php



get_footer();





