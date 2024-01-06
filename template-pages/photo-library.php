<?php /* Template Name: Photo Library Template */ ?>

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
        <div class="container">
            <h2 style="margin-top: 50px">THƯ VIỆN HÌNH ẢNH</h2>
            <hr>
            <div class="gallery-wrap" style="height:auto; margin-top:50px; margin-bottom:50px; clear:both">
                <?php
                $gallery = get_field('gallery');
                if ($gallery) {
                    foreach ($gallery as $key => $value) {
                ?>
                        <div class="gallery-item">
                            <img src="<?= $value ?>" />
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>