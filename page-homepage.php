<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php include (TEMPLATEPATH . '/inc/hero.php');  ?>
		<div class="l-container">
			<?php the_content() ?>
			<ul class="c-link-list ">

				<li class="c-link-list__item">

					<a href="#" class="c-link-list__link">
						<div class="c-link-list__body">
							<span class="c-link-list__link-text">Windshield Repairs</span>
						</div>
						<svg class="c-icon c-link-list__icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/xtremeautoglass/svg/icons.svg#caret-down"></use>
						</svg>
						<!--end c-icon-->
					</a>
					<!--end c-link-list__link-->

				</li>
				<!--end c-link-list__item-->

				<li class="c-link-list__item">

					<a href="#" class="c-link-list__link">
						<div class="c-link-list__body">
							<span class="c-link-list__link-text">Windshield Replacement</span>
						</div>
						<svg class="c-icon c-link-list__icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/xtremeautoglass/svg/icons.svg#caret-down"></use>
						</svg>
						<!--end c-icon-->
					</a>
					<!--end c-link-list__link-->

				</li>
				<!--end c-link-list__item-->

				<li class="c-link-list__item">

					<a href="#" class="c-link-list__link">
						<div class="c-link-list__body">
							<span class="c-link-list__link-text">Auto Glass Removal</span>
						</div>
						<svg class="c-icon c-link-list__icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/xtremeautoglass/svg/icons.svg#caret-down"></use>
						</svg>
					<!--end c-icon-->
					</a>
					<!--end c-link-list__link-->

				</li>
				<!--end c-link-list__item-->

				<li class="c-link-list__item">

					<a href="#" class="c-link-list__link">
						<div class="c-link-list__body">
							<span class="c-link-list__link-text">Door Window Replacement</span>
						</div>
						<svg class="c-icon c-link-list__icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/xtremeautoglass/svg/icons.svg#caret-down"></use>
						</svg>
						<!--end c-icon-->
					</a>
					<!--end c-link-list__link-->

				</li>
				<!--end c-link-list__item-->

				<li class="c-link-list__item">

					<a href="#" class="c-link-list__link">
						<div class="c-link-list__body">
							<span class="c-link-list__link-text">Rock Chip Repairs</span>
						</div>
						<svg class="c-icon c-link-list__icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/xtremeautoglass/svg/icons.svg#caret-down"></use>
						</svg>
						<!--end c-icon-->
					</a>
					<!--end c-link-list__link-->

				</li>
				<!--end c-link-list__item-->

				<li class="c-link-list__item">

					<a href="#" class="c-link-list__link">
						<div class="c-link-list__body">
							<span class="c-link-list__link-text">Door Motor Regulator Repair</span>
						</div>
						<svg class="c-icon c-link-list__icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/xtremeautoglass/svg/icons.svg#caret-down"></use>
						</svg>
						<!--end c-icon-->
					</a>
					<!--end c-link-list__link-->
				</li>
				<!--end c-link-list__item-->

				<li class="c-link-list__item">

					<a href="#" class="c-link-list__link">
						<div class="c-link-list__body">
							<span class="c-link-list__link-text">Classic Car Glass</span>
						</div>
						<svg class="c-icon c-link-list__icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/xtremeautoglass/svg/icons.svg#caret-down"></use>
						</svg>
						<!--end c-icon-->
					</a>
					<!--end c-link-list__link-->

				</li>
				<!--end c-link-list__item-->

				<li class="c-link-list__item">

					<a href="#" class="c-link-list__link">
						<div class="c-link-list__body">
							<span class="c-link-list__link-text">Vinyl Graphics</span>
						</div>
						<svg class="c-icon c-link-list__icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/xtremeautoglass/svg/icons.svg#caret-down"></use>
						</svg>
						<!--end c-icon-->
					</a>
					<!--end c-link-list__link-->

				</li>
				<!--end c-link-list__item-->

				<li class="c-link-list__item">

					<a href="#" class="c-link-list__link">
						<div class="c-link-list__body">
							<span class="c-link-list__link-text">Insurance Claims</span>
						</div>
						<svg class="c-icon c-link-list__icon">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/xtremeautoglass/svg/icons.svg#caret-down"></use>
						</svg>
						<!--end c-icon-->
					</a>
					<!--end c-link-list__link-->
				</li>
				<!--end c-link-list__item-->
			</ul>
			<?php echo do_shortcode( '[contact-form-7 id="45" title="Quote Form" html_class="c-form c-form--grid"]' ); ?>
		</div>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
