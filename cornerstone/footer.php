<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cornerstone
 */

?>

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="footer-content">
			<div class="logo-content">
				<?php
				the_custom_logo();
				?>
				<p><?php echo get_field("footer_logo_under_content", "option") ?></p>
			</div>
			<div class="site-content">
				<ul>
					<?php
					if (have_rows('site_link', 'option')) {
						while (have_rows('site_link', 'option')) {
							the_row(); ?>
							<?php
							$link = get_sub_field('link', "option");
							if ($link) {
							?>
								<li>
									<a href="<?php echo esc_url($link['url']); ?>">
										<?php echo esc_html($link['title']); ?>
									</a>
								</li>
							<?php
							}
							?>
					<?php  }
					}
					?>
				</ul>
			</div>
			<div class="services-link">
				<ul>
					<?php
					if (have_rows('services_link', 'option')) {
						while (have_rows('services_link', 'option')) {
							the_row(); ?>
							<?php
							$services = get_sub_field('services', 'option');
							if ($services) {
							?>
								<li>
									<a href="<?php echo esc_url($services['url']); ?>">
										<?php echo esc_html($services['title']); ?>
									</a>
								</li>
							<?php
							}
							?>
					<?php  }
					}
					?>
				</ul>
			</div>
			<div class="social">
				<ul>
					<?php
					if (have_rows('social_link', 'option')) {
						while (have_rows('social_link', 'option')) {
							the_row(); ?>
							<li>
								<a href="<?php echo get_sub_field("link", "option") ?>">
									<img src="<?php echo get_sub_field("image", "option") ?>" alt="">
								</a>
							</li>
					<?php  }
					}
					?>
				</ul>
				<p class="address"><?php echo get_field("footer_address", "option") ?></p>
				<?php
				$phone_number = get_field("phone_number", "option");
				$cleaned_phone_number = preg_replace('/[^0-9]/', '', $phone_number);
				?>
				<a href="tell:<?php echo $cleaned_phone_number ?>" class="number"><?php echo get_field("phone_number", "option") ?></a>
			</div>
		</div>
	</div>
</footer>

<section class="footer-bottom">
	<div class="container">
		<div class="content">
			<p><?php echo get_field("copy_right_content", "option") ?></p>
			<ul>
				<?php
				if (have_rows('terms_link', 'option')) {
					while (have_rows('terms_link', 'option')) {
						the_row(); ?>
						<?php
						$terms_link = get_sub_field('link', 'option');
						if ($terms_link) {
						?>
							<li>
								<a href="<?php echo esc_url($terms_link['url']); ?>">
									<?php echo esc_html($terms_link['title']); ?>
								</a>
							</li>
						<?php
						}
						?>
				<?php  }
				}
				?>
			</ul>
		</div>
	</div>
</section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php wp_footer(); ?>

</body>

</html>