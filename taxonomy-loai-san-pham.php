<?php /* Template Name: Home Template */ ?>

<?php get_header() ?>

<div class="site-main">
    <div class="site_breadcrumb" style="background:#f9f9f9; clear:both">
        <div class="container">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
            }
            ?>
        </div>
    </div>

    <div style="height:auto; clear:both">
        <?php if (get_field('banner_category', 'option')) { ?>
            <img style="width:100%" src="<?= get_field('banner_category', 'option') ?>" alt="POLOS">
        <?php } ?>
    </div>


    <div style="height:auto; clear:both">
        <div class="container">
            <p style="height:30px; clear:both"></p>
            <div class="row">
                <div class="col-sm-3">
                    <style>
                        .cothebanquantam {
                            display: block;
                            height: auto
                        }

                        @media screen and (max-width: 700px) {
                            .cothebanquantam {
                                display: none
                            }
                        }
                    </style>
                    <div class="cothebanquantam">
                        <div style="height: auto; border-color:#DDD; border-style:solid; border-width:1px; margin-bottom:30px">
                            <div style="height:45px; border-bottom-color:#DDD; border-bottom-style:solid; border-bottom-width:1px">
                                <p style="font-weight:700; font-size:18px; font-family:Verdana; padding-top:9px; padding-left:10px; color:#111">CATEGORIES</p>
                            </div>

                            <div class="list-categories" style="height:auto; margin-top:10px">
                                <?php
                                $terms = get_terms(array(
                                    'taxonomy'   => 'loai-san-pham',
                                    'hide_empty' => true,
                                ));
                                if ($terms) {
                                    foreach ($terms as $key => $term) {
                                        $args = array(
                                            'post_type' => 'san-pham',
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'loai-san-pham',
                                                    'field' => 'slug',
                                                    'terms' => $term->slug
                                                )
                                            )
                                        );
                                ?>
                                        <div class="list-categories__wrap">
                                            <a style="color:#111" class="toggle-cat" href="javascript:void(0)"><?= $term->name ?></a>
                                            <?php
                                            $my_query = new WP_Query($args);
                                            if ($my_query->have_posts()) {
                                                echo '<div class="list-wrap-product">';
                                                while ($my_query->have_posts()) : $my_query->the_post();
                                            ?>
                                                    <p><a style="color:#333" href="<?= get_permalink() ?>"><?= get_the_title() ?></a></p>
                                            <?php
                                                endwhile;
                                                echo '<p><a href="' . get_term_link( $term->term_id, "loai-san-pham" ) . '">+ Open...</a></p>';
                                                echo '</div>';
                                            } else {
                                                echo "<p>Xin lỗi, không có sản phẩm nào để hiển thị!</p>";
                                            }
                                            wp_reset_postdata();
                                            ?>
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>

                            <p style="clear:both"></p>
                        </div>
                        <p style="font-weight:600; margin-bottom:6px; margin-top:30px; color:#333">Sản phẩm nổi bật</p>
                        <div style="height: auto; border:#DDD; border-style:solid; border-width:1px;margin-bottom: 30px; border-bottom:none">
                            <?php
                            $args = [
                                'post_type' => 'san-pham',
                                'posts_per_page' => 6,
                                'post_status' => 'publish'
                            ];
                            $the_query = new WP_Query($args);
                            if ($the_query->have_posts()) {
                                while ($the_query->have_posts()) {
                                    $the_query->the_post();
                            ?>
                                    <div style="height: auto; border-bottom:#DDD; border-bottom-style:solid; border-bottom-width:1px">
                                        <div style="height:auto; padding:5px">
                                            <div style="width:30%; height:auto; float:left; padding-top:8px; padding-bottom:12px">
                                                <a href="<?= get_permalink() ?>">
                                                    <?= get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'alignleft')); ?>
                                                </a>
                                            </div>
                                            <div style="width:70%; float:left; padding-top:8px; padding-bottom:12px">
                                                <p style="margin:0px; padding-left:6px">
                                                    <a style="color:#111" href="<?= get_permalink() ?>"><?= get_the_title() ?></a>
                                                </p>
                                                <p style="margin:0px; padding-left:6px; color:#999">Liên hệ</p>
                                            </div>
                                        </div>
                                        <p style="clear:both; margin:0px"></p>
                                    </div>
                            <?php
                                }
                            } else {
                                esc_html_e('Sorry, no posts matched your criteria.');
                            }
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>


                <div class="col-sm-9">
                    <?php
                    $tax = get_queried_object();
                    ?>
                    <div style="height:auto">
                        <div style="height:45px; border-bottom-color:#DDD; border-bottom-style:solid; border-bottom-width:1px; background:#f9f9f9">
                            <h1 style=" padding-top:10px; padding-left:10px; text-transform:uppercase; font-size:21px"><?= $tax->name ?></h1>
                        </div>

                        <div style="height:auto; margin-top:30px; margin-bottom:30px">
                            <div class="row">
                                <style>
                                    .divsanpham {
                                        width: 33.33%;
                                        padding-left: 15px;
                                        padding-right: 15px
                                    }

                                    @media screen and (max-width: 700px) {
                                        .divsanpham {
                                            width: 50%;
                                            padding-left: 15px;
                                            padding-right: 15px
                                        }
                                    }
                                </style>
                                <?php
                                $args = array(
                                    'post_type' => 'san-pham',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'loai-san-pham',
                                            'field' => 'slug',
                                            'terms' => $tax->slug
                                        )
                                    )
                                );

                                $my_query = new WP_Query($args);
                                if ($my_query->have_posts()) {
                                    while ($my_query->have_posts()) : $my_query->the_post();
                                ?>
                                        <div class="divsanpham">
                                            <div style="width:100%; height:auto; padding-bottom:50px;">
                                                <div style="width:100%; height:auto">
                                                    <a href="<?= get_permalink() ?>">
                                                        <?php echo get_the_post_thumbnail(get_the_ID()); ?>
                                                    </a>

                                                </div>
                                                <div style="width:100%; height:auto">
                                                    <p style="font-weight:600; text-align:center; margin:0px; padding-top:23px; padding-bottom:6px">
                                                        <a style="color:#111" href="<?= get_permalink() ?>"><?= get_the_title() ?></a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    endwhile;
                                } else {
                                    echo "<p>Xin lỗi, không có sản phẩm nào để hiển thị!</p>";
                                }
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>