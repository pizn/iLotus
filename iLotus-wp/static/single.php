<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<p class="lotus-breadcrub"><?php if(function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb("","");
           };?></p>
		<h1 class="lotus-pagetit"><?php the_title(); ?></h1>
        <article id="post-<?php the_ID(); ?>" itemscope itemtype="http://schema.org/Article" class="lotus-post">
		<?php the_content(); ?>
		</article>
		<p class="lotus-pagebtn">发表于：<span title="<?php the_time(__('Y.m.d')); ?>" class="lotus-date"><?php the_time(__('Y.m.d')); ?></span>&nbsp;&nbsp;<?php the_tags('<i class="icon-tags"></i> 标签：', '、'); ?></p>
		<p class="lotus-anno">声明: 本文采用 <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" rel="nofollow" target="_blank" title="自由转载-非商用-非衍生-保持署名">BY-NC-SA</a> 授权。转载请注明转自: <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="nofollow">PIZn</a></p>
		<section class="lotus-nextpage fn-clear">
            <div class="lotus-nextpage-left"><?php if( !previous_post_link('%link', '<i class="icon-circle-arrow-left"></i> 上一篇') ): ?><?php endif; ?></div>
            <div class="lotus-nextpage-right"><?php if( !next_post_link('%link', '下一篇 <i class="icon-circle-arrow-right"></i>') ): ?><?php endif; ?></div>
        </section>
	<?php endwhile; ?>
<?php endif; ?>
<section class="lotus-disqus fn-clear" itemscope itemtype="http://schema.org/Comment">
	<div id="disqus_thread"></div>
	<script type="text/javascript">
	    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	    var disqus_shortname = 'pizn'; // required: replace example with your forum shortname
	
	    /* * * DON'T EDIT BELOW THIS LINE * * */
	    (function() {
	        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
	        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	    })();
	</script>
	<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</section>
<?php get_footer(); ?>
