<?php
/**
 * Title: Theme Sidebar Shop
 * Slug: theme/sidebar-shop
 * Categories: sidebars
 */
?>

<!-- wp:ainoblocks/flexbox {"flexDirectionDesktop":"direction__col__d","flexDirectionTablet":"direction__col__t","flexDirectionMobile":"direction__col__m","className":"filters-container"} -->
<div class="wp-block-ainoblocks-flexbox direction__col__d direction__row__t direction__row__m nowrap__d direction__col__t direction__col__m nowrap_t nowrap_m justify__flexstart__d justify__flexstart__t justify__flexstart__m align-items__stretch__d align-items__stretch__t align-itms__stretch__m align-cont__stretch__d align-cont__stretch__t align-cont__stretch__m shadow-none filters-container">
	<!-- wp:ainoblocks/flex-item {"paddingTop":11,"paddingBottom":7} -->
	<div class="wp-block-ainoblocks-flex-item auto pt__11 pb__7">
	<!-- wp:woocommerce/product-categories {"hasEmpty":true} /-->
	</div>
	<!-- /wp:ainoblocks/flex-item -->

	<!-- wp:separator {"backgroundColor":"border-secondary","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-border-secondary-color has-alpha-channel-opacity has-border-secondary-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:ainoblocks/flex-item {"paddingTop":5} -->
	<div class="wp-block-ainoblocks-flex-item auto pt__5"><!-- wp:woocommerce/active-filters {"displayStyle":"chips"} -->
	<div class="wp-block-woocommerce-active-filters is-loading" data-display-style="chips" data-heading="Active filters" data-heading-level="3"><span aria-hidden="true" class="wc-block-active-product-filters__placeholder"></span></div>
	<!-- /wp:woocommerce/active-filters --></div>
	<!-- /wp:ainoblocks/flex-item -->

	<!-- wp:ainoblocks/flex-item {"paddingTop":5,"paddingBottom":7} -->
	<div class="wp-block-ainoblocks-flex-item auto pt__5 pb__7"><!-- wp:woocommerce/attribute-filter {"attributeId":1,"heading":"Filter by Color"} -->
	<div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="1" data-show-counts="true" data-query-type="or" data-heading="Filter by Color" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span></div>
	<!-- /wp:woocommerce/attribute-filter --></div>
	<!-- /wp:ainoblocks/flex-item -->

	<!-- wp:separator {"backgroundColor":"border-secondary","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-border-secondary-color has-alpha-channel-opacity has-border-secondary-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:ainoblocks/flex-item {"paddingTop":5,"paddingBottom":7} -->
	<div class="wp-block-ainoblocks-flex-item auto pt__5 pb__7"><!-- wp:woocommerce/stock-filter -->
	<div class="wp-block-woocommerce-stock-filter is-loading" data-show-counts="true" data-heading="Filter by stock status" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-stock-filter__placeholder"></span></div>
	<!-- /wp:woocommerce/stock-filter --></div>
	<!-- /wp:ainoblocks/flex-item -->

	<!-- wp:separator {"backgroundColor":"border-secondary","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-border-secondary-color has-alpha-channel-opacity has-border-secondary-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:ainoblocks/flex-item {"paddingTop":5,"paddingBottom":7} -->
	<div class="wp-block-ainoblocks-flex-item auto pt__5 pb__7"><!-- wp:woocommerce/price-filter -->
	<div class="wp-block-woocommerce-price-filter is-loading" data-showinputfields="true" data-showfilterbutton="false" data-heading="Filter by price" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
	<!-- /wp:woocommerce/price-filter --></div>
	<!-- /wp:ainoblocks/flex-item -->

	<!-- wp:separator {"backgroundColor":"border-secondary","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-border-secondary-color has-alpha-channel-opacity has-border-secondary-background-color has-background is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:ainoblocks/flex-item {"paddingTop":5,"paddingBottom":7} -->
	<div class="wp-block-ainoblocks-flex-item auto pt__5 pb__7">
	<!-- wp:heading {"level":3} -->
	<h3>Search</h3>
	<!-- /wp:heading -->
	<!-- wp:woocommerce/product-search {"className":"form-rounded"} /-->
	</div>
	<!-- /wp:ainoblocks/flex-item -->
</div>
<!-- /wp:ainoblocks/flexbox -->