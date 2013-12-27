<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
<p class="lotus-breadcrub"><?php if(function_exists('yoast_breadcrumb')) { yoast_breadcrumb("",""); };?></p>
<h1 class="lotus-pagetit">Archives</h1>
<article id="archives">
	<?php archives_list(); ?>
</article>
<?php get_footer(); ?>
