<?php
/**
 * @name: header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> id="J-html" class="">
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <title>
        <?php global $page, $paged;
            wp_title(' › ', true, 'right');
            bloginfo('name');
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $paged >= 2 || $page >= 2 )
        echo ' › ' . sprintf( __( 'Page %s', 'iLotus' ), max( $paged, $page ) );
        ?>
    </title>
    <?if (is_home()){
		$description = "展新展新的个人博客，在线记录工作、生活、情感和游玩的事儿，分享互联网的动态和社会的百态。";
		$keywords = "PIZn";
	  } elseif (is_single()){
		if ($post->post_excerpt) {
			 $description = $post->post_excerpt;
		} else {
		     $description = substr(strip_tags($post->post_content),0,270);
		}
		$keywords = "";       
		$tags = wp_get_post_tags($post->ID);
		foreach ($tags as $tag ) {
			$keywords = $keywords . $tag->name . ", ";
		}
	 } elseif(is_page()) {
	 	if ($post->post_excerpt) {
			 $description = $post->post_excerpt;
		} else {
		     $description = substr(strip_tags($post->post_content),0,270);
		}
		$page_data = get_page($post->ID);
		$keywords = $page_data->post_title;       
	 } elseif(is_tag()) {
	 	$description = 'PIZn 博客的标签为 ' . single_tag_title( '', false ).' 的页面';
	 	$keywords = 'Tag, '. single_tag_title( '', false );
	 } elseif(is_category()) {
	 	$description = 'PIZn 博客的文章分类为 ' . single_cat_title( '', false ) . ' 的页面';
	 	$keywords = 'Category, '. single_cat_title( "", false );
	 }
	?>
    <meta name="keywords" content="<? echo $keywords ?>" />
	<meta name="description" content="<? echo $description ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/static/style.css" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/static/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <script src="<?php echo get_template_directory_uri(); ?>/static/js/jquery.js" type="text/javascript"></script>
    <?php wp_head(); ?>
</head>
<body itemscope itemtype="http://schema.org/WebPage" <?php if(is_home()) { body_class('lotus index');} else { body_class('lotus'); } ?>>
<nav class="lotus-nav">
	<ul>
		<li class="home <?php if(is_home()) { echo "current"; } ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="nofollow" title="首页"><i class="icon-home"></i></a></li>
		<li <?php if(is_page('archives')) { echo "class='current'"; } ?>><a href="<?php echo esc_url( home_url( '/archives' ) ); ?>" rel="bookmark" title="文章归档"><i class="icon-reorder"></i></a></li>
		<li <?php if(is_page('contact')) { echo "class='current'"; } ?>><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" rel="bookmark" title="关于我"><i class="icon-envelope-alt"></i></a></li>
		<li><a href="#"  rel="nofollow" title="ChangeTheme" id="J-changeTheme" rel="nofollow"><i class="icon-heart"></i></a></li>
		<li><a href="<?php echo esc_url( home_url('/labs') ); ?>" rel="nofollow" title="labs"><i class="icon-flag"></i></a></li>
	</ul>
</nav>
