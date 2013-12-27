<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>
<p class="lotus-breadcrub"><?php if(function_exists('yoast_breadcrumb')) { yoast_breadcrumb("",""); };?></p>
<h1 class="lotus-pagetit">About Me</h1>
<article id="Contact">
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>    
<?php endwhile; ?>
</article>
<?php get_footer(); ?>