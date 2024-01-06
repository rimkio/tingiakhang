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

                            <div style="height:auto; margin-top:10px">

                                <button class="accordion active"><a style="color:#111" href="http://www.thutoanfashion.com.vn/category/12176/polos.html">POLOS</a></button>
                                <div class="panel" style="max-height: 360px;">

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33523/polo-john’s-tours.html">Polo - John’s Tours</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33524/polo-nam-ngu.html">Polo - Nam Ngu</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33557/polo-tripi.html">Polo - Tripi</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33525/polo-paradise.html">Polo - Paradise</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33526/polo-prudential.html">Polo - Prudential</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33559/polo-woh-hup.html">Polo - Woh-hup</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33560/polo-vinamilk.html">Polo - Vinamilk</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33558/polo-zacs.html">Polo - Zacs</a></p>

                                    <p><a href="http://www.thutoanfashion.com.vn/category/12176/polos.html">+ Open...</a></p>
                                </div>

                                <button class="accordion"><a style="color:#111" href="http://www.thutoanfashion.com.vn/category/12177/uniform-jackets.html">UNIFORM JACKETS</a></button>
                                <div class="panel">

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33527/uniform-jacket.html">Uniform jacket</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33528/uniform-jacket-lg.html">Uniform jacket - LG</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33529/uniform-jacket-av-advertisement.html">Uniform jacket - AV Advertisement</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33530/bomber-jacket.html">Bomber jacket</a></p>

                                    <p><a href="http://www.thutoanfashion.com.vn/category/12177/uniform-jackets.html">+ Open...</a></p>
                                </div>

                                <button class="accordion"><a style="color:#111" href="http://www.thutoanfashion.com.vn/category/12178/uniform-shirts-for-office.html">UNIFORM SHIRTS FOR OFFICE</a></button>
                                <div class="panel">

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33531/office-shirt-for-men.html">Office shirt for men</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33532/office-shirt-for-men.html">Office shirt for men</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33533/office-shirt-for-men.html">Office shirt for men</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33534/office-shirt-for-men.html">Office shirt for men</a></p>

                                    <p><a href="http://www.thutoanfashion.com.vn/category/12178/uniform-shirts-for-office.html">+ Open...</a></p>
                                </div>

                                <button class="accordion"><a style="color:#111" href="http://www.thutoanfashion.com.vn/category/12182/office-uniforms.html">OFFICE UNIFORMS</a></button>
                                <div class="panel">

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33553/office-uniform.html">Office uniform</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33554/office-uniform.html">Office uniform</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33555/office-uniform.html">Office uniform</a></p>

                                    <p><a style="color:#333" href="http://www.thutoanfashion.com.vn/product/33556/office-uniform.html">Office uniform</a></p>

                                    <p><a href="http://www.thutoanfashion.com.vn/category/12182/office-uniforms.html">+ Open...</a></p>
                                </div>

                                <button class="accordion"><a style="color:#111" href="http://www.thutoanfashion.com.vn/category/12188/restaurant-and-hotel-staff-uniforms.html">RESTAURANT AND HOTEL STAFF UNIFORMS</a></button>
                                <div class="panel">

                                    <p><a href="http://www.thutoanfashion.com.vn/category/12188/restaurant-and-hotel-staff-uniforms.html">+ Open...</a></p>
                                </div>

                                <button class="accordion"><a style="color:#111" href="http://www.thutoanfashion.com.vn/category/12183/protective-clothing.html">PROTECTIVE CLOTHING</a></button>
                                <div class="panel">

                                    <p><a href="http://www.thutoanfashion.com.vn/category/12183/protective-clothing.html">+ Open...</a></p>
                                </div>

                                <button class="accordion"><a style="color:#111" href="http://www.thutoanfashion.com.vn/category/12184/hospital-uniforms.html">HOSPITAL UNIFORMS</a></button>
                                <div class="panel">

                                    <p><a href="http://www.thutoanfashion.com.vn/category/12184/hospital-uniforms.html">+ Open...</a></p>
                                </div>

                                <button class="accordion"><a style="color:#111" href="http://www.thutoanfashion.com.vn/category/12185/class-uniforms.html">CLASS UNIFORMS</a></button>
                                <div class="panel">

                                    <p><a href="http://www.thutoanfashion.com.vn/category/12185/class-uniforms.html">+ Open...</a></p>
                                </div>

                                <button class="accordion"><a style="color:#111" href="http://www.thutoanfashion.com.vn/category/12187/event-uniforms.html">EVENT UNIFORMS</a></button>
                                <div class="panel">

                                    <p><a href="http://www.thutoanfashion.com.vn/category/12187/event-uniforms.html">+ Open...</a></p>
                                </div>

                                <button class="accordion"><a style="color:#111" href="http://www.thutoanfashion.com.vn/category/12186/caps-and-hats.html">CAPS AND HATS</a></button>
                                <div class="panel">

                                    <p><a href="http://www.thutoanfashion.com.vn/category/12186/caps-and-hats.html">+ Open...</a></p>
                                </div>

                                <script>
                                    var acc = document.getElementsByClassName("accordion");
                                    var i;
                                    for (i = 0; i < acc.length; i++) {
                                        acc[i].addEventListener("click", function() {
                                            this.classList.toggle("active");
                                            var panel = this.nextElementSibling;
                                            if (panel.style.maxHeight) {
                                                panel.style.maxHeight = null;
                                            } else {
                                                panel.style.maxHeight = panel.scrollHeight + "px";
                                            }
                                        });
                                    }
                                </script>
                            </div>

                            <p style="clear:both"></p>
                        </div>
                        <p style="font-weight:600; margin-bottom:6px; margin-top:30px; color:#333">Featured products</p>
                        <div style="height: auto; border:#DDD; border-style:solid; border-width:1px; border-bottom:none">

                            <div style="height: auto; border-bottom:#DDD; border-bottom-style:solid; border-bottom-width:1px">
                                <div style="height:auto; padding:5px">
                                    <div style="width:30%; height:auto; float:left; padding-top:8px; padding-bottom:12px">

                                        <a href="http://www.thutoanfashion.com.vn/product/33556/office-uniform.html"><img style="width:100%" src="http://www.thutoanfashion.com.vn/sanpham_images/1202/office uniform4.jpg" alt="Office uniform"></a>

                                    </div>
                                    <div style="width:70%; float:left; padding-top:8px; padding-bottom:12px">
                                        <p style="margin:0px; padding-left:6px">
                                            <a style="color:#111" href="http://www.thutoanfashion.com.vn/product/33556/office-uniform.html">Office uniform</a>
                                        </p>
                                        <p style="margin:0px; padding-left:6px; color:#999">Contact</p>
                                    </div>
                                </div>
                                <p style="clear:both; margin:0px"></p>
                            </div>

                            <div style="height: auto; border-bottom:#DDD; border-bottom-style:solid; border-bottom-width:1px">
                                <div style="height:auto; padding:5px">
                                    <div style="width:30%; height:auto; float:left; padding-top:8px; padding-bottom:12px">

                                        <a href="http://www.thutoanfashion.com.vn/product/33560/polo-vinamilk.html"><img style="width:100%" src="http://www.thutoanfashion.com.vn/sanpham_images/1202/vinamilk.jpg" alt="Polo - Vinamilk"></a>

                                    </div>
                                    <div style="width:70%; float:left; padding-top:8px; padding-bottom:12px">
                                        <p style="margin:0px; padding-left:6px">
                                            <a style="color:#111" href="http://www.thutoanfashion.com.vn/product/33560/polo-vinamilk.html">Polo - Vinamilk</a>
                                        </p>
                                        <p style="margin:0px; padding-left:6px; color:#999">Contact</p>
                                    </div>
                                </div>
                                <p style="clear:both; margin:0px"></p>
                            </div>

                            <div style="height: auto; border-bottom:#DDD; border-bottom-style:solid; border-bottom-width:1px">
                                <div style="height:auto; padding:5px">
                                    <div style="width:30%; height:auto; float:left; padding-top:8px; padding-bottom:12px">

                                        <a href="http://www.thutoanfashion.com.vn/product/33524/polo-nam-ngu.html"><img style="width:100%" src="http://www.thutoanfashion.com.vn/sanpham_images/1202/polo - nam ngu.JPG" alt="Polo - Nam Ngu"></a>

                                    </div>
                                    <div style="width:70%; float:left; padding-top:8px; padding-bottom:12px">
                                        <p style="margin:0px; padding-left:6px">
                                            <a style="color:#111" href="http://www.thutoanfashion.com.vn/product/33524/polo-nam-ngu.html">Polo - Nam Ngu</a>
                                        </p>
                                        <p style="margin:0px; padding-left:6px; color:#999">Contact</p>
                                    </div>
                                </div>
                                <p style="clear:both; margin:0px"></p>
                            </div>

                            <div style="height: auto; border-bottom:#DDD; border-bottom-style:solid; border-bottom-width:1px">
                                <div style="height:auto; padding:5px">
                                    <div style="width:30%; height:auto; float:left; padding-top:8px; padding-bottom:12px">

                                        <a href="http://www.thutoanfashion.com.vn/product/33526/polo-prudential.html"><img style="width:100%" src="http://www.thutoanfashion.com.vn/sanpham_images/1202/polo - prudential.png" alt="Polo - Prudential"></a>

                                    </div>
                                    <div style="width:70%; float:left; padding-top:8px; padding-bottom:12px">
                                        <p style="margin:0px; padding-left:6px">
                                            <a style="color:#111" href="http://www.thutoanfashion.com.vn/product/33526/polo-prudential.html">Polo - Prudential</a>
                                        </p>
                                        <p style="margin:0px; padding-left:6px; color:#999">Contact</p>
                                    </div>
                                </div>
                                <p style="clear:both; margin:0px"></p>
                            </div>

                            <div style="height: auto; border-bottom:#DDD; border-bottom-style:solid; border-bottom-width:1px">
                                <div style="height:auto; padding:5px">
                                    <div style="width:30%; height:auto; float:left; padding-top:8px; padding-bottom:12px">

                                        <a href="http://www.thutoanfashion.com.vn/product/33530/bomber-jacket.html"><img style="width:100%" src="http://www.thutoanfashion.com.vn/sanpham_images/1202/bomber jacket.jpg" alt="Bomber jacket"></a>

                                    </div>
                                    <div style="width:70%; float:left; padding-top:8px; padding-bottom:12px">
                                        <p style="margin:0px; padding-left:6px">
                                            <a style="color:#111" href="http://www.thutoanfashion.com.vn/product/33530/bomber-jacket.html">Bomber jacket</a>
                                        </p>
                                        <p style="margin:0px; padding-left:6px; color:#999">Contact</p>
                                    </div>
                                </div>
                                <p style="clear:both; margin:0px"></p>
                            </div>

                            <div style="height: auto; border-bottom:#DDD; border-bottom-style:solid; border-bottom-width:1px">
                                <div style="height:auto; padding:5px">
                                    <div style="width:30%; height:auto; float:left; padding-top:8px; padding-bottom:12px">

                                        <a href="http://www.thutoanfashion.com.vn/product/33534/office-shirt-for-men.html"><img style="width:100%" src="http://www.thutoanfashion.com.vn/sanpham_images/1202/uniform shirt4.jpg" alt="Office shirt for men"></a>

                                    </div>
                                    <div style="width:70%; float:left; padding-top:8px; padding-bottom:12px">
                                        <p style="margin:0px; padding-left:6px">
                                            <a style="color:#111" href="http://www.thutoanfashion.com.vn/product/33534/office-shirt-for-men.html">Office shirt for men</a>
                                        </p>
                                        <p style="margin:0px; padding-left:6px; color:#999">Contact</p>
                                    </div>
                                </div>
                                <p style="clear:both; margin:0px"></p>
                            </div>

                            <!------------>

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
                                                    <p style="text-align:center; color:#111111;  margin:0px"><i>Giá cả:</i> <?= get_field('price', get_the_ID()); ?></p>
                                                    <p style="text-align:center; color:#111111; margin:0px; "><i>Tình trạng:</i> <?= get_field('status', get_the_ID()); ?></p>
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