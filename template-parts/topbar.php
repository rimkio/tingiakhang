<?php
$datetime = __get_field('datetime', 'option');
$phone = __get_field('phone', 'option');
$address = __get_field('address', 'option');
?>

<div class="d-none d-lg-block top_contact">
    <div style="height:40px; background:#C39B46; padding: 0 15px">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p style="color:#ffffff; padding-top:11px; text-align:left; font-size:12px;">
                        <i class="fa fa-regular fa-clock"></i><span style="padding-left:6px"><?= $datetime ?></span>
                    </p>
                </div>
                <div class="col-sm-8">
                    <p style="color:#ffffff; padding-top:11px; text-align: right; font-size:12px; ">
                        <i class="fa fa-light fa-square-phone"></i><span style="padding-left:6px"><?= $phone ?></span>
                        <span style="padding-left:30px"><i class="fa fa-solid fa-location-dot"></i></span><span style="padding-left:6px"><?= $address ?></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>