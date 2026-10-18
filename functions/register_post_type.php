<?php
//add_action('init', function () {
//	register_post_type('projects', array(
//		'labels' => array(
//			'name' => 'Кейсы',
//			'singular_name' => 'Кейсы',
//			'menu_name' => 'Кейсы',
//			'name_admin_bar' => 'Кейсы',
//			'add_new' => 'Добавить проект',
//			'add_new_item' => 'Добавить новый проект',
//			'new_item' => 'Новый проект',
//			'edit_item' => 'Редактировать проект',
//			'view_item' => 'Посмотреть проект',
//			'all_items' => 'Все проекты',
//			'search_items' => 'Поиск проектов',
//			'not_found' => 'Проекты не найдены',
//			'not_found_in_trash' => 'Проекты не найдены в корзине',
//		),
//		'public' => true,
//		'public_queryable' => true,
//		'show_ui' => true,
//		'show_in_menu' => true,
//		'query_var' => true,
//		'rewrite' => [
//			'slug' => 'projects',
//			'with_front' => false,
//			'pages' => true, // важно для /page/2/
//			'feeds' => true
//		],
//		'capability_type' => 'post',
//		'has_archive' => true, // true
//		'hierarchical' => true,
//		'menu_position' => 3,
//		'menu_icon' => 'dashicons-portfolio',
//		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', ),
//		'show_in_rest' => true, //! редактор гутенберг

//	));
//});

//// таксономия
//register_taxonomy('projects_category', ['projects'], [
//	'label' => '',
//	'labels' => [
//		'name' => 'Категории проектов',
//		'singular_name' => 'Категория проектов',
//		'search_items' => 'Поиск категории',
//		'all_items' => 'Все категории',
//		'parent_item' => 'Родительская категория',
//		'parent_item_colon' => 'Родительская категория:',
//		'edit_item' => 'Редактировать категорию',
//		'update_item' => 'Обновить категорию',
//		'add_new_item' => 'Добавить новую категорию',
//		'new_item_name' => 'Название новой категории',
//		'menu_name' => 'Категории',
//		'back_to_items' => '← Назад к категориям',
//	],
//	'description' => '', // описание таксономии
//	'public' => true,
//	'hierarchical' => true, // для подкатегорий

//	'rewrite' => array('slug' => 'projects_category'),

//	'capabilities' => array(),
//	'meta_box_cb' => null,
//	'show_admin_column' => false,
//	'show_in_rest' => true,
//	'rest_base' => null,
//	'default_term' => [
//		'name' => 'Все',
//		'slug' => 'all',
//		'description' => 'Все проекты',
//	],
//]);
////! all - для всех проектов
//add_action('save_post_projects', 'force_all_category_projects', 10, 3);
//function force_all_category_projects($post_id, $post, $update)
//{
//	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
//		return;
//	if ($post->post_type !== 'projects')
//		return;

//	$all_term = get_term_by('slug', 'all', 'category');
//	if (!$all_term)
//		return;

//	$terms = wp_get_post_terms($post_id, 'category', ['fields' => 'ids']);

//	if (!in_array($all_term->term_id, $terms)) {
//		$terms[] = $all_term->term_id;
//		wp_set_post_terms($post_id, $terms, 'category');
//	}
//}