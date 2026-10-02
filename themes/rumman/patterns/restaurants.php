<?php
/**
 * Title: Restaurants list
 * Slug: rumman/restaurants
 * Categories: rumman
 */
$places = array(
	array( 'Rumman Kitchen', '14 Orchard Row · Vegetable-led small plates, open fire', 'Book' ),
	array( 'Rumman Marlowe Street', '3 Marlowe Street · Late-night dining & cocktails', 'Book' ),
	array( 'Deli — Highgate Hill', '201 Highgate Hill · Salads, cakes, takeaway', 'Visit' ),
	array( 'Deli — Canal Quarter', '8 Lock Yard · Breakfast, lunch & weekend brunch', 'Visit' ),
	array( 'Deli — Old Market', 'Unit 5, Old Market Hall · Bakery counter', 'Visit' ),
	array( 'Rumman Lisbon', 'Rua das Flores 41 · Our first home abroad', 'Book' ),
);
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"clamp(2rem,6vw,7rem)"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:image {"sizeSlug":"full","style":{"dimensions":{"aspectRatio":"4/5"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo rumman_img( 'cafe' ); ?>" alt="Bright deli dining room with plants" style="aspect-ratio:4/5;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%">
<?php foreach ( $places as [ $name, $info, $cta ] ) : ?>
<!-- wp:group {"className":"place","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group place"><!-- wp:group {"style":{"spacing":{"blockGap":"0.3rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $name ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"muted"} -->
<p class="has-muted-color has-text-color"><?php echo esc_html( $info ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"arrow-link"} -->
<p class="arrow-link"><a href="mailto:hello@example.com"><?php echo esc_html( $cta ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
