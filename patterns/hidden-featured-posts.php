<?php
/**
 * Title: Hidden Featured Posts
 * Slug: theme/hidden-featured-posts
 * Inserter: no
 */
?>

<!-- wp:group {"backgroundColor":"background-primary","className":"related-posts-wrap","paddingTop":13,"paddingBottom":13} -->
<div class="wp-block-group related-posts-wrap has-background-primary-background-color has-background pt__13 pb__13"><!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide","className":"gap-s"} -->
	<div class="wp-block-query alignwide gap-s">
	<!-- wp:heading {"level":3,"textColor":"font-primary","fontSize":"text-l","paddingBottom":7} -->
	<h3 class="has-font-primary-color has-text-color has-text-l-font-size pb__7" id="more-blog-posts">Featured posts</h3>
	<!-- /wp:heading -->
	<!-- wp:post-template -->
	<!-- wp:post-featured-image {"isLink":true,"className":"br__s"} /-->
	<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|font-primary"}}}},"textColor":"font-primary","fontSize":"text-m"} /-->
	<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|font-tertiary"}}}},"textColor":"font-tertiary","fontSize":"text-xxs"} /-->
	<!-- /wp:post-template --></div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->