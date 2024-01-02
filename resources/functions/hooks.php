<?php

/**
 * Hooks.
 */

function imageTagForJs($response, $attachment)
{
	foreach ($response['sizes'] as $size => $datas) {
		$response['sizes'][$size]['tag']    = wp_get_attachment_image($attachment->ID, $size);
		$response['sizes'][$size]['srcset'] = wp_get_attachment_image_srcset($attachment->ID, $size);
	}
	return $response;
}
add_filter('wp_prepare_attachment_for_js', 'imageTagForJs', 10, 2);


/**
 * Allow upload json file
 */
add_filter('upload_mimes', function ($mime_types) {
	$mime_types['json'] = 'application/json'; // Adding .json extension

	return $mime_types;
}, 1);

/**
 * Header template
 * @return void
 */
add_action('hoclaixe_hook_header', 'hoclaixe_header_template');
function hoclaixe_header_template()
{
	load_template(get_template_directory() . '/template-parts/header.php', false);
}


/**
 * Footer template
 * @return void
 */
add_action('hoclaixe_hook_footer', 'hoclaixe_footer_template');
function hoclaixe_footer_template()
{
	load_template(get_template_directory() . '/template-parts/footer.php', false);
}

/**
 * Post loop item template
 *
 * @param Int $post_id
 *
 * @return void
 */
add_action('hoclaixe_hook_post_loop_item', 'hoclaixe_post_loop_item_template', 20, 2);
function hoclaixe_post_loop_item_template($post_id, $index)
{
	set_query_var('post_id', $post_id);
	$v  = ($index) % 3;
	$vT = ceil($v);

	$anm = 'data-aos="fade-up" data-aos-duration="' . (($v !== 0 ? $vT : 3) * 400) . '"';
?>
    <article <?= $anm; ?> <?php post_class('item post-loop-item col-sm-6 col-md-12 col-lg-6') ?>>
		<?php hoclaixe_post_item() ?>
	</article>
<?php
}

/*
 * Display all category post
 */

function display_all_categories_posts_section() {
	$categories = get_categories(array(
		'orderby' => 'name',
		'order' => 'ASC',
	));

	if ($categories) {
		$i = 0;
		foreach ($categories as $category) {
			$duration = ($i * 300) + 500;
			echo '<ul>';
			echo '<li data-aos="fade-up" data-aos-duration="'.$duration.'"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '<svg xmlns="http://www.w3.org/2000/svg" width="10" height="16" viewBox="0 0 10 16" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.94248 7.05719C9.46318 7.57789 9.46318 8.42211 8.94248 8.94281L2.27582 15.6095C1.75512 16.1302 0.910898 16.1302 0.390199 15.6095C-0.1305 15.0888 -0.1305 14.2446 0.390199 13.7239L6.11406 8L0.390199 2.27614C-0.1305 1.75544 -0.1305 0.911223 0.390199 0.390524C0.910898 -0.130175 1.75512 -0.130175 2.27582 0.390524L8.94248 7.05719Z" fill="#928342"/>
</svg></a></li>';
			echo '</ul>';
		}
	} else {
		echo 'No categories found.';
	}
}

add_action('hoclaixe_hook_display_all_categories', 'display_all_categories_posts_section');


/*
 * Display all category post
 */

function display_all_tags_for_posts() {
	$post_tags = get_tags(array(
		'hide_empty' => false
	));

	if ($post_tags) {
		echo '<ul>';
		$i = 0;
		foreach ($post_tags as $tag) {
			$duration = ($i * 300) + 500;
			echo '<li data-aos="fade-up" data-aos-duration="'.$duration.'"><a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a></li>';
		}

		echo '</ul>';
	}
}

add_action('hoclaixe_hook_display_all_tags', 'display_all_tags_for_posts');

function hoclaixe_child_deregister_styles()
{
	wp_dequeue_style('classic-theme-styles');

	wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'style-blog-css', get_stylesheet_directory_uri() . '/assets/css/style-blog.css' );
	wp_enqueue_style( 'style-woo-css', get_stylesheet_directory_uri() . '/assets/css/style-woo.css' );
	wp_enqueue_style( 'responsive-css', get_stylesheet_directory_uri() . '/assets/css/responsive.css' );

	wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array( 'jquery' ), null, true );

	wp_localize_script( 'main-js', 'hoclaixeAjax', array(

		'ajaxUrl' => admin_url( 'admin-ajax.php' )

	));

	wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/assets/lib/slick/slick.min.js', array( 'jquery' ), null, true );

	wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/lib/slick/slick.css' );
}
add_action('wp_enqueue_scripts', 'hoclaixe_child_deregister_styles', 20);


if ( ! function_exists( 'hoclaixe_admin_enqueue' ) ) {
	function hoclaixe_admin_enqueue() {
		wp_enqueue_script( 'js-admin', get_stylesheet_directory_uri() . '/assets/js/js-admin.js', array( 'jquery' ), null, true );
		wp_localize_script( 'js-admin', 'hoclaixeAjax', array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' )
		));
		wp_enqueue_style( 'style-admin-css', get_stylesheet_directory_uri() . '/assets/css/style-admin.css' );
	}

	add_action( 'admin_enqueue_scripts', 'hoclaixe_admin_enqueue' );
}


/*
 * Track post views
 */

function track_post_views() {
	if (is_single()) {
		$post_id = get_the_ID();
		$views = (int)get_post_meta($post_id, 'post_views', true);
		$views++;

		update_post_meta($post_id, 'post_views', $views);
	}
}

add_action('wp_head', 'track_post_views');

/*
 * Change logo login
 */

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url('/wp-content/uploads/2023/12/logo-hoc-lai-xe-lam-dong.svg');
            height:65px;
            width:320px;
            background-size: 320px 65px;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


/*
 * Popup menu mobile
 */

function hoclaixe_child_menu_mobile() {
	load_template(get_template_directory() . '/template-parts/content-menu-mobile.php', false);
}

add_action('hoclaixe_hook_menu_mobile', 'hoclaixe_child_menu_mobile');

/*
 * Submit form đăng kí hồ sơ lái xe
 */

// Đăng ký AJAX action

add_action('wp_ajax_save_hoso_hoc_lai_xe', 'save_hoso_hoc_lai_xe');
add_action('wp_ajax_nopriv_save_hoso_hoc_lai_xe', 'save_hoso_hoc_lai_xe');

function save_hoso_hoc_lai_xe() {
	// Lấy dữ liệu từ AJAX request
	parse_str($_POST['formData'], $formData);

	// Tạo post mới
	$post_args = array(
		'post_title'   => $formData['name'],
		'post_content' => '',
		'post_status'  => 'publish',
		'post_type'    => 'hoso_hoc_lai_xe',
	);

	$post_id = wp_insert_post($post_args);

	// Kiểm tra xem bài đăng có được tạo thành công hay không
	if ($post_id) {
		// Lưu thông tin vào các trường meta
		update_post_meta($post_id, 'trang_thai_ho_so', 'moi');

		update_post_meta($post_id, 'ten_hoc_vien', sanitize_text_field($formData['name']));
		update_post_meta($post_id, 'dia_chi_email', sanitize_email($formData['email']));
		update_post_meta($post_id, 'so_dien_thoai', sanitize_text_field($formData['phone']));
		update_post_meta($post_id, 'dia_chi', sanitize_text_field($formData['address']));
		update_post_meta($post_id, 'trung_tam_dang_ki', sanitize_text_field($formData['center']));
		update_post_meta($post_id, 'khoa_hoc', sanitize_text_field($formData['course']));

		// Thông báo cho client và admin

		$headers = array('Content-Type: text/html; charset=UTF-8');
		$subjectAdmin = 'Thông báo nhận được 1 hồ sơ học lái xe Lâm Đồng';
		ob_start();
		get_template_part('template-parts/email/email-notify', 'admin');
		$message_with_name = ob_get_clean();

		$message_with_name = str_replace("[name]", $formData['name'], $message_with_name);
		$message_with_name = str_replace("[email]", $formData['email'], $message_with_name);
		$message_with_name = str_replace("[phone]", $formData['phone'], $message_with_name);
		$message_with_name = str_replace("[address]", $formData['address'], $message_with_name);
		$message_with_name = str_replace("[center]", $formData['center'], $message_with_name);
		$message_with_name = str_replace("[course]", $formData['course'], $message_with_name);

		wp_mail('leconganh141@gmail.com', $subjectAdmin, $message_with_name, $headers);

		//Send mail client
		$subject = 'Xác nhận Gửi Hồ Sơ Học Lái Xe Lâm Đồng';
		ob_start();
		get_template_part('template-parts/email/email-notify', 'client');
		$message_client = ob_get_clean();

		$message_client = str_replace("[name]", $formData['name'], $message_client);
		$message_client = str_replace("[email]", $formData['email'], $message_client);
		$message_client = str_replace("[phone]", $formData['phone'], $message_client);
		$message_client = str_replace("[address]", $formData['address'], $message_client);
		$message_client = str_replace("[center]", $formData['center'], $message_client);
		$message_client = str_replace("[course]", $formData['course'], $message_client);

		wp_mail($formData['email'], $subject, $message_client, $headers);

		wp_send_json(['success' => true]);

	} else {
		// Thông báo lỗi nếu có vấn đề khi tạo bài đăng
		wp_send_json(['error' => 'Failed to create post.']);
	}

	wp_die(); // Kết thúc quá trình AJAX
}

// Export csv hồ sơ lái xe
function export_hoc_vien_csv() {
	// Thiết lập tên file và kiểu MIME
	$filename = 'danh-sach-hoc-vien-' . date('Y-m-d') . '.csv';
	header('Content-Type: text/csv');
	header('Content-Disposition: attachment; filename="' . $filename . '"');
	header('Pragma: no-cache');
	header('Expires: 0');

	// Tạo bộ lọc cho địa chỉ, trung tâm và khóa học
	$address_filter = (isset($_GET['address'])) ? sanitize_text_field($_GET['address']) : '';
	$center_filter = (isset($_GET['center'])) ? sanitize_text_field($_GET['center']) : '';
	$course_filter = (isset($_GET['course'])) ? sanitize_text_field($_GET['course']) : '';
	$status_filter = (isset($_GET['status'])) ? sanitize_text_field($_GET['status']) : '';

	// Initialize the meta_query array
	$meta_query = array('relation' => 'AND');

    // Add conditions only if the values are not empty
	if (!empty($status_filter)) {
		$meta_query[] = array(
			'key'   => 'trang_thai_ho_so',
			'value' => $status_filter,
		);
	}

	if (!empty($address_filter)) {
		$meta_query[] = array(
			'key'   => 'dia_chi',
			'value' => $address_filter,
		);
	}

	if (!empty($center_filter)) {
		$meta_query[] = array(
			'key'   => 'trung_tam_dang_ki',
			'value' => $center_filter,
		);
	}

	if (!empty($course_filter)) {
		$meta_query[] = array(
			'key'   => 'khoa_hoc',
			'value' => $course_filter,
		);
	}

    // Thực hiện truy vấn để lấy dữ liệu
	$args = array(
		'post_type'      => 'hoso_hoc_lai_xe',
		'posts_per_page' => -1,
		'meta_query'     => $meta_query,
	);

	$query = new WP_Query($args);

	// Tạo bảng dữ liệu CSV
	$csv_data = fopen('php://output', 'w');

	// Thêm tiêu đề vào file CSV
	fputcsv($csv_data, array('Tên học viên', 'Địa chỉ Email', 'Số Điện Thoại', 'Địa chỉ', 'Trung Tâm', 'Khóa học', 'Trạng thái hồ sơ'));

	// Thêm dữ liệu từ bài đăng vào file CSV

	while ($query->have_posts()) {
		$query->the_post();
		$ten_hoc_vien = get_post_meta(get_the_ID(), 'ten_hoc_vien', true);
		$dia_chi_email = get_post_meta(get_the_ID(), 'dia_chi_email', true);
		$so_dien_thoai = get_post_meta(get_the_ID(), 'so_dien_thoai', true);
		$dia_chi = get_post_meta(get_the_ID(), 'dia_chi', true);
		$trung_tam = get_post_meta(get_the_ID(), 'trung_tam_dang_ki', true);
		$khoa_hoc = get_post_meta(get_the_ID(), 'khoa_hoc', true);
		$trang_thai_ho_so = get_post_meta(get_the_ID(), 'trang_thai_ho_so', true);
		if ($trang_thai_ho_so == 'moi' ) {
		    $trang_thai_ho_so = "Hồ sơ mới";
        } else if( $trang_thai_ho_so == 'da_lien_he' ) {
			$trang_thai_ho_so = "Đã liên hệ";
        }

		fputcsv($csv_data, array($ten_hoc_vien, $dia_chi_email, $so_dien_thoai, $dia_chi, $trung_tam, $khoa_hoc, $trang_thai_ho_so));
	}

	// Đóng tài nguyên
	fclose($csv_data);
	wp_reset_postdata();
	die();
}

add_action('wp_ajax_export_hoc_vien_csv', 'export_hoc_vien_csv');
add_action('wp_ajax_nopriv_export_hoc_vien_csv', 'export_hoc_vien_csv');


function testing() {
	$subject = 'Xác nhận Gửi Hồ Sơ Học Lái Xe Lâm Đồng';
	ob_start();
	get_template_part('template-parts/email/email-notify', 'client');
	$message_client = ob_get_clean();


	$headers = array('Content-Type: text/html; charset=UTF-8');

	wp_mail('leconganh141@gmail.com', $subject, $message_client, $headers);
}

//add_action('admin_init', 'testing');