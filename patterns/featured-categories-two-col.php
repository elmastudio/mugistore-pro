<?php
/**
 * Title: Featured categories 2 columns
 * Slug: theme/featured-categories-two-col
 * Categories: products
 */
?>

<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-s","paddingTop":10,"paddingBottom":10} -->
<div class="wp-block-ainoblocks-grid-container alignwide ab-grid-block col-gap-s pt__10 pb__10"><!-- wp:ainoblocks/grid-item {"gridColumnEndDesktop":13,"gridColumnEndTablet":13,"justifyItem":"stretch","paddingBottom":7} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 justify-self__stretch no-stacking pb__7"><!-- wp:ainoblocks/flexbox {"justifyContentDesktop":"justify__between__d","justifyContentTablet":"justify__between__t","justifyContentMobile":"justify__between__m","alignItemsDesktop":"align-items__center__d","alignItemsTablet":"align-items__center__t","alignItemsMobile":"align-items__center__m"} -->
<div class="wp-block-ainoblocks-flexbox direction__row__d direction__row__t direction__row__m nowrap__d nowrap_t nowrap_m justify__between__d justify__between__t justify__between__m align-items__center__d align-items__center__t align-items__center__m align-cont__stretch__d align-cont__stretch__t align-cont__stretch__m shadow-none"><!-- wp:heading {"fontSize":"text-l"} -->
<h2 class="has-text-l-font-size"><?php echo esc_html_x( 'Upcoming arrivals', 'sample content for heading', 'mugistore' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:ainoblocks/multiple-buttons -->
<div class="wp-block-ainoblocks-multiple-buttons"><!-- wp:ainoblocks/button {"label":"New in store","className":"is-style-text"} -->
<div class="wp-block-ainoblocks-button is-style-text"><a class="wp-block-ainoblocks-button__link size__m no-border-radius"><?php echo esc_html_x( 'New in store', 'sample content for text button link', 'mugistore' ); ?></a></div>
<!-- /wp:ainoblocks/button --></div>
<!-- /wp:ainoblocks/multiple-buttons --></div>
<!-- /wp:ainoblocks/flexbox --></div>
<!-- /wp:ainoblocks/grid-item -->

<!-- wp:ainoblocks/grid-item {"gridColumnEndDesktop":7,"gridColumnEndTablet":7,"justifyItem":"stretch"} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__7 col_start_t__1 col_end_t__7 col_start_m__1 col_end_m__13 justify-self__stretch no-stacking"><!-- wp:woocommerce/featured-category {"dimRatio":10,"editMode":false,"imageFit":"cover","mediaSrc":"<?php echo get_template_directory_uri(); ?>/assets/images/product-cat-01.jpeg","minHeight":790,"categoryId":220,"showDesc":false,"className":"br__s","textColor":"button-color-primary"} -->
<!-- wp:buttons {"lock":{"move":false,"remove":false},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"lock":{"move":false,"remove":false},"style":{"border":{"radius":"12px"}},"className":"btn-s primary-variant"} -->
<div class="wp-block-button btn-s primary-variant"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:12px"><?php echo esc_html_x( 'Shop now', 'sample content for button link', 'mugistore' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:woocommerce/featured-category --></div>
<!-- /wp:ainoblocks/grid-item -->

<!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":7,"gridColumnEndDesktop":13,"gridColumnStartTablet":7,"justifyItem":"stretch","justifyItemTablet":"center","marginTopTablet":0,"marginTopMobile":3} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__7 col_end_d__13 col_start_t__7 col_end_t__13 col_start_m__1 col_end_m__13 justify-self__stretch js__t__center no-stacking mt_t__0 mt_m__3"><!-- wp:woocommerce/featured-category {"dimRatio":10,"editMode":false,"imageFit":"cover","mediaSrc":"<?php echo get_template_directory_uri(); ?>/assets/images/product-cat-02.jpeg","minHeight":794,"categoryId":220,"showDesc":false,"className":"br__s","textColor":"button-color-primary"} -->
<!-- wp:buttons {"lock":{"move":false,"remove":false},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"12px"}},"className":"btn-s primary-variant"} -->
<div class="wp-block-button btn-s primary-variant"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:12px"><?php echo esc_html_x( 'Shop now', 'sample content for button link', 'mugistore' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- /wp:woocommerce/featured-category --></div>
<!-- /wp:ainoblocks/grid-item --></div>
<!-- /wp:ainoblocks/grid-container -->