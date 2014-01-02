<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<p class="lotus-breadcrub"><?php if(function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb("","");
           };?></p>
		<h1 class="lotus-pagetit"><?php the_title(); ?></h1>
        <article id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article" class="lotus-post">
		<?php the_content(); ?>
        <p class="lotus-post-end"><span><i></i><?php the_time(__('Y.m.d')); ?></span></p>
		</article>
		<p class="lotus-pagebtn">文章分类：<?php the_category( ',' ); ?>&nbsp;&nbsp;<?php the_tags('<i class="icon-tags"></i> 标签：', '、'); ?></p>
		<p class="lotus-anno">声明: 本文采用 <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" rel="nofollow" target="_blank" title="自由转载-非商用-非衍生-保持署名">BY-NC-SA</a> 授权。转载请注明转自: <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="nofollow"><?php bloginfo( 'name' ); ?></a></p>
		<section class="lotus-nextpage fn-clear">
            <div class="lotus-nextpage-left"><?php if( !previous_post_link('%link', '<i class="icon-circle-arrow-left"></i> 上一篇') ): ?><?php endif; ?></div>
            <div class="lotus-nextpage-right"><?php if( !next_post_link('%link', '下一篇 <i class="icon-circle-arrow-right"></i>') ): ?><?php endif; ?></div>
        </section>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
