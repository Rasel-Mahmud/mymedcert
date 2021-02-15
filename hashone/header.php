<?php
/**
 * The header for our theme.
 *
 * @package HashOne
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
$myme_options = get_option( 'mymedcert' );
$phone_numner_one = $myme_options['myme_top_phone_one'];
$phone_numner_two = $myme_options['myme_top_phone_two'];
$email_address = $myme_options['myme_top_email_address'];

$facebook = $myme_options['myme_top_facebook_link'];
$instagram = $myme_options['myme_top_instagram_link'];
$linkedin = $myme_options['myme_top_linkedin_link'];
?>
<div id="hs-page">
	<section class="top-section">
		<div class="hs-container">
			<div class="top-bar">
				<div class="left-bar">
					<p class="contact-info">Contact us</p>
					<p class="phone"><i class="fas fa-phone-alt"></i><a href="tel:<?php echo clean($phone_numner_one); ?>"><?php echo $phone_numner_one; ?></a></p>
					<p class="fax"><i class="fas fa-fax"></i><a href="tel:<?php echo clean($phone_numner_two); ?>"><?php echo $phone_numner_two; ?></a></p>
					<p class="email"><i class="far fa-envelope"></i><a href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a></p>
				</div>
				<div class="right-bar">
					<a href="<?php echo $facebook; ?>"><i class="fab fa-facebook"></i></a>
					<a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a>
					<a href="<?php echo $linkedin; ?>"><i class="fab fa-linkedin"></i></a>
				</div>
			</div>
		</div>
	</section>
	<?php
	$hashone_header_bg = get_theme_mod('hashone_header_bg','hs-black');
	?>
	<header id="hs-masthead" class="hs-site-header hs-clearfix <?php echo esc_attr($hashone_header_bg) ?>">
		<div class="hs-container">
			<div id="hs-site-branding">
				<?php
				if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) :
					the_custom_logo();
				else:
					if ( is_front_page() ) : ?>
					<h1 class="hs-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
					<p class="hs-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>

					<p class="hs-site-description"><?php bloginfo( 'description' ); ?></p>

				<?php endif; // End header image check. ?>
			</div><!-- .site-branding -->

			<nav id="hs-site-navigation" class="hs-main-navigation">
				<div class="hs-toggle-menu"><span></span></div>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container_class' => 'hs-menu' ,
					'menu_class' => 'hs-clearfix',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				) );
				?>
			</nav><!-- #hs-site-navigation -->
		</div>
	</header><!-- #hs-masthead -->

	<div id="hs-content" class="hs-site-content hs-clearfix">