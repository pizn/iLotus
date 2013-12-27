<?php get_header(); ?>
<p class="lotus-breadcrub"><?php if(function_exists('yoast_breadcrumb')) { yoast_breadcrumb("",""); };?>404 Page</p>
<h1 class="lotus-pagetit">Page not found !</h1>
<div class="lotus-404">
<h3>The page you requested is no longer here.</h3>
<p>It seems that the page you were trying to reach doesn't exist anymore, or maybe it has just moved. Please feel free to contact us if the problem persists or if you think it is a problem with Product Planner, please contact us.</p>
<p>It might help to start form the <a href="<?php echo esc_url( home_url( '/' ) ); ?>">home page</a>.</p>
</div>
<?php get_footer(); ?>