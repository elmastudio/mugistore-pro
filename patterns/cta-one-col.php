<?php
/**
 * Title: CTA 1-column
 * Slug: theme/cta-one-col
 * Categories: ctas
 */
?>

<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-s","paddingTop":10,"paddingBottom":10} -->
<div class="wp-block-ainoblocks-grid-container alignwide ab-grid-block col-gap-s pt__10 pb__10"><!-- wp:ainoblocks/grid-item {"gridColumnEndDesktop":13,"gridColumnEndTablet":13,"justifyItem":"stretch","paddingBottom":7} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 justify-self__stretch no-stacking pb__7"><!-- wp:heading {"fontSize":"text-l"} -->
<h2 class="has-text-l-font-size"><?php echo esc_html_x( 'Join us', 'sample content for CTA heading', 'mugistore' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:ainoblocks/grid-item -->

<!-- wp:ainoblocks/grid-item {"gridColumnEndDesktop":13,"gridColumnEndTablet":13,"justifyItem":"stretch"} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__1 col_end_d__13 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 justify-self__stretch no-stacking"><!-- wp:cover {"url":"<?php echo get_template_directory_uri(); ?>/assets/images/banner-bg.png","id":217,"dimRatio":0,"minHeight":248,"isDark":false,"className":"br__m"} -->
<div class="wp-block-cover is-light br__m" style="min-height:248px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-217" alt="WooCommerce block theme Mugistore banner" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-bg.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:ainoblocks/card {"borderRadius":"xs","paddingTop":10,"paddingBottom":10,"paddingLeft":10,"paddingRight":10} -->
<div class="wp-block-ainoblocks-card shadow-none pt__10 pb__10 pl__10 pr__10 br-all__xs"><!-- wp:heading {"fontSize":"text-xxl","paddingTop":1} -->
<h2 class="has-text-xxl-font-size pt__1"><?php echo esc_html_x( 'Join our Monthly Tea Lovers Club', 'sample content for CTA heading', 'mugistore' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"font-secondary","fontSize":"text-xs","paddingTop":3,"paddingBottom":6} -->
<p class="has-font-secondary-color has-text-color has-text-xs-font-size pt__3 pb__6"><?php echo esc_html_x( 'Join our Mugi-cha tea lovers membership community.', 'sample content for CTA text', 'mugistore' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:ainoblocks/multiple-buttons {"align":"left","gapDesktop":true} -->
<div class="wp-block-ainoblocks-multiple-buttons alignleft d__gap"><!-- wp:ainoblocks/button {"size":"size__s","borderRadius":12,"label":"Join us today","className":"is-style-neutral-primary"} -->
<div class="wp-block-ainoblocks-button is-style-neutral-primary" style="border-radius:12px"><a class="wp-block-ainoblocks-button__link size__s 12" href="#" style="border-radius:12px"><?php echo esc_html_x( 'Join us today', 'sample content for CTA button text', 'mugistore' ); ?></a></div>
<!-- /wp:ainoblocks/button --></div>
<!-- /wp:ainoblocks/multiple-buttons --></div>
<!-- /wp:ainoblocks/card --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:ainoblocks/grid-item --></div>
<!-- /wp:ainoblocks/grid-container -->