<?php

/**
 * Use this file to register any custom post types you wish to create.
 */
if (!function_exists('hoclaixe_create_custom_post_type')) {
	// Register Custom Post Type
	function hoclaixe_create_custom_post_type()
	{
		register_post_type('events', array(
			'label'               => __('Events', 'hoclaixe'),
			'description'         => __('Events', 'hoclaixe'),
			//'labels'                => $labels,
			'supports'            => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'),
			'taxonomies'          => array(''),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'		  => 'dashicons-calendar',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest'        => true,
		));

	}
	//sadd_action('init', 'hoclaixe_create_custom_post_type', 0); 
}

if (!function_exists('hoclaixe_create_custom_taxonomy')) {
	function hoclaixe_create_custom_taxonomy()
	{
		register_taxonomy('venues', array('events'), array(
			'labels'            => array(
				'name'          => _x('Venues', 'Taxonomy General Name', 'hoclaixe'),
				'singular_name' => _x('Venues', 'Taxonomy Singular Name', 'hoclaixe'),
				'menu_name'     => __('Venues', 'hoclaixe'),
				'all_items'         => __('All Venues', 'hoclaixe'),
				'edit_item'         => __('Edit Venues', 'hoclaixe'),
				'update_item'       => __('Update Venues', 'hoclaixe'),
				'add_new_item'      => __('Add New Venues', 'hoclaixe'),
			),
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_in_rest'      => true,

		));
	}

	//add_action('init', 'hoclaixe_create_custom_taxonomy', 0);
}


// Đăng ký Custom Post Type
if (!function_exists('custom_post_type_hoso_hoc_lai_xe')) {
	function custom_post_type_hoso_hoc_lai_xe()
	{
		$labels = array(
			'name' => 'Hồ sơ học lái xe',
			'singular_name' => 'Hồ sơ học lái xe',
			'menu_name' => 'Hồ sơ học lái xe',
			'all_items' => 'Tất cả hồ sơ',
			'add_new' => 'Thêm mới',
			'add_new_item' => 'Thêm mới hồ sơ',
			'edit_item' => 'Chỉnh sửa hồ sơ',
			'new_item' => 'Hồ sơ mới',
			'view_item' => 'Xem hồ sơ',
			'search_items' => 'Tìm kiếm hồ sơ',
			'not_found' => 'Không tìm thấy hồ sơ',
			'not_found_in_trash' => 'Không tìm thấy hồ sơ trong thùng rác',
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => false,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'ho-so-hoc-lai-xe'),
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
		);

		register_post_type('hoso_hoc_lai_xe', $args);
	}

// Hook để gọi hàm đăng ký Custom Post Type
	add_action('init', 'custom_post_type_hoso_hoc_lai_xe');
}


// Thêm cột vào danh sách bài đăng
function custom_hoso_hoc_lai_xe_columns($columns) {
	$columns['dia_chi_email'] = 'Địa chỉ Email';
	$columns['so_dien_thoai'] = 'Số Điện Thoại';
	$columns['dia_chi_hoc_vien'] = 'Địa chỉ học viên';
	$columns['trung_tam_dang_ki'] = 'Trung Tâm';
	$columns['khoa_hoc'] = 'Khóa học';
	$columns['trang_thai_ho_so'] = 'Trạng thái hồ sơ';
	return $columns;
}

add_filter('manage_hoso_hoc_lai_xe_posts_columns', 'custom_hoso_hoc_lai_xe_columns');

// Hiển thị nội dung cho từng cột
function custom_hoso_hoc_lai_xe_column_content($column, $post_id) {
	$ten_hoc_vien = get_post_meta($post_id, 'ten_hoc_vien', true);
	$dia_chi_email = get_post_meta($post_id, 'dia_chi_email', true);
	$so_dien_thoai = get_post_meta($post_id, 'so_dien_thoai', true);
	$dia_chi = get_post_meta($post_id, 'dia_chi', true);
	$trung_tam_dang_ki = get_post_meta($post_id, 'trung_tam_dang_ki', true);
	$khoa_hoc = get_post_meta($post_id, 'khoa_hoc', true);
	switch ($column) {
		case 'dia_chi_email':
			echo $dia_chi_email;
			break;
		case 'so_dien_thoai':
			echo $so_dien_thoai;
			break;
		case 'dia_chi_hoc_vien':
			echo $dia_chi;
			break;
		case 'trung_tam_dang_ki':
			echo $trung_tam_dang_ki;
			break;
		case 'khoa_hoc':
			echo $khoa_hoc;
			break;
		case 'trang_thai_ho_so':
			$trangThai = get_post_meta($post_id, 'trang_thai_ho_so', true);
			if ( $trangThai == 'moi') {
				echo 'Hồ sơ mới';
			} elseif ( $trangThai == 'da_lien_he' ) {
				echo 'Đã liên hệ';
			}
			break;
	}
}

add_action('manage_hoso_hoc_lai_xe_posts_custom_column', 'custom_hoso_hoc_lai_xe_column_content', 10, 2);

// Thêm action để gắn hook vào admin_menu
add_action('admin_menu', 'add_csv_export_page');

// Hàm sẽ được gọi khi admin_menu được kích hoạt
function add_csv_export_page() {
	// Thêm một submenu cho post type 'hoso_hoc_lai_xe'
	add_submenu_page(
		'edit.php?post_type=hoso_hoc_lai_xe', // ID của trang cha
		'Xuất CSV',                           // Tiêu đề trang
		'Xuất CSV',                           // Tiêu đề menu
		'manage_options',                     // Quyền truy cập
		'hoso_hoc_lai_xe_csv_export',        // Slug của trang
		'hoso_hoc_lai_xe_csv_export_page'    // Hàm hiển thị nội dung trang
	);
}

// Hàm để hiển thị nội dung trang xuất CSV
function hoso_hoc_lai_xe_csv_export_page() {
	?>
	<div class="wrap__csv_hosolaixe">
		<div>
			<div class="export-csv-form">
				<h2>Xuất danh sách học viên</h2>
				<form id="export-csv-form">
					<div class="field-wrap">
						<label for="address">Địa chỉ:</label>
						<select name="address" id="address">
							<option value="">Tất cả</option>
							<option value="Thành phố Đà Lạt">Thành phố Đà Lạt</option>
							<option value="Thành phố Bảo Lộc">Thành phố Bảo Lộc</option>
							<option value="Huyện Di Linh">Huyện Di Linh</option>
							<option value="Huyện Đức Trọng">Huyện Đức Trọng</option>
							<option value="Huyện Lâm Hà">Huyện Lâm Hà</option>
							<option value="Huyện Bảo Lâm">Huyện Bảo Lâm</option>
							<option value="Huyện Đơn Dương">Huyện Đơn Dương</option>
							<option value="Huyện Đam Rông">Huyện Đam Rông</option>
							<option value="Huyện Đạ Tẻh">Huyện Đạ Tẻh</option>
							<option value="Huyện Cát Tiên">Huyện Cát Tiên</option>
							<option value="Huyện Đạ Huoai">Huyện Đạ Huoai</option>
							<option value="Huyện Lạc Dương">Huyện Lạc Dương</option>
						</select>
					</div>
					<div class="field-wrap">
						<label for="center">Trung tâm:</label>
						<select name="center" id="center">
							<option value="">Tất cả</option>
							<option value="Trung tâm học lái 1">Trung tâm học lái 1</option>
							<option value="Trung tâm học lái 2">Trung tâm học lái 2</option>
							<option value="Trung tâm học lái 3">Trung tâm học lái 3</option>
						</select>
					</div>
					<div class="field-wrap">
						<label for="course">Khóa học:</label>
						<select name="course" id="course">
							<option value="">Tất cả</option>
							<option value="Hạng A1">Hạng A1</option>
							<option value="Hạng A2">Hạng A2</option>
							<option value="Hạng B1">Hạng B1</option>
							<option value="Hạng B2">Hạng B2</option>
							<option value="Hạng C">Hạng C</option>
							<option value="Hạng D">Hạng D</option>
							<option value="Hạng E">Hạng E</option>
							<option value="Hạng FC">Hạng FC</option>
						</select>
					</div>
					<div class="field-wrap">
						<label for="status">Trạng thái hồ sơ:</label>
						<select name="status" id="status">
							<option value="">Tất cả</option>
							<option value="moi">Mới</option>
							<option value="da_lien_he">Đã liên hệ</option>
						</select>
					</div>
					<div class="field-wrap">
						<button type="button" id="export-csv-button">Xuất CSV</button>
						<a href="<?php echo admin_url( 'admin-ajax.php' ); ?>?action=export_hoc_vien_csv">Export</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php
}

