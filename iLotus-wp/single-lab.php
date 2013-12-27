<?Php
/*
Template Name: Labs
*/
?>
<?php get_header(); ?>
<p class="lotus-breadcrub"><?php if(function_exists('yoast_breadcrumb')) { yoast_breadcrumb("",""); };?></p>
<h1 class="lotus-pagetit">Labs</h1>
<article id="labs">
    <img src="http://www.pizn.net/static/images/labs.jpg" alt="PIZn 的实验室" class="fn-img fn-img-rg"/>
    <p class="lotus-first">时光飞逝，岁月如歌。经过了 1 年的沉淀，Alice 的思想已经应用到了很多的项目开发中。回头相望，Alice 样式库的解决方案为我们带来了不少的价值，同时，我们又在不停地变化和更新中。</p>
    <p>行事匆匆，人非昔日。我崇尚分享和积累，相信这是一种正能量。但可惜的是，一旦事情多了，那些经验会随着时间而去。于是，趁还有时间，赶紧积累沉淀下来。不为什么，只为这些解决方案，确实不错。</p>
    <p>除了 Alice 之外，这里也会记录我的前端经验，同时还有关于 Jekyll 的相关记录。篇幅较长，这里是列表：
        <ul>
            <li><a href="#1">Alice 样式库解决方案</a></li>
            <li><a href="#2">PIZn 的前端仓库</a></li>
            <li><a href="#3">Jekyll 相关记录</a></li>
        </ul>
    </p>

    <?php query_posts( 'category_name=alice&showposts=100' ); ?>
    <?php if ( have_posts() ) : ?>
        <h3 id="1">Alice 样式库解决方案</h3>
            <ul>
            <?php while ( have_posts() ) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'iLotus' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
            </ul>
	<?php endif; ?>

    <?php query_posts( 'category_name=wd&showposts=100' ); ?>
    <?php if ( have_posts() ) : ?>
        <h3 id="2">PIZn 的前端仓库</h3>
            <ul>
            <?php while ( have_posts() ) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'iLotus' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
            </ul>
	<?php endif; ?>

    <?php query_posts( 'category_name=jekyll&showposts=100' ); ?>
    <?php if ( have_posts() ) : ?>
        <h3 id="3">Jekyll 相关记录</h3>
            <ul>
            <?php while ( have_posts() ) : the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( '%s', 'iLotus' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
            </ul>
	<?php endif; ?>
</article>

<?php get_footer(); ?>