<?php get_header(); ?>
<main id="primary" class="site-main">
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
        <div class="container">
            <p style="height:26px; clear:both"></p>
            <div style="height:auto">
                <div style="height: auto; margin-top:30px; margin-bottom:30px">
                    <div class="row">
                        <div class="col-sm-5" style="margin-bottom:18px">
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'fullwidth')); ?>
                        </div>
                        <div class="col-sm-7">
                            <div style="height: auto">
                                <div style="height:auto; border-bottom-color:#CCCCCC; border-bottom-style:solid; border-bottom-width:1px">
                                    <h1 style="font-size:28px"><?= get_the_title() ?></h1>
                                    <p style="margin-top:10px; margin-bottom:3px">
                                        <strong>Tình trạng:</strong> <?= get_field('status', get_the_ID()); ?>
                                    </p>
                                    <p style=" margin-top:6px; margin-bottom:10px">
                                        <strong>Giá sản phẩm: </strong>
                                        <span style="color:red; font-size:24px;"> <?= get_field('price', get_the_ID()); ?></span>
                                    </p>

                                </div>
                                <style>
                                    .goilienhe {
                                        height: auto;
                                        width: 62%;
                                        border-radius: 6px;
                                        margin-top: 21px;
                                    }

                                    @media screen and (max-width: 700px) {
                                        .goilienhe {
                                            height: auto;
                                            width: 100%;
                                            border-radius: 6px;
                                            margin-top: 21px;
                                        }
                                    }
                                </style>
                                <div class="goilienhe" style="background:#056d21">

                                    <p style="margin:0px; color:#FFFFFF; text-align:center; padding-top:11px; padding-bottom:11px; padding-left:3px; padding-right:3px">
                                        Liên hệ:
                                        <span style="font-weight:600; padding-left:12px">
                                            <a style="color:#FFFFFF" href="tel:<?= get_field('phone', 'option') ?>"><?= get_field('phone', 'option') ?></a></span>
                                        - <?= get_field('name_staff', 'option') ?>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <p style="height:25px; clear:both"></p>

                    <div class="row">
                        <div class="col-sm-9">
                            <div style="height:45px; border-bottom-color:#DDD; border-bottom-style:solid; border-bottom-width:1px; background:#f9f9f9">
                                <p style="font-weight:600; color:#3399FF; padding-top:10px; padding-left:10px; text-transform:uppercase">CHI TIẾT SẢN PHẨM</p>
                            </div>
                            <style>
                                .noidungsanpham {
                                    height: auto;
                                    margin-top: 18px;
                                    text-align: justify
                                }

                                .noidungsanpham img {
                                    width: 100%
                                }
                            </style>
                            <div class="noidungsanpham">
                                <?php echo get_the_content() ?>
                            </div>
                        </div>
                        <style>
                            .cothebanquantam {
                                width: 100%;
                                display: block
                            }

                            @media screen and (max-width: 700px) {
                                .cothebanquantam {
                                    display: none
                                }
                            }
                        </style>
                        <div class="col-sm-3">
                            <div class="cothebanquantam">
                                <p style="font-weight:600; margin-bottom:6px; color:#3399FF">SẢN PHẨM NỔI BẬT</p>
                                <div style="height: auto; border:#DDD; border-style:solid; border-width:1px; border-bottom:none">

                                    <?php
                                    $args = array(
                                        'post_type' => 'san-pham',
                                        'posts-per_page' => 6,
                                        'post_status' => 'publish',
                                        'post__not_in' => array(get_the_ID()),
                                    );

                                    $the_query = new WP_Query($args);
                                    if ($the_query->have_posts()) {
                                        while ($the_query->have_posts()) {
                                            $the_query->the_post();
                                    ?>
                                            <div style="height: auto; border-bottom:#DDD; border-bottom-style:solid; border-bottom-width:1px">
                                                <div style="height:auto; padding:5px">
                                                    <div style="width:30%; height:auto; float:left; padding-top:8px; padding-bottom:12px">
                                                        <a href="<?= get_permalink() ?>">
                                                            <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'fullwidth')); ?>
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
                                        echo '<p style="padding: 10px; border-bottom: 1px solid #DDD;">Xin lỗi, không có sản phẩm nào để hiển thị.</p>';
                                    }
                                    // Restore original Post Data.
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


    <div style="background:#fff   ">
        <div class="container">
            <p style="height:10px; clear:both"></p>
            <div style="height:45px; border-bottom-color:#DDD; border-bottom-style:solid; border-bottom-width:1px; background:#f9f9f9; margin-bottom:38px; border-radius: 5px 5px 5px 5px">
                <p style="font-weight:600; color:#333; padding-top:10px; padding-left:10px; text-transform:uppercase">CÓ THỂ BẠN CŨNG THÍCH</p>
            </div>
            <div class="row">
                <style>
                    .divsanpham {
                        width: 25%;
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
                    'posts_per_page' => 4,
                    'post_status' => 'publish',
                    'post__not_in' => array(get_the_ID()),
                    'orderby' => 'rand',
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                ?>

                        <div class="divsanpham">
                            <div style=" width:100%; height:auto; padding-bottom:50px;">
                                <div style="width:100%; height:auto">
                                    <a href="<?= get_permalink() ?>">
                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'fullwidth')); ?>
                                    </a>
                                </div>
                                <div style="width:100%; height:auto">
                                    <p style="font-weight:600; text-align:center; margin:0px; padding-top:23px; padding-bottom:6px"><a style="color:#111111   " href="<?= get_permalink() ?>"><?= get_the_title() ?></a></p>
                                    <p style="margin-top:10px; margin-bottom:3px">
                                        <strong>Tình trạng:</strong> <?= get_field('status', get_the_ID()); ?>
                                    </p>
                                    <p style=" margin-top:6px; margin-bottom:10px">
                                        <strong>Giá sản phẩm: </strong>
                                        <span style="color:red; font-size:24px;"> <?= get_field('price', get_the_ID()); ?></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo '<p>Xin lỗi, không có sản phẩm nào để hiển thị.</p>';
                }
                // Restore original Post Data.
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>