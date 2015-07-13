<?php
/*
Template Name: about_us
*/
?>
<?php get_header(); ?>
<style>

.alignleft {
	float: left;
}
.alignright {
	float: right;
}
.aligncenter {
	display: block;
	margin-right: auto;
	margin-left: auto;
}
.wp-caption-text{
	font-size: .9em;
    font-style: italic;
    margin-top: 0;
}

</style>
<?php $post = get_post(); 
$content = apply_filters('the_content', $post->post_content); 
echo $content; ?>
<?php get_footer(); ?>
