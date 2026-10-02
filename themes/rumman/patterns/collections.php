<?php
/**
 * Title: Recipe collections
 * Slug: rumman/collections
 * Categories: rumman
 */
$cards = array(
	array( 'col-brunch', 'Brunch recipes', '/category/brunch/' ),
	array( 'col-salads', 'Big, bright salads', '/category/salads/' ),
	array( 'col-mains', 'Weeknight mains', '/category/mains/' ),
	array( 'col-desserts', 'Something sweet', '/category/desserts/' ),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"clamp(4rem,6vw,7rem)","bottom":"clamp(3rem,5vw,6rem)"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:clamp(4rem,6vw,7rem);padding-bottom:clamp(3rem,5vw,6rem)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading">Recipe collections and stories</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"arrow-link"} -->
<p class="arrow-link"><a href="/recipes/">Read more</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","className":"h-scroll collections swiper","style":{"spacing":{"margin":{"top":"4.5rem"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide h-scroll collections swiper" style="margin-top:4.5rem"><!-- wp:group {"className":"swiper-wrapper","layout":{"type":"default"}} -->
<div class="wp-block-group swiper-wrapper">
<?php foreach ( $cards as [ $img, $label, $url ] ) : ?>
<!-- wp:group {"className":"collection swiper-slide","layout":{"type":"default"}} -->
<div class="wp-block-group collection swiper-slide"><!-- wp:image {"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="<?php echo esc_url( $url ); ?>"><img src="<?php echo rumman_img( $img ); ?>" alt="<?php echo esc_attr( $label ); ?>" loading="lazy"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><a href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
