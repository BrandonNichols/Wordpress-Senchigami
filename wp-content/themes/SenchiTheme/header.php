<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- HEADER -->
<header<?php echo pixiefreak_header_class() ?>>
    <nav class="nav-placeholder">
        <div class="container">
            <!-- Mobile Sandwich Button -->

            <?//php echo pixiefreak_custom_logo() ?>
			<a class='custom-logo-link' href="http://localhost/wordpress/">
				<img src="http://localhost/wordpress/wp-content/uploads/2021/09/logo.png" />
			</a>

			<?php if (pixiefreak_should_show_menu('header_menu')): ?>
				<?php wp_nav_menu([
					'theme_location' => 'header_menu',
					'menu_id' => 'header_menu',
					'menu_class' => 'navbar',
					'container' => false
				]);
				?>
			<?php endif; ?>
        </div>
    </nav>
</header>
<!-- /HEADER -->
