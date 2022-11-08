<?php
/**
 * Title: FAQ 1-column
 * Slug: theme/faq-one-col
 * Categories: accordions
 */
?>

<!-- wp:ainoblocks/grid-container {"columnGap":"col-gap-m","paddingTop":10,"paddingBottom":13} -->
<div class="wp-block-ainoblocks-grid-container alignwide ab-grid-block col-gap-m pt__10 pb__13"><!-- wp:ainoblocks/grid-item {"gridColumnStartDesktop":4,"gridColumnEndDesktop":10,"gridColumnStartTablet":1,"gridColumnEndTablet":13,"gridColumnStartMobile":1,"gridColumnEndMobile":13,"justifyItem":"stretch","className":"align-self__start","paddingTop":1} -->
<div class="wp-block-ainoblocks-grid-item col_start_d__4 col_end_d__10 col_start_t__1 col_end_t__13 col_start_m__1 col_end_m__13 justify-self__stretch no-stacking align-self__start pt__1"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center"><?php echo esc_html_x( 'Frequently asked questions', 'sample content for FAQ', 'mugistore' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"text-xs","paddingTop":3,"paddingBottom":10} -->
<p class="has-text-align-center has-text-xs-font-size pt__3 pb__10"><?php echo esc_html_x( 'We want to answer all your questions.', 'sample content for FAQ', 'mugistore' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:ainoblocks/accordion-faq-block {"backgroundColor":"background-secondary","borderRadius":"xs","question":"What is your favourite type of tea?","style":{"border":{"width":"0px","style":"none"}},"className":"br__xs","paddingTop":7,"paddingBottom":7,"paddingLeft":7,"paddingRight":7} -->
<div class="wp-block-ainoblocks-accordion-faq-block icon__right br__xs has-background-secondary-background-color has-background br-all__xs pt__7 pb__7 pl__7 pr__7" style="border-style:none;border-width:0px" x-data="{ open: false }" @click="open = !open" :class="{'open': open, 'close': ! open }"><div class="accordion"><h3 class="has-xxs-font-size"><?php echo esc_html_x( 'What is your favourite type of tea?', 'sample content for FAQ', 'mugistore' ); ?></h3></div><div class="panel"><!-- wp:paragraph {"placeholder":"Write an answer ...","textColor":"font-secondary","fontSize":"text-xs","paddingTop":7} -->
<p class="has-font-secondary-color has-text-color has-text-xs-font-size pt__7"><?php echo esc_html_x( 'We understand that, sometimes there are circumstances where you need to exchange or return your purchase. Unfortunately we do not currently offer free shipping for returns or exchanges, but we do cover the cost of shipping for returns on any items purchased via our website or mobile app.', 'sample content for FAQ', 'mugistore' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:ainoblocks/accordion-faq-block -->

<!-- wp:ainoblocks/accordion-faq-block {"backgroundColor":"background-secondary","borderRadius":"xs","question":"What is one book you would recommend to everyone?","style":{"border":{"width":"0px","style":"none"}},"className":"br__xs","paddingTop":7,"paddingBottom":7,"paddingLeft":7,"paddingRight":7} -->
<div class="wp-block-ainoblocks-accordion-faq-block icon__right br__xs has-background-secondary-background-color has-background br-all__xs pt__7 pb__7 pl__7 pr__7" style="border-style:none;border-width:0px" x-data="{ open: false }" @click="open = !open" :class="{'open': open, 'close': ! open }"><div class="accordion"><h3 class="has-xxs-font-size"><?php echo esc_html_x( 'What is one book you would recommend to everyone?', 'sample content for FAQ', 'mugistore' ); ?></h3></div><div class="panel"><!-- wp:paragraph {"placeholder":"Write an answer ...","textColor":"font-secondary","fontSize":"text-xs","paddingTop":7} -->
<p class="has-font-secondary-color has-text-color has-text-xs-font-size pt__7"><?php echo esc_html_x( 'we love tea and want to share it with you. all our teas are expertly sourced, tasting delicious and packed full of health benefits. we tried them all by ourselves first, so you know they are top notch - just like we promise.', 'sample content for FAQ', 'mugistore' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:ainoblocks/accordion-faq-block -->

<!-- wp:ainoblocks/accordion-faq-block {"backgroundColor":"background-secondary","borderRadius":"xs","question":"How long can items be returned?","style":{"border":{"width":"0px","style":"none"}},"className":"br__xs","paddingTop":7,"paddingBottom":7,"paddingLeft":7,"paddingRight":7} -->
<div class="wp-block-ainoblocks-accordion-faq-block icon__right br__xs has-background-secondary-background-color has-background br-all__xs pt__7 pb__7 pl__7 pr__7" style="border-style:none;border-width:0px" x-data="{ open: false }" @click="open = !open" :class="{'open': open, 'close': ! open }"><div class="accordion"><h3 class="has-xxs-font-size"><?php echo esc_html_x( 'How long can items be returned?', 'sample content for FAQ', 'mugistore' ); ?></h3></div><div class="panel"><!-- wp:paragraph {"placeholder":"Write an answer ...","textColor":"font-secondary","fontSize":"text-xs","paddingTop":7} -->
<p class="has-font-secondary-color has-text-color has-text-xs-font-size pt__7"><?php echo esc_html_x( 'You can return your item within 30 days of purchase.', 'sample content for FAQ', 'mugistore' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:ainoblocks/accordion-faq-block -->

<!-- wp:ainoblocks/accordion-faq-block {"backgroundColor":"background-secondary","borderRadius":"xs","question":"How long do I need to wait for my order to arrive?","style":{"border":{"width":"0px","style":"none"}},"className":"br__xs","paddingTop":7,"paddingBottom":7,"paddingLeft":7,"paddingRight":7} -->
<div class="wp-block-ainoblocks-accordion-faq-block icon__right br__xs has-background-secondary-background-color has-background br-all__xs pt__7 pb__7 pl__7 pr__7" style="border-style:none;border-width:0px" x-data="{ open: false }" @click="open = !open" :class="{'open': open, 'close': ! open }"><div class="accordion"><h3 class="has-xxs-font-size"><?php echo esc_html_x( 'How long do I need to wait for my order to arrive?', 'sample content for FAQ', 'mugistore' ); ?></h3></div><div class="panel"><!-- wp:paragraph {"placeholder":"Write an answer ...","textColor":"font-secondary","fontSize":"text-xs","paddingTop":7} -->
<p class="has-font-secondary-color has-text-color has-text-xs-font-size pt__7"><?php echo esc_html_x( 'We typically ship orders within 1-3 business days. As soon as we receive an order, we will notify you via email with a tracking number so you can keep up-to-date on its status.', 'sample content for FAQ', 'mugistore' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:ainoblocks/accordion-faq-block -->

<!-- wp:ainoblocks/accordion-faq-block {"backgroundColor":"background-secondary","borderRadius":"xs","question":"Do you have sales or discounts?","style":{"border":{"width":"0px","style":"none"}},"className":"br__xs","paddingTop":7,"paddingBottom":7,"paddingLeft":7,"paddingRight":7} -->
<div class="wp-block-ainoblocks-accordion-faq-block icon__right br__xs has-background-secondary-background-color has-background br-all__xs pt__7 pb__7 pl__7 pr__7" style="border-style:none;border-width:0px" x-data="{ open: false }" @click="open = !open" :class="{'open': open, 'close': ! open }"><div class="accordion"><h3 class="has-xxs-font-size"><?php echo esc_html_x( 'Do you have sales or discounts?', 'sample content for FAQ', 'mugistore' ); ?></h3></div><div class="panel"><!-- wp:paragraph {"placeholder":"Write an answer ...","textColor":"font-secondary","fontSize":"text-xs","paddingTop":7} -->
<p class="has-font-secondary-color has-text-color has-text-xs-font-size pt__7"><?php echo esc_html_x( 'Yes of course, we have regular specials and sales. Just sign up for our newsletter and Like us on Instagram to hear about our sales first.', 'sample content for FAQ', 'mugistore' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:ainoblocks/accordion-faq-block --></div>
<!-- /wp:ainoblocks/grid-item --></div>
<!-- /wp:ainoblocks/grid-container -->