<?php

create_options_page(
	'Контактные данные',
	'opt-contacts'
);

create_fields(
	'Контактные данные',
	'opt-contacts',
	[
		add_field_repeater(
			'contacts_phones',
			'Телефоны',
			[
				add_field_text(
					'contacts_phones_phone',
					'Номер'
				),
				add_field_checkbox(
					'contacts_phones_messengers',
					'Мессенджеры',
					[
						'vb' => 'Вайбер',
						'tg' => 'Телеграм',
						'wh' => 'Ватсапп',
					]
				)
			]
		)
	]
);