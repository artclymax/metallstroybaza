<?php
$descr = get_field('header_descr', 'options') ?? get_bloginfo('description');
$phones = get_field('footer_phones', 'options') ?? '';
//$phones_phone = get_field('footer_phones_phone', 'options') ?? '';
$emails = get_field('footer_emails', 'options') ?? '';
//$emails_email = get_field('footer_emails_email', 'options') ?? '';
$time = get_field('footer_time', 'options') ?? '';
$messengers = get_field('footer_messengers', 'options') ?? '';
//$messengers_image = get_field('footer_messengers_image', 'options') ?? '';
//$messengers_text = get_field('footer_messengers_text', 'options') ?? '';
$links = get_field('footer_links', 'options') ?? '';
//$links_link = get_field('footer_links_link', 'options') ?? '';

?>
</main>

<!--<footer class="footer">
	<div class="container footer__container">
		<div class="footer__info">
			<div class="footer__logo logo logo--footer">
				<?php mx_logo(); ?>
				<p class="logo__descr">
					<?php echo esc_html($descr) ?>
				</p>
			</div>
			<nav class="footer__nav">
				<?php
				$menu = wp_nav_menu(
					array(
						'theme_location' => 'footer-menu',
						'container' => false,
						'menu_class' => 'footer-menu__list',
						'depth' => 1
					)
				);
				echo htmlspecialchars($menu); ?>
			</nav>
			<ul class="footer__contacts">
				<?php if ($phones): ?>
					<li class="footer__contacts-item footer-contacts-item icon icon--phone">
						<div class="footer-contacts-item__wrapper">
							<?php foreach ($phones as $item): ?>
								<a class="footer-contacts-item__link"
									href="tel:+<?php echo esc_attr(correct_phone($item['footer_phones_phone'])) ?>">
									<?php echo esc_html($item['footer_phones_phone']) ?>
								</a>
							<?php endforeach; ?>
						</div>
					</li>
				<?php endif; ?>
				<?php if ($emails): ?>
					<li class="footer__contacts-item footer-contacts-item icon icon--email">
						<div class="footer-contacts-item__wrapper">
							<?php foreach ($emails as $item): ?>
								<a class="footer-contacts-item__link"
									href="mailto:<?php echo esc_attr($item['footer_emails_email']) ?>"><?php echo esc_html($item['footer_emails_email']) ?></a>
							<?php endforeach; ?>
						</div>
					</li>
				<?php endif; ?>
				<?php if ($time): ?>
					<li class="footer__contacts-item footer-contacts-item icon icon--time">
						<div class="footer-contacts-item__wrapper">
							<div class="footer-contacts-item__descr descr">
								<?php echo wp_kses_post($time) ?>
							</div>
						</div>
					</li>
				<?php endif; ?>
				<?php if ($messengers): ?>
					<li class="footer__contacts-item footer-contacts-item">
						<div class="footer-contacts-item__messangers">
							<?php foreach ($messengers as $item): ?>
								<a class="footer-contacts-item__link-icon link-icon"
									href="<?php echo esc_attr($item['footer_messengers_text']) ?>" aria-label="Мессенджер">
									<?php echo wp_get_attachment_image(
										$item['footer_messengers_image']['ID'],
										'large',
										false,
										array(
											'class' => 'img',
											'alt' => $item['footer_messengers_image']['alt'] ?: 'Мессенджер'
										)
									) ?>
								</a>
							<?php endforeach; ?>
						</div>
					</li>
				<?php endif; ?>
			</ul>
		</div>
		<div class="footer__services-nav services-menu">
			<?php
			$menu = wp_nav_menu(
				array(
					'theme_location' => 'services-menu',
					'container' => false,
					'menu_class' => 'services-menu__list',
					'depth' => 2
				)
			);
			echo htmlspecialchars($menu); ?>
		</div>
		<div class="footer__bottom">
			<div class="footer__links">
				<?php foreach ($links as $item): ?>
					<a class="footer__link link" href="<?php echo esc_url($item['footer_links_link']['url'])?>">
						<?php echo esc_html($item['footer_links_link']['title'])?>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</footer>-->

<!--<?php get_template_part('partials/cookie-banner') ?>-->

<?php wp_footer(); ?>
</body>

</html>