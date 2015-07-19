<?php
/*
Template Name: members
*/
?>
<?php get_header(); ?>
<div id="page-content">
<style>
h3 {
	background-color: #001D55;
	color: #FBFBFB;
	margin-bottom: 0px;
	padding: 0px 5px;
}
h2 {
	margin-left: 3px;
	margin-right: 3px;
}
p {
	margin: 0px 5px;
}
a {
	text-decoration: none;
	color: #1F5C1F;
}
#page-content {
	font-size:1.5em;
}
#left-pane {
	width: 50%;
	background-color: #FBFBFB;
	border: solid;
	border-radius: 10px;
	margin-left: 10px;
}
#calendar {
	border: solid;
	margin: 8px 10px;
	position: absolute;
	right: 0px; top: 203;
	border-radius: 10px;
	width:45%;
}
</style>
<br />
<object id="calendar" data="http://www.google.com/calendar/embed?title=Public%20Calendar&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;src=robodogs.org_mjjoqm31ubpi5e9hinbn1bhsbc%40group.calendar.google.com&amp;ctz=America%2FNew_York" width="650" height="600"><a onclick="window.open(this.href,'_blank');return false;" href="http://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;src=robodogs.org_mjjoqm31ubpi5e9hinbn1bhsbc%40group.calendar.google.com&amp;ctz=America%2FNew_York">Public Calendar</a></object>
<div id="left-pane">
<p>Current members: Please check the <a href="http://robodogs.org/forums">forums</a> <u>daily</u>.<br />
The calendar may be used as a suppliment to, <b><u>not</u></b> a replacement for, the forums.<p>
<?php $args = array(
	'posts_per_page'   => 5000,
	'category'         => 2
);
$posts_array = get_posts( $args );
?>
<div id="members-info">
<h2>Current team members</h2>
<?php for($i = 0; $i < sizeof($posts_array); $i++) : ?>
<h3><?php print(apply_filters( 'the_title', $posts_array[$i]->post_title )); ?></h3>
<?php print(apply_filters( 'the_content', $posts_array[$i]->post_content)); ?>
<?php endfor; ?>
</div>
<h2>Tonight's dinner is pizza.</h2>
</div>
</div>
<?php get_footer(); ?>
