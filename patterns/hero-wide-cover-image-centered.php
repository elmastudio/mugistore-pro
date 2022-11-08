<?php
/**
 * Title: Hero wide cover image centered
 * Slug: theme/hero-wide-cover-image-centered
 * Categories: heroes
 */
?>

<!-- wp:group {"align":"wide","layout":{"inherit":false},"paddingTop":10,"paddingBottom":10} -->
<div class="wp-block-group alignwide pt__10 pb__10"><!-- wp:cover {"url":"<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpeg","dimRatio":0,"overlayColor":"black","focalPoint":{"x":"0.50","y":"0.50"},"minHeight":58,"minHeightUnit":"vh","isDark":false,"align":"wide","className":"br__s"} -->
<div class="wp-block-cover alignwide is-light br__s" style="min-height:58vh"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Hero image" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpeg" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"700"}},"textColor":"button-color-primary","fontSize":"text-xs"} -->
<p class="has-text-align-center has-button-color-primary-color has-text-color has-text-xs-font-size" style="font-style:normal;font-weight:700;line-height:1"><?php echo esc_html_x( 'The perfect start', 'sample content for Hero pre title', 'mugistore' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","textColor":"button-color-primary","fontSize":"text-5-xl","paddingTop":7,"paddingBottom":7} -->
<h2 class="has-text-align-center has-button-color-primary-color has-text-color has-text-5-xl-font-size pt__7 pb__7"><?php echo esc_html_x( 'Morning Rituals', 'sample content for Hero heading', 'mugistore' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:ainoblocks/multiple-buttons {"align":"center"} -->
<div class="wp-block-ainoblocks-multiple-buttons aligncenter"><!-- wp:ainoblocks/button {"mode":true,"size":"size__l","borderRadius":17,"label":"Shop now","className":"is-style-primary"} -->
<div class="wp-block-ainoblocks-button variant is-style-primary" style="border-radius:17px"><a class="wp-block-ainoblocks-button__link size__l 17" style="border-radius:17px"><?php echo esc_html_x( 'Shop now', 'sample content for Hero heading', 'mugistore' ); ?></a></div>
<!-- /wp:ainoblocks/button --></div>
<!-- /wp:ainoblocks/multiple-buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->