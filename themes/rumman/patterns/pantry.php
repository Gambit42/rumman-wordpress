<?php
/**
 * Title: Pantry A–Z
 * Slug: rumman/pantry
 * Categories: rumman
 */
// Pantry items are post tags: name, description as the blurb, linked to the tag archive.
$items = get_terms( array( 'taxonomy' => 'post_tag', 'hide_empty' => true ) );
if ( ! $items || is_wp_error( $items ) ) {
	return;
}
?>
<!-- wp:group {"align":"full","anchor":"pantry","style":{"spacing":{"padding":{"top":"clamp(3rem,4vw,4rem)","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div id="pantry" class="wp-block-group alignfull" style="padding-top:clamp(3rem,4vw,4rem);padding-bottom:0"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading">The Rumman Pantry A–Z</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"arrow-link"} -->
<p class="arrow-link"><a href="/recipes/">Cook with them</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:html -->
<div class="alignwide h-scroll pantry swiper" style="margin-top:4.5rem"><div class="swiper-wrapper">
<?php foreach ( $items as $t ) : ?>
<a class="ing swiper-slide" href="<?php echo esc_url( get_term_link( $t ) ); ?>"><strong><?php echo esc_html( $t->name ); ?></strong><span><?php echo esc_html( $t->description ); ?></span><b aria-hidden="true"><?php echo esc_html( mb_substr( $t->name, 0, 1 ) ); ?></b></a>
<?php endforeach; ?>
</div></div>
<!-- /wp:html --></div>
<!-- /wp:group -->
