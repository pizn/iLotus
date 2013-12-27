<?Php
/*
Template Name: All Tags
*/
?>
<?php get_header(); ?>
<p class="lotus-breadcrub"><?php if(function_exists('yoast_breadcrumb')) { yoast_breadcrumb("",""); };?></p>
<h1 class="lotus-pagetit">All Tags<?php
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo $tag->name . ' '; 
  }
}
?></h1>
<article id="AllTags">
	<?php $tags = get_tags();
           		function num ($a) { 
					if($a < 2) {
						return "tags-normal";
					} elseif($a < 4){
						return "tags-big";
					} else {
						return "tags-larger";
					}
				} 
				$html = '<div class="lotus-tags fn-clear">';
				foreach ($tags as $tag){
					//$tt = $tag->count;
					//echo $tt;
					
					$tag_link = get_tag_link($tag->term_id);
					$html .= "<a href='{$tag_link}' title='标签: {$tag->name}' class='".num($tag->count)."' rel='tag' >";
					$html .= "{$tag->name}</a>";
				}
				$html .= '</div>';
				echo $html; 
			?>
</article>
<?php get_footer(); ?>