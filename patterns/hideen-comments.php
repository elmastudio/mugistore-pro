<?php
/**
 * Title: Hidden Comments
 * Slug: theme/hidden-comments
 * Inserter: no
 */
?>

<!-- wp:group {"backgroundColor":"background-secondary","className":"btn-rounded form-rounded","layout":{"inherit":true},"paddingTop":13,"paddingBottom":13} -->
<div class="wp-block-group btn-rounded form-rounded has-background-secondary-background-color has-background pt__13 pb__13">
<!-- wp:comments-query-loop {"textColor":"font-secondary"} -->
<div class="wp-block-comments-query-loop has-font-secondary-color has-text-color"><!-- wp:comments-title {"fontSize":"text-l"} /-->

<!-- wp:comment-template -->
<!-- wp:columns {"style":{"spacing":{"padding":{"top":"1rem"}}}} -->
<div class="wp-block-columns" style="padding-top:1rem"><!-- wp:column {"width":"40px"} -->
<div class="wp-block-column" style="flex-basis:40px"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:comment-author-name {"fontSize":"text-xxs"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|font-tertiary"}}}},"textColor":"font-tertiary","fontSize":"text-xxs"} /-->

<!-- wp:comment-edit-link {"style":{"elements":{"link":{"color":{"text":"var:preset|color|font-tertiary"}}}},"fontSize":"text-xxs","textColor":"font-tertiary"} /--></div>
<!-- /wp:group -->

<!-- wp:comment-content {"fontSize":"text-xs"} /-->

<!-- wp:comment-reply-link {"style":{"elements":{"link":{"color":{"text":"var:preset|color|font-tertiary"}}}},"fontSize":"text-xxs","textColor":"font-tertiary"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"style":{"elements":{"link":{"color":{"text":"var:preset|color|font-secondary"}}}},"textColor":"font-secondary","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments-query-loop -->
</div>
<!-- /wp:group -->