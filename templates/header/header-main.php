<?php

/**
 * Content for header
 *
 * @since 1.0.0
 *
 * @package Gutenbiz WordPress Theme
 */ ?>
<div class="<?php echo Gutenbiz_Helper::with_prefix('bottom-header-wrapper'); ?>">
	<div>
		<div class="logo1">
			<?php the_custom_logo(); ?>
		</div>
			<?php if (is_front_page()) :
			?>
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			<?php endif;
			$description = get_bloginfo('description', 'display');
			if ($description || is_customize_preview()) :
			?>
				<p class="site-description1"><?php echo $description; ?></p>
			<?php endif; ?>
		</div>
		<div class="container">
			<h1 class="site-test"><?php echo gutenbiz_get('test_textarea'); ?></h1> 
			<ul class="menubar-2">
				<?php wp_list_pages(array('title_li' => '')); ?>
			</ul>
			<div class="search-form">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
	<!-- <div class="test1">
		<h3 class="site-test1"><?php echo gutenbiz_get('test_select' ); 	?></h3>
	</div> -->
</div>