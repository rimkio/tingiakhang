<?php
$logo = get_field("footer_logo", "option");
$intro = get_field("intro", "option");
$map = get_field("map", "option");
$contact = get_field("contact", "option");
$address = get_field("address", "option");
$phone = get_field("phone", "option");
$phone_2 = get_field("phone_2", "option");
$email_staff = get_field("email_staff", "option");
$image_staff = get_field("image_staff", "option");
$name_staff = get_field("name_staff", "option");
$position = get_field("position", "option");
?>

<footer id="site-footer" class="main-footer">

    <div style="background:#effbff">

        <div class="container" style="padding-top:50px; padding-bottom:38px">
            <div style="width:100%; padding-bottom:10px; text-align:center">
                <h2>LIÊN HỆ NGAY VỚI CHÚNG TÔI!</h2>
            </div>

            <div class="row" style="margin-top:15px">
                <div class="col-sm-6" style="padding-top:13px">
                    <div style="width:100%; height:auto; border:#CCCCCC; border-style:solid; border-width:1px; border-radius: 10px 10px 10px 10px; padding:18px; color:#000000">
                        <h5><span style="text-transform:uppercase">Tín Gia Khang</span></h5>
                        <p><strong>Address: </strong> <?= $address ?></p>
                        <p>
                            <strong>Hotline: </strong> <a style="color:#000000" href="tel:<?= $phone ?>"><?= $phone ?></a>
                        </p>
                        <?php if ($phone_2) { ?>
                            <p><strong>Telephone: </strong> <a style="color:#000000" href="tel:<?= $phone_2 ?>"><?= $phone_2 ?></a></p>
                        <?php } ?>
                        <p><strong>Email:</strong> <a style="color:#000000" href="mailto:<?= $email_staff ?>"><?= $email_staff ?></a></p>
                    </div>
                </div>
                <div class="col-sm-6" style="padding-top:13px">
                    <div class="row">
                        <div class="col-sm-6" style="padding-bottom:30px; color:#000000">
                            <?php if ($image_staff) { ?>
                                <p style="text-align:center"><img style="width:50%; border-radius: 50%" src="<?= $image_staff ?>"></p>
                            <?php } ?>
                            <p style="text-align:center; margin:0px; padding:0px; padding-bottom:3px"><?= $name_staff ?></p>
                            <p style="text-align:center; margin:0px; padding:0px; padding-bottom:6px"><?= $position ?></p>
                            <p style="text-align:center; margin:0px; padding:0px; padding-bottom:3px; font-weight:500; color:#000000">
                                <a style="color:#000000" href="tel:<?= $phone ?>"><?= $phone ?></a>
                                <?php if ($phone_2) { ?>
                                    - <a style="color:#000000" href="tel:<?= $phone_2 ?>"><?= $phone_2 ?></a>
                                <?php } ?>
                            </p>
                            <p style="text-align:center; margin:0px; padding:0px; padding-top:6px">
                                <a href="https://zalo.me/<?= $phone ?>"><img title="CHAT ZALO: <?= $phone ?>" style="width:28px" src="<?= get_template_directory_uri() . '/resources/assets/images/zalo_con.png' ?>"></a>
                                <a href="mailto:<?= $email_staff ?>"><img title="Email: <?= $email_staff ?>" style="width:28px" src="<?= get_template_directory_uri() . '/resources/assets/images/email_icon.png' ?>"></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="background:#ffffff">
        <div class="container" style="padding-top:50px; padding-bottom:50px">
            <div class="row">
                <div class="col-sm-5">
                    <div style="height: auto; width:100%">
                        <div style="height:auto">

                            <a href="http://www.thutoanfashion.com.vn"><img style="max-width:250px;" src="<?= $logo ?>"></a>

                        </div>
                        <div style="height:auto; padding-top:20px; color:#222222">
                            <p style="text-align:justify"><span style="font-family:Arial,Helvetica,sans-serif"><span style="font-size:16px"><?= $intro ?></span></span></p>

                            <p style="text-align:justify"><?= $map ?></p>

                        </div>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div style="height: auto; width:100%">
                        <h5>CÔNG TY CHÚNG TÔI</h5>
                        <style>
                            .dropbtn {
                                padding: 16px;
                                padding-top: 10px;
                                background: none;
                                padding-left: 0px;
                                font-size: 16px;
                                border: none;
                            }

                            .dropup {
                                position: relative;
                                display: inline-block;
                            }

                            .dropup-content {
                                display: none;
                                position: absolute;
                                bottom: 50px;
                                background-color: #f1f1f1;
                                min-width: 300px;
                                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                                z-index: 1;
                            }

                            .dropup-content a {
                                color: black;
                                padding: 12px 16px;
                                text-decoration: none;
                                display: block;
                            }

                            .dropup-content a:hover {
                                background-color: #ddd
                            }

                            .dropup:hover .dropup-content {
                                display: block;
                            }

                            .dropup:hover .dropbtn {
                                background: none
                            }
                        </style>
                        <div style="height:auto">
                            <p style="padding-top:10px; clear:both"></p>

                            <?php
                            if (has_nav_menu('main-menu')) {
                                wp_nav_menu([
                                    'theme_location' => 'footer-menu',
                                    'menu_class' => 'footer-menu',
                                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'bootstrap' => false
                                ]);
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div style="height: auto; width:100%; color:#222222">
                        <h5>LIÊN HỆ</h5>
                        <p style="padding-top:10px; clear:both"></p>
                        <?= $contact ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-footer__socket">
        <div style="background:#ffffff">
            <div class="container" style="padding-top:18px; padding-bottom:18px">
                <p style="text-align:left; padding:0px; margin:0px; ">© Copyright 2024 Tín Gia Khang.</p>
            </div>
        </div>
    </div>

</footer>

<div id="contact_fixed">
    <a target="_blank" href="tel:<?= $phone ?>" style="bottom:20px" title="Vui lòng gọi chúng tôi">
        <div style="height:50px; width:50px; border-radius:50%; background:#64bc46;">
            <p style="color:#FFFFFF; text-align:center; padding-top:6px"><svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16.5562 12.9062L16.1007 13.359C16.1007 13.359 15.0181 14.4355 12.0631 11.4972C9.10812 8.55901 10.1907 7.48257 10.1907 7.48257L10.4775 7.19738C11.1841 6.49484 11.2507 5.36691 10.6342 4.54348L9.37326 2.85908C8.61028 1.83992 7.13596 1.70529 6.26145 2.57483L4.69185 4.13552C4.25823 4.56668 3.96765 5.12559 4.00289 5.74561C4.09304 7.33182 4.81071 10.7447 8.81536 14.7266C13.0621 18.9492 17.0468 19.117 18.6763 18.9651C19.1917 18.9171 19.6399 18.6546 20.0011 18.2954L21.4217 16.883C22.3806 15.9295 22.1102 14.2949 20.8833 13.628L18.9728 12.5894C18.1672 12.1515 17.1858 12.2801 16.5562 12.9062Z" fill="#fff"></path> </g></svg></p>
        </div>
    </a>
    <a target="_blank" href="https://zalo.me/<?= $phone ?>" style="bottom:80px" title="Vui lòng liên hệ zalo">
        <div style="height:50px; width:50px; border-radius:50%; background:#0d94e4;">
            <p style="color:#FFFFFF; text-align:center; padding-top:12px; font-size:18px; font-weight:600">Zalo</p>
        </div>
    </a>

</div>