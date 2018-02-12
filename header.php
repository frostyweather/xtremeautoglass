<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xtremeautoglass
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto+Slab:400,700" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header id="masthead" class="c-header site-header">
			<div class="c-header__inner">
				<div class="c-header__top">
					<a href="/" class="c-logo-link">
						<!--?xml version="1.0" encoding="UTF-8"?-->
						<svg class="c-logo" width="558px" height="229px" viewBox="0 0 558 229" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<!-- Generator: Sketch 48.2 (47327) - http://www.bohemiancoding.com/sketch -->
							<title>xtremeautoglass</title>
							<defs>
								<text id="text-1" font-family="SnellRoundhand-Black, Snell Roundhand" font-size="50" font-weight="700" letter-spacing="2.5">
									<tspan x="171.458333" y="66">Xtrem</tspan>
									<tspan x="331.158333" y="66" letter-spacing="2.08333325">e</tspan>
								</text>
								<filter x="-0.7%" y="-2.4%" width="101.5%" height="107.9%" filterUnits="objectBoundingBox" id="filter-2">
									<feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
									<feColorMatrix values="0 0 0 0 0.894117647   0 0 0 0 0.894117647   0 0 0 0 0.894117647  0 0 0 1 0" type="matrix" in="shadowOffsetOuter1"></feColorMatrix>
								</filter>
								<text id="text-3" font-family="Futura-MediumItalic, Futura" font-size="65" font-style="italic" font-weight="500">
								<tspan x="173.086182" y="124">AUTOGLASS</tspan>
								</text>
								<filter x="-0.5%" y="-2.4%" width="101.0%" height="108.3%" filterUnits="objectBoundingBox" id="filter-4">
									<feOffset dx="0" dy="3" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
									<feColorMatrix values="0 0 0 0 0.894117647   0 0 0 0 0.894117647   0 0 0 0 0.894117647  0 0 0 1 0" type="matrix" in="shadowOffsetOuter1"></feColorMatrix>
								</filter>
								<text id="text-5" font-family="SnellRoundhand-Black, Snell Roundhand" font-size="50" font-weight="700" letter-spacing="2.5">
									<tspan x="423.144759" y="167">Pro</tspan>
									<tspan x="527.844759" y="167" letter-spacing="2.08333325">s</tspan>
								</text>
								<filter x="-0.8%" y="-2.4%" width="101.7%" height="107.9%" filterUnits="objectBoundingBox" id="filter-6">
									<feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
									<feColorMatrix values="0 0 0 0 0.894117647   0 0 0 0 0.894117647   0 0 0 0 0.894117647  0 0 0 1 0" type="matrix" in="shadowOffsetOuter1"></feColorMatrix>
								</filter>
								<text id="text-7" font-family="SnellRoundhand-Black, Snell Roundhand" font-size="50" font-weight="700" letter-spacing="2.5">
									<tspan x="280.561426" y="207">Pittsburgh</tspan>
								</text>
								<filter x="-0.5%" y="-2.4%" width="101.0%" height="107.9%" filterUnits="objectBoundingBox" id="filter-8">
									<feOffset dx="0" dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset>
									<feColorMatrix values="0 0 0 0 0.894117647   0 0 0 0 0.894117647   0 0 0 0 0.894117647  0 0 0 1 0" type="matrix" in="shadowOffsetOuter1"></feColorMatrix>
								</filter>
								<path d="M49.5676644,34.2183423 L33.0221284,51.6019442 L51.5340752,89.3492965 L78.8607572,27.7206447 L108.178562,84.9254541 L136.006651,29.2311333 L111.826119,19.9631619 L195.530826,0 L170.975313,18.0972116 L122.070581,111.282361 L169.265874,205.117549 L195.530826,224 L111.826119,205.117549 L136.006651,194.641724 L108.178562,139.335278 L78.8607572,197.421131 L51.5340752,134.177411 L33.0221284,172.753338 L49.5676644,189.077002 L0,177.643131 L19.8100537,163.34551 L40.7796112,113.044359 L19.8100537,60.6000512 L0,46.6147352 L49.5676644,34.2183423 Z M79.6260233,80.9290323 L65.0322581,111.494055 L79.6260233,142.206592 L95.0010729,111.494055 L79.6260233,80.9290323 Z" id="path-9"></path>
								<filter x="-2.5%" y="-2.1%" width="106.1%" height="104.1%" filterUnits="objectBoundingBox" id="filter-10">
									<feMorphology radius="3" operator="erode" in="SourceAlpha" result="shadowSpreadInner1"></feMorphology>
									<feGaussianBlur stdDeviation="0.5" in="shadowSpreadInner1" result="shadowBlurInner1"></feGaussianBlur>
									<feOffset dx="0" dy="1" in="shadowBlurInner1" result="shadowOffsetInner1"></feOffset>
									<feComposite in="shadowOffsetInner1" in2="SourceAlpha" operator="arithmetic" k2="-1" k3="1" result="shadowInnerInner1"></feComposite>
									<feColorMatrix values="0 0 0 0 0.368627451   0 0 0 0 0.364705882   0 0 0 0 0.4  0 0 0 1 0" type="matrix" in="shadowInnerInner1"></feColorMatrix>
								</filter>
							</defs>
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="xtremeautoglass-logo" transform="translate(3.000000, 3.000000)">
									<g id="Xtreme">
										<use stroke="#5E5D66" fill="#F5E135" fill-opacity="1" stroke-width="1" stroke-opacity="1" filter="url(#filter-2)" xlink:href="#text-1"></use>
										<use fill="#F5E135" fill-rule="evenodd" xlink:href="#text-1"></use>
										<use stroke="#5E5D66" stroke-width="1" xlink:href="#text-1"></use>
									</g>
									<g id="AUTOGLASS">
										<use stroke="#5E5D66" fill="#F5E135" fill-opacity="1" stroke-width="1" stroke-opacity="1" filter="url(#filter-4)" xlink:href="#text-3"></use>
										<use fill="#F5E135" fill-rule="evenodd" xlink:href="#text-3"></use>
										<use stroke="#5E5D66" stroke-width="1" xlink:href="#text-3"></use>
									</g>
									<g id="Pros">
										<use stroke="#5E5D66" fill="#F5E135" fill-opacity="1" stroke-width="1" stroke-opacity="1" filter="url(#filter-6)" xlink:href="#text-5"></use>
										<use fill="#F5E135" fill-rule="evenodd" xlink:href="#text-5"></use>
										<use stroke="#5E5D66" stroke-width="1" xlink:href="#text-5"></use>
									</g>
									<g id="Pittsburgh">
										<use stroke="#5E5D66" fill="#F5E135" fill-opacity="1" stroke-width="1" stroke-opacity="1" filter="url(#filter-8)" xlink:href="#text-7"></use>
										<use fill="#F5E135" fill-rule="evenodd" xlink:href="#text-7"></use>
										<use stroke="#5E5D66" stroke-width="1" xlink:href="#text-7"></use>
									</g>
									<g id="Combined-Shape">
										<use fill="#F5E135" fill-rule="evenodd" xlink:href="#path-9"></use>
										<use fill="black" fill-opacity="1" filter="url(#filter-10)" xlink:href="#path-9"></use>
										<use stroke="#E4E4E4" stroke-width="2" xlink:href="#path-9"></use>
									</g>
								</g>
							</g>
						</svg>
					</a>
					<div class="c-header__text">
						<div class="c-social-nav">
							<h4 class="c-social-nav__heading">Follow Us:</h4>
							<ul class="c-social-nav__list">
								<li class="c-social-nav__item">
									<a href="https://www.facebook.com/pittautoglass/" target="_blank" class="c-social-nav__link">
										<svg class="c-icon c-social-nav__icon">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/xtremeautoglass/svg/icons.svg#facebook"></use>
										</svg><!--end c-icon-->
									</a>
									<!--end c-social-nav__link-->
								</li>
								<!--end c-social-nav__item-->
								<li class="c-social-nav__item">
									<a href="https://www.instagram.com/xtremeautoglass/" target="_blank" class="c-social-nav__link">
										<svg class="c-icon c-social-nav__icon">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/xtremeautoglass/svg/icons.svg#instagram"></use>
										</svg><!--end c-icon-->
									</a>
									<!--end c-social-nav__link-->
								</li>
								<!--end c-social-nav__item-->
								<li class="c-social-nav__item">
									<a href="https://www.google.com/search?q=xtreme+autoglass+pros+pittsburgh" target="_blank" class="c-social-nav__link">
										<svg class="c-icon c-social-nav__icon">
											<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/xtremeautoglass/svg/icons.svg#google"></use>
										</svg><!--end c-icon-->
									</a>
									<!--end c-social-nav__link-->
								</li>
								<!--end c-social-nav__item-->
							</ul>
							<!--end c-social-nav-->
						</div>
						<a href="tel:1-412-226-5006" class="c-header__quote-link">
							<h2 class="c-header__quote">Call For An Instant Quote</h2>
							<span class="c-header__phone tel">412-226-5006</span>
						</a>
						<address class="c-header__address adr">
							<span class="street-address">23 D Dewey Lane</span><br />
							<span class="locality">Gibsonia</span>,
							<abbr class="region" title="Pennsylvania">PA</abbr>
							<span class="postal-code">15044</span>
						</address>
					</div>
				</div>
			</div>

		</header><!-- #masthead -->
		<div class="c-navigation-bar js-nav-target menu-navigation-bar">
			<button class="c-btn c-header__nav-btn js-nav-trigger">
			    <div class="c-btn__inner">
			        <span class="c-btn__text js-btn-text">Menu</span>
			    </div><!--end c-btn__inner-->
			</button>
			<div class="c-nav-container">
				<button class="c-btn c-btn--text c-header__close-btn js-nav-close-trigger">
				    <div class="c-btn__inner">
				           <span class="c-btn__text js-btn-text">Close</span>
				        <svg class="c-btn__icon ">
				            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/wp-content/themes/xtremeautoglass/svg/icons.svg#x"></use>
				        </svg>
				    </div><!--end c-btn__inner-->
				</button>
				<nav id="site-navigation" class="c-primary-nav main-navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div>

	<div id="content" class="site-content">
