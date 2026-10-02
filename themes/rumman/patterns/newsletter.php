<?php
/**
 * Title: Newsletter
 * Slug: rumman/newsletter
 * Categories: rumman
 */
?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:columns {"align":"wide","className":"newsletter","style":{"spacing":{"blockGap":{"left":"0","top":"0"}}}} -->
<div class="wp-block-columns alignwide newsletter"><!-- wp:column {"width":"57%","backgroundColor":"cream","style":{"spacing":{"padding":{"top":"clamp(2.5rem,4vw,5rem)","bottom":"clamp(2.5rem,4vw,5rem)","left":"clamp(1.5rem,4vw,4.7rem)","right":"clamp(1.5rem,4vw,4.7rem)"}}}} -->
<div class="wp-block-column has-cream-background-color has-background" style="padding-top:clamp(2.5rem,4vw,5rem);padding-right:clamp(1.5rem,4vw,4.7rem);padding-bottom:clamp(2.5rem,4vw,5rem);padding-left:clamp(1.5rem,4vw,4.7rem);flex-basis:57%"><!-- wp:paragraph {"className":"overline"} -->
<p class="overline">Join our newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"large","style":{"typography":{"fontWeight":"300","lineHeight":"1.25"},"spacing":{"margin":{"top":"0.8rem"}}}} -->
<p class="has-large-font-size" style="margin-top:0.8rem;font-weight:300;line-height:1.25">Sign up for a new recipe every Friday, plus news and events.</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="js-newsletter" style="margin-top:2.4rem">
<div class="newsletter-form"><input type="email" required placeholder="Enter your email address" aria-label="Email address"><button type="submit" aria-label="Subscribe">&#10230;</button></div>
<label class="consent"><input type="checkbox" required><span>I consent to being contacted by email.<br>Your email address is safe with us. Read our <a href="#">privacy policy</a></span></label>
</form>
<!-- /wp:html --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"43%","className":"newsletter-photo"} -->
<div class="wp-block-column newsletter-photo" style="flex-basis:43%"><!-- wp:image {"sizeSlug":"full"} -->
<figure class="wp-block-image size-full"><img src="<?php echo rumman_img( 'newsletter' ); ?>" alt="Spoons of colourful ground spices" loading="lazy"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
