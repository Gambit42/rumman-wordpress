<?php
/**
 * Title: Hero
 * Slug: rumman/hero
 * Categories: rumman
 */
// Hero slides (autoplaying Swiper, set up in rumman.js): image, overline, heading, link label, link, overlay dim %.
$slides = array(
	array( 'hero', 'From our bakery', 'New in for autumn', 'Get the recipes', '/category/desserts/', 10 ),
	array( 'catering', 'Catering', 'Feasts for every table', 'Plan your spread', '/catering/', 20 ),
	array( 'hero-salads', 'Salads', 'Leaves with something to say', 'Get the recipes', '/category/salads/', 40 ),
);
?>
<!-- wp:group {"align":"full","className":"hero-slider inset swiper","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull hero-slider inset swiper"><!-- wp:group {"className":"swiper-wrapper","layout":{"type":"default"}} -->
<div class="wp-block-group swiper-wrapper">
<?php foreach ( $slides as $i => [ $img, $over, $title, $label, $link, $dim ] ) : $h = $i ? 2 : 1; ?>
<!-- wp:cover {"url":"<?php echo rumman_img( $img ); ?>","dimRatio":<?php echo $dim; ?>,"overlayColor":"ink","isUserOverlayColor":true,"contentPosition":"top right","className":"hero swiper-slide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"clamp(20px,3.9vw,75px)","right":"clamp(20px,3.9vw,75px)"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-right hero swiper-slide" style="padding-top:0;padding-right:clamp(20px,3.9vw,75px);padding-bottom:0;padding-left:clamp(20px,3.9vw,75px)"><span aria-hidden="true" class="wp-block-cover__background has-ink-background-color has-background-dim-<?php echo $dim; ?> has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo rumman_img( $img ); ?>" data-object-fit="cover"<?php echo $i ? ' loading="lazy"' : ''; ?>/><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"hero-text on-dark","layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
<div class="wp-block-group hero-text on-dark"><!-- wp:paragraph {"className":"overline","style":{"typography":{"fontWeight":"600"}}} -->
<p class="overline" style="font-weight:600"><?php echo esc_html( $over ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":<?php echo $h; ?>,"textColor":"white","fontSize":"xx-large","style":{"typography":{"fontWeight":"500","letterSpacing":"-0.02em"}}} -->
<h<?php echo $h; ?> class="wp-block-heading has-white-color has-text-color has-xx-large-font-size" style="font-weight:500;letter-spacing:-0.02em"><?php echo esc_html( $title ); ?></h<?php echo $h; ?>>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"arrow-link","style":{"spacing":{"margin":{"top":"3rem"}}}} -->
<p class="arrow-link" style="margin-top:3rem"><a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $label ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"hero-book"} -->
<div class="wp-block-buttons hero-book"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/restaurants/">Book a table</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="swiper-pagination"></div>
<!-- /wp:html --></div>
<!-- /wp:group -->
