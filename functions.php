<?php

// === Helpers ===
require_once get_template_directory() . '/functions/helpers/print_dump.php';
require_once get_template_directory() . '/functions/helpers/mx_logo.php';
require_once get_template_directory() . '/functions/helpers/scf-functions.php';
//require_once get_template_directory() . '/functions/helpers/trim_text.php';
require_once get_template_directory() . '/functions/helpers/correct_phone.php';
require_once get_template_directory() . '/functions/helpers/add_admin_thumbnail_column.php';
//require_once get_template_directory() . '/functions/helpers/get_prev_post_slug.php';
//require_once get_template_directory() . '/functions/helpers/get_next_post_slug.php';
//require_once get_template_directory() . '/functions/helpers/custom_product_category.php';
//require_once get_template_directory() . '/functions/helpers/get_product_attributes_array.php';

// === BASE ====
// Общая настройка темы (лого, название и т.п.)
require_once get_template_directory() . '/functions/default_settings.php';

// Подключение стилей
require_once get_template_directory() . '/functions/connect_styles.php';

// Подключение скриптов
require_once get_template_directory() . '/functions/connect_scripts.php';

// Отключение стилей Woocommerce
//add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// Поддержка темы на Woocommerce
//add_action('after_setup_theme', function () {
//	add_theme_support('woocommerce');
//});
// Создание меню
require_once get_template_directory() . '/functions/register_nav_menus.php';

// Регистрация новых записей
require_once get_template_directory() . '/functions/register_post_type.php';

// Кастомная админка
require_once get_template_directory() . '/functions/admin_page.php';


// Создание SCF-полей
require_once get_template_directory() . '/functions/scf_data.php';


//!
add_action('wp_head', function () {
	if (defined('WP_DEBUG')) {
		$vite_server = 'http://localhost:5173';
		echo "<!-- VITE DEV INJECT: start -->\n";
		echo '<script type="module" src="' . esc_url($vite_server) . '/@vite/client"></script>';
		echo '<script type="module" src="' . esc_url($vite_server) . '/main.js"></script>';
		echo "<!-- VITE DEV INJECT: end -->\n";
	};
});

add_filter('bcn_breadcrumb_title', function ($title, $type, $id) {

	// Главная страница
	if (in_array('home', $type)) {
		return 'Главная';
	}

	return $title;
}, 10, 3);


add_admin_thumbnail_column('projects');
add_admin_thumbnail_column('reviews');
add_admin_thumbnail_column('team');

add_action('pre_get_posts', function ($query) {
	// Проверяем: фронтенд, основной запрос, архив CPT "reviews"
	if (!is_admin() && $query->is_main_query() && is_post_type_archive('reviews')) {
		$query->set('posts_per_page', 12);
		$query->set('orderby', 'menu_order'); // если нужно сортировать по menu_order
		$query->set('order', 'ASC');
	}
});
add_action('pre_get_posts', function ($query) {
	// Проверяем: фронтенд, основной запрос, архив CPT "reviews"
	if (!is_admin() && $query->is_main_query() && is_post_type_archive('blog')) {
		$query->set('posts_per_page', 12);
		$query->set('orderby', 'menu_order'); // если нужно сортировать по menu_order
		$query->set('order', 'ASC');
	}
});

add_action('admin_head', function () {
	echo '<style>
        .acf-icon.-duplicate {
            display: inline-block !important;  /* всегда видна */
        }
    </style>';
});
