<?php /* Template Name: Contact Us Template */ ?>

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
            <div style="height:auto; margin-top:38px; margin-bottom:38px; clear:both">
                <?= get_field('embed_maps') ?>                
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>