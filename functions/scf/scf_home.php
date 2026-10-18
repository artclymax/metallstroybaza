<?php
create_options_page(
	'Главная',
	'opt-home',
);

// hero
create_options_page(
	'Первый экран',
	'opt-hero',
	'opt-home',
);

create_fields(
	'Первый экран',
	'opt-hero',
	[
		add_field_repeater(
			'hero_slider',
			'Слайды',
			[
				add_field_text(
					'hero_slider_title',
					'Заголовок'
				),
				add_field_redactor_wysiwyg(
					'hero_slider_descr',
					'Описание'
				),
				add_field_link(
					'hero_slider_btn',
					'Кнопка'
				),
				add_field_link(
					'hero_slider_btn',
					'Кнопка'
				),
				add_field_repeater(
					'hero_benefits',
					'Преимущества',
					[
						add_field_image(
							'hero_benefits_image',
							'Картинка'
						),
						add_field_redactor_wysiwyg(
							'hero_benefits_descr',
							'Описание'
						),
					],
				),
				add_field_image(
					'hero_slider_image',
					'Фон'
				)
			],
			null,
			[
				'layout' => 'block',
				'collapsed' => 'field_hero_slider_title',
			]
		),
	]
);