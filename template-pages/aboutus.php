<?php /* Template Name: AboutUs Template */ ?>

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
        <div class="container" style="padding-top:38px">
            <style>
                .noidunggioithieu {
                    width: 100%;
                    padding-bottom: 30px;
                    text-align: justify
                }

                .noidunggioithieu img {
                    width: 100%
                }
            </style>
            <?php
            $heading = get_field('heading');
            $subheading = get_field('subheading');
            $description = get_field('description');
            ?>
            <div class="noidunggioithieu">
                <h2 style="color:#111; text-align:center"><?= $heading ?></h2>

                <p style="text-transform:uppercase; text-align:center; color:#888; padding-bottom:10px"><?= $subheading ?></p>
                <?= $description ?>
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