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
                                <a href="<?= get_permalink($value->term_id) ?>">
                                    <?php if ($thumbnail) { ?>
                                        <img src="<?= $thumbnail ?>" alt="<?= $value->name ?>">
                                    <?php } ?>
                                </a>
                                <div class="content">
                                    <h6 style="text-align:center; text-transform:uppercase"><a style="color:#FFFFFF" href="<?= get_permalink($value->term_id) ?>"><?= $value->name ?></a></h6>
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
        <img style="width:100%" src="http://www.thutoanfashion.com.vn/nganh_banner/1202/banner.jpg" alt="POLOS">
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
                            <a href="<?= get_permalink($tax->term_id) ?>"><?= $tax->name ?></a>
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


    <div style="background:#0064b2">

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
        <div class="container" style="padding-top:50px; padding-bottom:50px">
            <div style="width:100%; padding-bottom:30px; text-align:center">
                <h2 style="color:#ffffff">WHY YOU SHOULD CHOOSE US?</h2>
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

                <div class="chitiet_whyme_style1">
                    <div class="row">
                        <div class="col-sm-3" style="padding:8px">
                            <div style=" width:100%; margin-bottom:30px; text-align:center">

                                <img class="whyme_img" src="whyme_images/1202/thietke.png">

                            </div>
                        </div>
                        <div class="col-sm-9" style="padding:8px">
                            <div class="whyme_tomtat">
                                <h5 style="color:#ffffff">Free design</h5>
                                <p style="text-align:justify; color:#ffffff">As a dedicated, professional unit in the textile and garment industry, we offer free design consultation services to meet all customer requirements and free nationwide shipping on thousands of our products.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chitiet_whyme_style1">
                    <div class="row">
                        <div class="col-sm-3" style="padding:8px">
                            <div style=" width:100%; margin-bottom:30px; text-align:center">

                                <img class="whyme_img" src="whyme_images/1202/haumai.png">

                            </div>
                        </div>
                        <div class="col-sm-9" style="padding:8px">
                            <div class="whyme_tomtat">
                                <h5 style="color:#ffffff">Excellent quality</h5>
                                <p style="text-align:justify; color:#ffffff">We take pride in using the finest quality materials and advanced machinery to ensure our uniforms are both durable and comfortable, thus becoming a trusted choice for many domestic partners and customers.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chitiet_whyme_style1">
                    <div class="row">
                        <div class="col-sm-3" style="padding:8px">
                            <div style=" width:100%; margin-bottom:30px; text-align:center">

                                <img class="whyme_img" src="whyme_images/1202/chatluong.png">

                            </div>
                        </div>
                        <div class="col-sm-9" style="padding:8px">
                            <div class="whyme_tomtat">
                                <h5 style="color:#ffffff">Warranty policy</h5>
                                <p style="text-align:justify; color:#ffffff">Customers can return the product for free within 10 days if there are any errors from the manufacturer. We guarantee the quality of our printing and embroidery quality for 6 months from the date of receiving the goods.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div style="background:#ffffff">
        <div class="container" style="padding-top:50px; padding-bottom:50px">

            <div style="width:100%; padding-bottom:10px; text-align:center">
                <h2 style="color:#0064b2">OUR CUSTOMERS AND PARTNERS</h2>

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

                <div class="khachhangvadoitac2" style="padding-bottom:30px">

                    <img style="width:100%; border-radius: 10px 10px 10px 10px; border:#EEE; border-style:solid; border-width:1px" src="doitac_images/1202/ahamove.jpg">
                </div>

                <div class="khachhangvadoitac2" style="padding-bottom:30px">

                    <img style="width:100%; border-radius: 10px 10px 10px 10px; border:#EEE; border-style:solid; border-width:1px" src="doitac_images/1202/fpt.jpg">
                </div>

                <div class="khachhangvadoitac2" style="padding-bottom:30px">

                    <img style="width:100%; border-radius: 10px 10px 10px 10px; border:#EEE; border-style:solid; border-width:1px" src="doitac_images/1202/honda.jpg">
                </div>

                <div class="khachhangvadoitac2" style="padding-bottom:30px">

                    <img style="width:100%; border-radius: 10px 10px 10px 10px; border:#EEE; border-style:solid; border-width:1px" src="doitac_images/1202/kangaroo.jpg">
                </div>

                <div class="khachhangvadoitac2" style="padding-bottom:30px">

                    <img style="width:100%; border-radius: 10px 10px 10px 10px; border:#EEE; border-style:solid; border-width:1px" src="doitac_images/1202/lavie.jpg">
                </div>

                <div class="khachhangvadoitac2" style="padding-bottom:30px">

                    <img style="width:100%; border-radius: 10px 10px 10px 10px; border:#EEE; border-style:solid; border-width:1px" src="doitac_images/1202/lg.jpg">
                </div>

                <div class="khachhangvadoitac2" style="padding-bottom:30px">

                    <img style="width:100%; border-radius: 10px 10px 10px 10px; border:#EEE; border-style:solid; border-width:1px" src="doitac_images/1202/omo.jpg">
                </div>

                <div class="khachhangvadoitac2" style="padding-bottom:30px">

                    <img style="width:100%; border-radius: 10px 10px 10px 10px; border:#EEE; border-style:solid; border-width:1px" src="doitac_images/1202/prudential.jpg">
                </div>

                <div class="khachhangvadoitac2" style="padding-bottom:30px">

                    <img style="width:100%; border-radius: 10px 10px 10px 10px; border:#EEE; border-style:solid; border-width:1px" src="doitac_images/1202/pvi.jpg">
                </div>

                <div class="khachhangvadoitac2" style="padding-bottom:30px">

                    <img style="width:100%; border-radius: 10px 10px 10px 10px; border:#EEE; border-style:solid; border-width:1px" src="doitac_images/1202/vinamilk.jpg">
                </div>

                <div class="khachhangvadoitac2" style="padding-bottom:30px">

                    <img style="width:100%; border-radius: 10px 10px 10px 10px; border:#EEE; border-style:solid; border-width:1px" src="doitac_images/1202/coca.jpg">
                </div>

                <div class="khachhangvadoitac2" style="padding-bottom:30px">

                    <img style="width:100%; border-radius: 10px 10px 10px 10px; border:#EEE; border-style:solid; border-width:1px" src="doitac_images/1202/kotex_.jpg">
                </div>

            </div>

        </div>
    </div>

    <div style="background:#effbff">

        <div class="container" style="padding-top:50px; padding-bottom:38px">
            <div style="width:100%; padding-bottom:10px; text-align:center">
                <h2 style="color:#0064b2">CONTACT US NOW!</h2>

            </div>


            <div class="row" style="margin-top:15px">

                <div class="col-sm-6" style="padding-top:13px">
                    <div style="width:100%; height:auto; border:#CCCCCC; border-style:solid; border-width:1px; border-radius: 10px 10px 10px 10px; padding:18px; color:#000000">
                        <h5><span style="text-transform:uppercase">Thu Toan Production Trading Service Co., Ltd.</span></h5>

                        <p><strong>Address: </strong> 62/31 Ly Chinh Thang Street, Vo Thi Sau Ward, District 3, HCMC, VN<br><b>Warehouse:</b>&nbsp;115 Street 5, An Khanh W., Ninh Kieu Dist., Can Tho, VN</p>

                        <p>
                            <strong>Telephone: </strong> <a style="color:#000000" href="tel:+84937557105">+84937557105</a>
                        </p>

                        <p>
                            <strong>Hotline: </strong> <a style="color:#000000" href="tel:+84913040811">+84913040811</a>
                        </p>

                        <p><strong>Email:</strong> <a style="color:#000000" href="mailto:fashion@thutoan.com.vn">fashion@thutoan.com.vn</a></p>

                    </div>
                </div>
                <div class="col-sm-6" style="padding-top:13px">
                    <div class="row">
                        <style>

                        </style>

                        <div class="col-sm-6" style="padding-bottom:30px; color:#000000">
                            <p style="text-align:center"><img style="width:50%; border-radius: 50%" src="contact_images/1202/ms 2.png"></p>
                            <p style="text-align:center; margin:0px; padding:0px; padding-bottom:3px">Ms. Nguyen Thi Nguyet Thu</p>
                            <p style="text-align:center; margin:0px; padding:0px; padding-bottom:6px">Representative</p>
                            <p style="text-align:center; margin:0px; padding:0px; padding-bottom:3px; font-weight:500; color:#000000">

                                <a style="color:#000000" href="tel:+84937557105">+84937557105</a>
                                - <a style="color:#000000" href="tel:+84913040811">+84913040811</a>

                            </p>
                            <p style="text-align:center; margin:0px; padding:0px; padding-top:6px">
                                <a href="https://zalo.me/+84913040811"><img title="CHAT ZALO: +84913040811" style="width:28px" src="images/zalo_con.png"></a>
                                <a href="mailto:fashion@thutoan.com.vn"><img title="Email: fashion@thutoan.com.vn" style="width:28px" src="images/email_icon.png"></a>
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<?php get_footer() ?>