<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tailwindcss
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('leading-normal'); ?>>

	<div class="py-2" id="top-bar">
		<div class="container mx-auto">
			<div class="text-sm flex justify-between" id="top-bar-text">
				<div class="flex">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
						<path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
						<path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
					</svg>
					<div class="ml-1">jacksonfei@vip.163.com</div>
					<svg xmlns="http://www.w3.org/2000/svg" class="ml-1 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
						<path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
					</svg>
					<div class="ml-1">+86 13952746510</div>
				</div>
				<div class="flex">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
					</svg>
					<div class="ml-1">CHOOSE LANGUAGE</div>
				</div>

			</div>
		</div>

	</div><!-- #topbar -->

	<div id="page" class="site">
		<div class="relative">
			<div id="site-branding" class="py-4">
				<div class="container mx-auto">
					<div class="flex items-center">
						<img src="wp-content/themes/joycare-wordpress-theme-2022/images/logo-white-h50px-2.png" alt="joycare-logo">
						<?php
						the_custom_logo();
						if (is_front_page() && is_home()) :
						?>
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="font-semibold tracking-wide no-underline md:flex-1" id="site-title"><?php bloginfo('name'); ?></a>
						<?php
						else :
						?>
							<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
						<?php
						endif;
						?>
						<nav class="hidden md:flex">
							<a href="#" class="font-semibold tracking-wide no-underline site-title-link">首页</a>
							<a href="#" class="font-semibold tracking-wide no-underline site-title-link ml-4">产品</a>
							<a href="#" class="font-semibold tracking-wide no-underline site-title-link ml-4">公司动态</a>
							<a href="#" class="font-semibold tracking-wide no-underline site-title-link ml-4">关于我们</a>
							<a href="#" class="font-semibold tracking-wide no-underline site-title-link ml-4">售后服务</a>
							<a href="#" class="font-semibold tracking-wide no-underline site-title-link ml-4">联系我们</a>
						</nav>
					</div>
				</div>


			</div><!-- .site-branding -->
			<header id="masthead" class="bg-no-repeat bg-center bg-fixed bg-cover">
				<div class="container mx-auto">
					<div class="flex justify-center">
						<h1 class="text-white font-light" id="masthead-h1">健康从口腔开始，选择到洁彩结束</h1>
					</div>
					<div class="flex justify-center" id="masthead-button">
						<div class="inline-flex">
							<div class="rounded-md shadow">
								<a href="#" class="no-underline" id="masthead-button-aboutus">了解我们</a>
							</div>
							<div class="mt-3 sm:mt-0 sm:ml-3">
								<a href="#" class="no-underline" id="masthead-button-contactus">联系我们</a>
							</div>
						</div>
					</div>
				</div>
				<div id="masthead-footer">
					<svg style="fill:white;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" id="masthead-footer-svg">
						<path class="svg-white-bg" d="M737.9,94.7L0,0v100h1000V0L737.9,94.7z"></path>
					</svg>
				</div>
			</header><!-- #masthead -->
		</div>


		<div id="content" class="site-content">