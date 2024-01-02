<?php
$logo = get_field("logo_footer", "options");
$social = get_field("social", "options");
$ft_contact = get_field("ft_contact", "options");
?>
<footer id="site-footer" class="main-footer">
    <div class="main-footer__widget">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="main-footer__widget-logo"> <?php if ($logo) { ?> <img src="<?= $logo['url'] ?>" alt="Logo" />
						<?php } ?> </div>
                    <ul class="wrap-lien-he">
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z" fill="#222222"/>
                            </svg>
                            <p><?= $ft_contact["address"] ?></p>
                        </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z" fill="#222222"/>
                            </svg> <a href="tel:<?= $ft_contact["phone"] ?>"><?= $ft_contact["phone"] ?></a> </li>
                        <li> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21 3C21.5523 3 22 3.44772 22 4V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5V4C2 3.44772 2.44772 3 3 3H21ZM8 15V17H0V15H8ZM5 10V12H0V10H5ZM19.5659 5H4.43414L12 11.8093L19.5659 5Z" fill="#222222"/>
                            </svg> <a href="mailTo:<?= $ft_contact["email"] ?>"><?= $ft_contact["email"] ?></a> </li>
                    </ul>
                </div>
                <div class="col-md-4 text-center main-footer__widget-center">
					<?php if (has_nav_menu('footer-menu')) {
						wp_nav_menu([
							'theme_location' => 'footer-menu',
							'menu_class' => 'footer-menu',
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'bootstrap' => false
						]);
					}
					?>
					<?php if ($social) { ?> <ul class="main-footer__widget-social">
                        <?php if ($social['facebook']) { ?>
                            <li><a href="<?= $social['facebook'] ?>" target="_blank"
                                   rel="nofollow"><?php echo hoclaixe_svg_icon('facebook') ?></a></li> <?php } ?>
						<?php if ($social['messenger']) { ?> <li><a href="<?= $social['messenger'] ?>" target="_blank"
                                                                    rel="nofollow"><?php echo hoclaixe_svg_icon('messenger') ?></a></li> <?php } ?>
						<?php if ($social['instagram']) { ?> <li><a href="<?= $social['instagram'] ?>" target="_blank"
                                                                    rel="nofollow"><?php echo hoclaixe_svg_icon('instagram') ?></a></li> <?php } ?>
						<?php if ($social['youtube']) { ?> <li><a href="<?= $social['youtube'] ?>" target="_blank"
                                                                  rel="nofollow"><?php echo hoclaixe_svg_icon('youtube') ?></a></li> <?php } ?> </ul>
					<?php } ?> </div>
                <div class="col-md-4 map-hoc-lai-xe">
                    <img src="/wp-content/uploads/2023/12/map-hoc-lai-xe.png" alt="image map"/>
                </div>
            </div>
        </div>
    </div>
    <div class="main-footer__socket">
        <div class="container"><div class="main-footer__socket-copyright">Copyright © by hoclaixelamdong</div></div>
    </div>
</footer>