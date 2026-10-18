<?php
$phones = get_field('contacts_phones', 'options') ?? [];
$class = $args['class'] ?? '';

$vb = get_template_directory_uri() . '/assets/images/icons/vb.svg';
$tg = get_template_directory_uri() . '/assets/images/icons/tg.svg';
$wh = get_template_directory_uri() . '/assets/images/icons/wh.svg';

?>
<?php if ($phones): ?>
	<ul class="phone-box <?php echo esc_attr($class) ?>">
		<?php foreach ($phones as $item): ?>
			<li class="phone-box__item">
				<a class="phone-box__link link" href="tel:+<?php echo esc_attr(correct_phone($item['contacts_phones_phone'])) ?>">
					<?php echo esc_html($item['contacts_phones_phone']) ?>
				</a>
				<?php if ($item['contacts_phones_messengers']):
					foreach ($item['contacts_phones_messengers'] as $msg): ?>
						<?php if ($msg == 'vb'): ?>
							<a class="phone-box__link-icon link-icon" href="viber://chat?number=<?php echo esc_attr(correct_phone($item['contacts_phones_phone'])) ?>" aria-label="Вайбер">
								<img src="<?php echo esc_attr($vb) ?>" alt="Вайбер">
							</a>
						<?php endif; ?>
						<?php if ($msg == 'tg'): ?>
							<a class="phone-box__link-icon link-icon" href="https://t.me/+<?php echo esc_attr(correct_phone($item['contacts_phones_phone'])) ?>" aria-label="Телеграм">
								<img src="<?php echo esc_attr($tg) ?>" alt="Телеграм">
							</a>
						<?php endif; ?>
						<?php if ($msg == 'wh'): ?>
							<a class="phone-box__link-icon link-icon" href="https://wa.me/<?php echo esc_attr(correct_phone($item['contacts_phones_phone'])) ?>" aria-label="Ватсап">
								<img src="<?php echo esc_attr($wh) ?>" alt="Ватсап">
							</a>
						<?php endif; ?>
					<?php endforeach; endif; ?>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>