<?php get_header(); ?>
<p class="lotus-breadcrub"><?php if(function_exists('yoast_breadcrumb')) { yoast_breadcrumb("",""); };?></p>
<h1 class="lotus-pagetit">Tag：<?php echo single_tag_title( '', false ); ?></h1>
<section id="Tag">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
<section class="lotus-pages fn-clear">
<?php  wp_pagenavi(); ?>
</section>
<?php get_footer(); ?>