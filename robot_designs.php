<?php
/*
Template Name: robot_designs
*/
?>
<?php get_header(); ?>
<style type="text/css">
#slider1_container, #Slides {
	left: 0px;
	top: 10px;
	width: 1300px;
	height: 500px;
}
#Slides > div {
	padding: 10px;
}
#slider1_container {
	position: relative;
}
#slides{
	cursor: move;
	position: absolute;
	overflow: hidden;
}
.alignright {
	float: right;
	padding-right: 18px;
}
.alignleft {
	float: left;
	margin: 5px;
}
.aligncenter {
	display: block;
	margin-left: auto;
	margin-right: auto;
}
.wp-caption-text {
	margin-top: 0px;
    font-style: italic;
    font-size: 0.9em
}
#content {
	background-color: #FBFBFB;
	height: 100%;
}
</style>
<div id="content">
<script>
$(document).ready(function () {
    var options = {
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$,
            $ChanceToShow: 1
        }
    };
    var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    function ScaleSlider() {
    var bodyWidth = document.body.clientWidth;
    if (bodyWidth)
        jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
    else
        window.setTimeout(ScaleSlider, 30);
}
ScaleSlider();

$(window).bind("load", ScaleSlider);
$(window).bind("resize", ScaleSlider);
$(window).bind("orientationchange", ScaleSlider);
//responsive code end
});
</script>
<div id="slider1_container">
    <!-- Slides Container -->
    <div id="slides" u="slides">
    	<?php $args = array(
			'posts_per_page'   => 5000,
			'category'         => 3
		);
		$posts_array = get_posts( $args );
		?>
		<?php for($i = 0; $i < sizeof($posts_array); $i++) : ?>
		<div>
			<h1 class="year-title"><?php print(apply_filters( 'the_title', $posts_array[$i]->post_title )); ?></h1>
			<div><?php print(apply_filters( 'the_content', $posts_array[$i]->post_content)); ?></div>
		</div>
		<?php endfor; ?>
    </div>
    <style>
            /* jssor slider arrow navigator skin 01 css */
            /*
            .jssora01l                  (normal)
            .jssora01r                  (normal)
            .jssora01l:hover            (normal mouseover)
            .jssora01r:hover            (normal mouseover)
            .jssora01l.jssora01ldn      (mousedown)
            .jssora01r.jssora01rdn      (mousedown)
            */
            .jssora01l, .jssora01r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 45px;
                height: 45px;
                cursor: pointer;
                background: url(../img/a01.png) no-repeat;
                overflow: hidden;
                top: 123px;
            }
            .jssora01l { background-position: -128px -38px; left: 8px;}
            .jssora01r { background-position: -188px -38px; right: 8px;}

            .jssora01l:hover { background-position: -248px -38px; }
            .jssora01r:hover { background-position: -308px -38px; }
            .jssora01l.jssora01ldn { background-position: -8px -38px; }
            .jssora01r.jssora01rdn { background-position: -68px -38px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora01l">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora01r">
        </span>
</div>
</div>
<?php get_footer(); ?>
