<article class="lotus-article" id="post-<?php the_ID(); ?>">
	<h3><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'iLotus' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
	<?php the_content(__("", 'iLotus'));?>
	<p class="lotus-date"><?php the_time(__('Y.m.d')); ?></p>
</article>