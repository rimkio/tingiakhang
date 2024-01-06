<?php /* Template Name: Home Template */ ?>

<?php get_header() ?>

<div class="site-main">

    <div class="carousel slide">
        <?php
        $hero_slider = __get_field('hero_slider');
        if ($hero_slider) : ?>
            <div class="carousel__inner">
                <?php foreach ($hero_slider as $image) : ?>
                    <div class="carousel__inner-item">
                        <img src="<?= $image ?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif;
        ?>
    </div>

    <div style="background:#ffffff">
        <?php
        $heading = __get_field('heading');
        $subheading = __get_field('subheading');
        $list_uniform = __get_field('list_uniform');
        ?>
        <div class="container" style="padding-top:50px; padding-bottom:38px">
            <div style="width:100%; padding-bottom:28px">
                <h1 style=" text-align:center; font-size:32px"><?= $heading ?></h1>
                <p style="color:#666666; text-align: center"><?= $subheading ?></p>
            </div>

            <div class="row">
                <style>
                    .nganhnghe_show_home {
                        width: 100%;
                        background: #FFCC33;
                        margin-bottom: 30px;
                        position: relative
                    }

                    .nganhnghe_show_home img {
                        vertical-align: middle;
                        width: 100%
                    }

                    .nganhnghe_show_home .content {
                        position: absolute;
                        bottom: 0;
                        background: rgb(0, 0, 0);
                        background: rgba(0, 0, 0, 0.5);
                        color: #f1f1f1;
                        width: 100%;
                        padding: 10px;
                    }
                </style>
                <?php if ($list_uniform) { ?>
                    <?php foreach ($list_uniform as $key => $value) { ?>
                        <?php $thumbnail = get_field('image', $value->taxonomy . '_' . $value->term_id); ?>
                        <div class="col-sm-3">
                            <div class="nganhnghe_show_home">
                                <a href="<?= get_term_link($value->term_id, "loai-san-pham") ?>">
                                    <?php if ($thumbnail) { ?>
                                        <img src="<?= $thumbnail ?>" alt="<?= $value->name ?>">
                                    <?php } ?>
                                </a>
                                <div class="content">
                                    <h6 style="text-align:center; text-transform:uppercase"><a style="color:#FFFFFF" href="<?= get_term_link($value->term_id, "loai-san-pham") ?>"><?= $value->name ?></a></h6>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>

    </div>
    <style>
        .text_slogan_nganh {
            text-align: center;
            font-family: Verdana;
            padding-bottom: 36px;
            margin-top: -15px;
            padding-left: 86px;
            padding-right: 86px
        }

        @media screen and (max-width: 700px) {
            .text_slogan_nganh {
                text-align: center;
                font-family: Verdana;
                padding-bottom: 36px;
                margin-top: -15px;
                padding-left: 0px;
                padding-right: 0px
            }
        }
    </style>
    <div style="height:auto; clear:both;text-align:center">
        <?php if (get_field('banner_category', 'option')) { ?>
            <img style="width:100%" src="<?= get_field('banner_category', 'option') ?>" alt="POLOS">
        <?php } ?>
    </div>
    <?php $type_product = __get_field('type_product');
    if ($type_product) {
        foreach ($type_product as $key => $type) {
            $tax = $type['product_type'];
            if ($key % 2 == 0) {
                $bg = "#fff";
            } else {
                $bg = "#effbff";
            }
    ?>
            <div style="background:<?= $bg ?>   ; margin:0px">
                <div class="container">
                    <div style="width:100%">
                        <h2 style="text-align:center; padding-bottom:20px; padding-top:50px; text-transform:uppercase">
                            <a href="<?= get_term_link($tax->term_id, "loai-san-pham") ?>"><?= $tax->name ?></a>
                        </h2>

                        <p class="text_slogan_nganh" style="color:#666666; text-align:center"><b><i><?= $tax->description ?></i></b></p>

                    </div>
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

                    <div class="row">
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
                        if ($my_query->have_posts()) :
                            while ($my_query->have_posts()) : $my_query->the_post();
                        ?>
                                <div class="divsanpham">
                                    <div style=" width:100%; height:auto; padding-bottom:50px;">
                                        <div style="width:100%; height:auto">
                                            <a href="<?= get_permalink() ?>">
                                                <?php echo get_the_post_thumbnail(get_the_ID());    ?>
                                            </a>
                                        </div>
                                        <div style="width:100%; height:auto">
                                            <p style="font-weight:600; text-align:center; margin:0px; padding-top:23px; padding-bottom:6px"><a style="color:#111111" href="<?= get_permalink() ?>"><?= get_the_title() ?></a></p>
                                            <p style="text-align:center; color:#111111;  margin:0px"><i>Giá cả:</i> <?= get_field('price', get_the_ID()); ?></p>
                                            <p style="text-align:center; color:#111111; margin:0px; "><i>Tình trạng:</i> <?= get_field('status', get_the_ID()); ?></p>
                                        </div>
                                    </div>
                                </div>
                        <?php

                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>


    <?php
    $about_heading = get_field('about_heading', get_the_ID());
    $about_subheading = __get_field('about_subheading');
    $about_image = __get_field('about_image');
    $about_desc = __get_field('about_desc');
    ?>
    <div style="background:#ffffff">
        <div class="container" style="padding-top:50px; padding-bottom:50px">
            <div style="width:100%; padding-bottom:30px; text-align:center">
                <h2><a href="/about-us"><?= $about_heading ?></a></h2>

                <p style="color:#666666"><?= $about_subheading ?></p>

            </div>
            <div class="row">
                <div class="col-sm-6" style="color:#000000">
                    <?= $about_desc ?>
                </div>
                <div class="col-sm-6">

                    <a href="/about-us">
                        <?php if ($about_image) { ?>
                            <img style="width:100%; padding-top:5px" src="<?= $about_image ?>" alt="Tin Gia Khang">
                        <?php } ?>
                    </a>

                </div>
            </div>

        </div>
    </div>


    <div style="background:#7e7e7e">

        <style>
            .chitiet_whyme1 {
                width: 33.33%;
                padding-left: 15px;
                padding-right: 15px
            }

            @media screen and (max-width: 700px) {
                .chitiet_whyme1 {
                    width: 50%;
                    padding-left: 15px;
                    padding-right: 15px
                }
            }
        </style>

        <?php
        $why_heading = get_field('why_heading', get_the_ID());
        $list_whyme = get_field('list_whyme', get_the_ID());
        ?>
        <div class="container" style="padding-top:50px; padding-bottom:50px">
            <div style="width:100%; padding-bottom:30px; text-align:center">
                <h2 style="color:#ffffff"><?= $why_heading ?></h2>
                <p style="color:#ffffff"></p>
            </div>
            <div class="row">

                <style>
                    .chitiet_whyme_style1 {
                        width: 33.33%;
                        padding-left: 15px;
                        padding-right: 15px
                    }

                    @media screen and (max-width: 700px) {
                        .chitiet_whyme_style1 {
                            width: 50%;
                            padding-left: 15px;
                            padding-right: 15px
                        }
                    }
                </style>
                <?php if ($list_whyme) { ?>
                    <?php foreach ($list_whyme as $key => $value) { ?>
                        <div class="chitiet_whyme_style1">
                            <div class="row">
                                <div class="col-sm-3" style="padding:8px">
                                    <div style=" width:100%; margin-bottom:30px; text-align:center">
                                        <?php if ($value['icon']) { ?>
                                            <img class="whyme_img" src="<?= $value['icon'] ?>">
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-sm-9" style="padding:8px">
                                    <div class="whyme_tomtat">
                                        <h5 style="color:#ffffff"><?= $value['heading'] ?></h5>
                                        <p style="text-align:justify; color:#ffffff"><?= $value['desc'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>

    </div>
    <?php
    $client_heading = get_field('client_heading', 'option');
    $logo_client = get_field('logo_client', 'option');
    ?>
    <div style="background:#ffffff">
        <div class="container" style="padding-top:50px; padding-bottom:50px">
            <div style="width:100%; padding-bottom:10px; text-align:center">
                <h2><?= $client_heading ?></h2>
            </div>
            <div class="row" style="margin-top:15px">
                <style>
                    .khachhangvadoitac2 {
                        width: 25%;
                        padding-left: 15px;
                        padding-right: 15px
                    }

                    @media screen and (max-width: 700px) {
                        .khachhangvadoitac2 {
                            width: 50%;
                            padding-left: 15px;
                            padding-right: 15px
                        }
                    }
                </style>
                <?php if ($logo_client) { ?>
                    <?php foreach ($logo_client as $key => $value) { ?>
                        <div class="khachhangvadoitac2" style="padding-bottom:30px">
                            <img style="width:100%; border-radius: 10px 10px 10px 10px; border:#EEE; border-style:solid; border-width:1px" src="<?= $value ?>">
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>