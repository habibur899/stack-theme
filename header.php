<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Header Area wrapper Starts -->
<header id="header-wrap">
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->

			<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );
			if ( has_custom_logo() ) {
				echo '<a href="' . esc_url( site_url() ) . '" class="navbar-brand"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
			} else {
				echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
			}
			?>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lni-menu"></i>
            </button>
			<?php
			wp_nav_menu( array(
				'container'            => 'div',
				'container_class'      => 'collapse navbar-collapse',
				'container_id'         => 'navbarCollapse',
				'menu_class'           => 'menu navbar-nav mr-auto w-100 justify-content-end clearfix',
				'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'item_spacing'         => 'preserve',
				'theme_location'       => 'main-menu',
			) );
			?>
            

        </div>
    </nav>
    <!-- Navbar End -->