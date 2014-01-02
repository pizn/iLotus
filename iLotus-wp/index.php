<?php get_header(); ?>
<section class="lotus-logo fn-clear">
    <hgroup class="violet-site">
        <h1><?php bloginfo( 'name' ); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>
    </hgroup><!-- //violet-site -->	
</section>

<?php query_posts('showposts=1'); while (have_posts()) : the_post(); ?>
	<?php get_template_part( 'content', get_post_format() ); ?>
<?php endwhile; ?>

<section class="lotus-double fn-clear">
	<article class="article article-first">
	<h3>最新文章</h3>
	<ul>
	<?php query_posts('showposts=3&offset=1'); while (have_posts()) : the_post(); ?>
		<li><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'iLotus' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></li>
	<?php endwhile; ?>
	</ul>
	</article>
	<article class="article article-last">
	<h3>相关页面</h3>
	<ul>
		<li><a href="<?php echo esc_url( home_url( '/categories' ) ); ?>" rel="bookmark" title="文章分类">文章分类</a><span class="lotus-squ">|</span><a href="<?php echo esc_url( home_url( '/link' ) ); ?>" rel="bookmark" title="友情链接">友情链接</a></li>
        <li><a href="#">dingyueboke</a></li>
	</ul>
	</article>
</section>
<?php get_footer(); ?>
