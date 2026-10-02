<?php
/**
 * Title: What to cook this week
 * Slug: rumman/cook-this-week
 * Categories: rumman
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"clamp(4rem,6vw,7rem)","bottom":"clamp(4rem,6vw,7rem)"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:clamp(4rem,6vw,7rem);padding-bottom:clamp(4rem,6vw,7rem)"><!-- wp:heading {"align":"wide"} -->
<h2 class="wp-block-heading alignwide">What to cook this week</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false},"align":"wide","className":"cook-grid","style":{"spacing":{"margin":{"top":"3.2rem"}}}} -->
<div class="wp-block-query alignwide cook-grid" style="margin-top:3.2rem"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true} /-->
<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"1.4rem"}}}} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
