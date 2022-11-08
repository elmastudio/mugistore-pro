<?php
/**
 * Title: Products 2x1 grid
 * Slug: theme/products-two-x-one-grid
 * Categories: products
 */
?>

<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-s","paddingTop":10,"paddingBottom":10} -->
<div class="wp-block-ainoblocks-grid-container alignwide ab-grid-block col-gap-s pt__10 pb__10"><!-- wp:ainoblocks/grid-item {"gridColumnEndDesktop":13,"gridColumnEndTablet":13,"justifyItem":"stretch","paddingBottom":7} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 justify-self__stretch no-stacking pb__7"><!-- wp:ainoblocks/flexbox {"justifyContentDesktop":"justify__between__d","justifyContentTablet":"justify__between__t","justifyContentMobile":"justify__between__m","alignItemsDesktop":"align-items__center__d","alignItemsTablet":"align-items__center__t","alignItemsMobile":"align-items__center__m"} -->
<div class="wp-block-ainoblocks-flexbox direction__row__d direction__row__t direction__row__m nowrap__d nowrap_t nowrap_m justify__between__d justify__between__t justify__between__m align-items__center__d align-items__center__t align-items__center__m align-cont__stretch__d align-cont__stretch__t align-cont__stretch__m shadow-none"><!-- wp:heading {"fontSize":"text-l"} -->
<h2 class="has-text-l-font-size"><?php echo esc_html_x( 'Top Rated', 'sample content for heading', 'mugistore' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:ainoblocks/multiple-buttons -->
<div class="wp-block-ainoblocks-multiple-buttons"><!-- wp:ainoblocks/button {"label":"Shop range","className":"is-style-text"} -->
<div class="wp-block-ainoblocks-button is-style-text"><a class="wp-block-ainoblocks-button__link size__m no-border-radius"><?php echo esc_html_x( 'Shop range', 'sample content for text button link', 'mugistore' ); ?></a></div>
<!-- /wp:ainoblocks/button --></div>
<!-- /wp:ainoblocks/multiple-buttons --></div>
<!-- /wp:ainoblocks/flexbox --></div>
<!-- /wp:ainoblocks/grid-item -->

<!-- wp:ainoblocks/grid-item {"gridColumnEndDesktop":13,"gridColumnEndTablet":13,"justifyItem":"stretch"} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 justify-self__stretch no-stacking">
<!-- wp:woocommerce/product-top-rated {"columns":2,"rows":1,"contentVisibility":{"image":true,"title":true,"price":true,"rating":false,"button":true},"className":"br__s"} /--></div>
<!-- /wp:ainoblocks/grid-item --></div>
<!-- /wp:ainoblocks/grid-container -->