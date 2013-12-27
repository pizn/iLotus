<?php
/*
Template Name: link
*/
?>
<?php get_header(); ?>
<p class="lotus-breadcrub"><?php if(function_exists('yoast_breadcrumb')) { yoast_breadcrumb("",""); };?></p>
<h1 class="lotus-pagetit">Link</h1>
<article id="link">
	<ul class="lotus-link fn-clear">
	<?php wp_list_bookmarks('category_before=<li id=%id class="lotus-link-item fn-clear">&title_before=<h3>&title_after=</h3>'); ?> 
	</ul>
</article>
<?php get_footer(); ?>