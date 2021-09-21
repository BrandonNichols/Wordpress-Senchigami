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
<?php require __DIR__ . '/includes/site-url.php';?>
<!-- HEADER -->
<header>
    <nav class="nav-placeholder">
        <div class="container">
            <!-- Mobile Sandwich Button -->
			<a class='custom-logo-link' href="<?php echo $site?>">
				<img src="<?php echo $site?>wp-content/uploads/2021/09/logo.png" />
			</a>
			<div class="menu-container">
				<div class="menu-button">
					<i class="fas fa-bars fa-lg hide show" onclick="displayMenu(event)"></i>
					<i class="fas fa-times fa-lg hide" onclick="displayMenu(event)"></i>
				</div>
				<?php wp_nav_menu([
						'theme_location' => 'header_menu',
						'menu_id' => 'header_menu',
						'menu_class' => 'navbar',
						'container' => false
					]);
					?>
			</div>
        </div>
    </nav>
</header>
<!-- /HEADER -->
