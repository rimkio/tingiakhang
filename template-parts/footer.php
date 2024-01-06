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
                            <strong>Telephone: </strong> <a style="color:#000000" href="tel:<?= $phone ?>"><?= $phone ?></a>
                        </p>
                        <?php if ($phone_2) { ?>
                            <p><strong>Telephone 2: </strong> <a style="color:#000000" href="tel:<?= $phone_2 ?>"><?= $phone_2 ?></a></p>
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
                        <div style="height:auto; padding-right:50px; padding-top:20px; color:#222222">
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

                            <p><a style="color:#222222; font-weight:500" href="http://www.thutoanfashion.com.vn">HOME</a></p>

                            <p style="margin-bottom:6px"><a style="color:#222222" href="http://www.thutoanfashion.com.vn/aboutus">ABOUT US</a></p>

                            <div class="dropup">
                                <button class="dropbtn" style="color:#222222; text-align:left">UNIFORMS</button>
                                <div class="dropup-content">

                                    <a style="text-transform:uppercase" href="http://www.thutoanfashion.com.vn/category/12176/polos.html">POLOS</a>

                                    <a style="text-transform:uppercase" href="http://www.thutoanfashion.com.vn/category/12177/uniform-jackets.html">UNIFORM JACKETS</a>

                                    <a style="text-transform:uppercase" href="http://www.thutoanfashion.com.vn/category/12178/uniform-shirts-for-office.html">UNIFORM SHIRTS FOR OFFICE</a>

                                    <a style="text-transform:uppercase" href="http://www.thutoanfashion.com.vn/category/12182/office-uniforms.html">OFFICE UNIFORMS</a>

                                    <a style="text-transform:uppercase" href="http://www.thutoanfashion.com.vn/category/12188/restaurant-and-hotel-staff-uniforms.html">RESTAURANT AND HOTEL STAFF UNIFORMS</a>

                                    <a style="text-transform:uppercase" href="http://www.thutoanfashion.com.vn/category/12183/protective-clothing.html">PROTECTIVE CLOTHING</a>

                                    <a style="text-transform:uppercase" href="http://www.thutoanfashion.com.vn/category/12184/hospital-uniforms.html">HOSPITAL UNIFORMS</a>

                                    <a style="text-transform:uppercase" href="http://www.thutoanfashion.com.vn/category/12185/class-uniforms.html">CLASS UNIFORMS</a>

                                    <a style="text-transform:uppercase" href="http://www.thutoanfashion.com.vn/category/12187/event-uniforms.html">EVENT UNIFORMS</a>

                                    <a style="text-transform:uppercase" href="http://www.thutoanfashion.com.vn/category/12186/caps-and-hats.html">CAPS AND HATS</a>

                                </div>
                            </div>

                            <p><a style="color:#222222" href="http://www.thutoanfashion.com.vn/photo">PHOTO LIBRARY</a></p>

                            <p><a style="color:#222222" href="http://www.thutoanfashion.com.vn/contact"><b>CONTACT INFORMATION</b></a></p>

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