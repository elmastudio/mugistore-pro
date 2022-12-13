<?php
/**
 * Title: Header Shop (default)
 * Slug: theme/header-shop-default
 * Categories: headers
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}},"className":"site-header pt__5 pb__5","layout":{"contentSize":"112.5rem","type":"constrained"}} -->
<div class="wp-block-group alignfull site-header pt__5 pb__5" style="padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":24} /-->

<!-- wp:site-title {"style":{"spacing":{"padding":{"left":"0.5rem"}}},"fontSize":"text-m"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|6"}}},"className":"mobile-hide desktop-show","layout":{"type":"constrained"}} -->
<div class="wp-block-group mobile-hide desktop-show" style="padding-left:var(--wp--preset--spacing--6)"><!-- wp:navigation {"textColor":"font-primary","overlayMenu":"never","overlayBackgroundColor":"background-primary","overlayTextColor":"font-primary","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"space-between","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"1.5rem"}},"fontSize":"text-xs"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"Search","placeholder":"Search products…","width":100,"widthUnit":"%","buttonText":"Search","query":{"post_type":"product"},"className":"form-rounded mobile-hide desktop-show"} /-->

<!-- wp:navigation {"overlayMenu":"never"} /-->

<!-- wp:woocommerce/mini-cart {"textColor":"font-primary"} /-->

<!-- wp:navigation {"overlayMenu":"always","overlayBackgroundColor":"background-primary","overlayTextColor":"font-primary","className":"desktop-hide","layout":{"type":"flex","justifyContent":"left","flexWrap":"nowrap"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->