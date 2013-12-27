<?php
/*
Template Name: categories
*/
?>
<?php get_header(); ?>
<p class="lotus-breadcrub"><?php if(function_exists('yoast_breadcrumb')) { yoast_breadcrumb("",""); };?></p>
<h1 class="lotus-pagetit">Categories</h1>
<article id="categories">
	<ul class="lotus-cat fn-clear">
		<?php wp_list_cats(); ?>
	</ul>
</article>
<?php get_footer(); ?>