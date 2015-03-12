﻿<?php
////////////////////////////////////////////////////////////////////
// Add writing instruction to admin page 
////////////////////////////////////////////////////////////////////
add_action('admin_menu','add_writing_instruction_page');
function add_writing_instruction_page() {
	add_menu_page('后台编辑说明','后台编辑说明','publish_posts','writing-instruction','','',6.3);
}

////////////////////////////////////////////////////////////////////
// Add post writing instruction subpage to admin page 
////////////////////////////////////////////////////////////////////
add_action('admin_menu','add_post_instruction_page');
function add_post_instruction_page() {
	add_submenu_page('writing-instruction','文章编辑说明','文章编辑说明','publish_posts','writing-instruction','post_writing_instruction');
}

function post_writing_instruction() {
	?>
<div class="wrapper">
	<h1>文章编辑说明</h1>
	<div class="nav">
		<a href="">文章列表页说明</a> | <a href="#page_intro">编辑页面功能说明</a> 
		<br><br>
		<a href="#edit-rules">文章编辑规则说明</a>
	</div>
	<div id="list-page-intro">
		<h3>文章列表页说明</h3>
		<img src="<?php echo bloginfo('template_url'); ?>/img/instruction/post_1.jpg" />
	</div>
	<div class="page-intro" id="page_intro">
		<div>
		</div>
	</div>
	<div class="edit-rules" id="edit-rules">
	</div>
</div>
	<?php
}

////////////////////////////////////////////////////////////////////
// Add article writing instruction subpage to admin page 
////////////////////////////////////////////////////////////////////
add_action('admin_menu','add_article_instuction_page');
function add_article_instuction_page() {
	add_submenu_page('writing-instruction','页面编辑说明','页面编辑说明','publish_posts','article-writing-instruction','article_writing_instruction');
}

function article_writing_instruction() {
	?>
<div class="wrapper">
	<h1>页面编辑说明</h1>
</div>
	<?php
}

////////////////////////////////////////////////////////////////////
// Add custom post type instruction subpage to admin page 
////////////////////////////////////////////////////////////////////
add_action('admin_menu','add_custom_post_type_instuction_page');
function add_custom_post_type_instuction_page() {
	add_submenu_page('writing-instruction','自定义文章类型说明','自定义文章类型说明','manage_options','custom-post-type-instruction','custom_post_type_instruction');
}

function custom_post_type_instruction() {
	echo '<h1>自定义文章类型说明</h1>';
}

////////////////////////////////////////////////////////////////////
// Add keyword link instruction subpage to admin page 
////////////////////////////////////////////////////////////////////
add_action('admin_menu','add_keyword_link_instruction_page');
function add_keyword_link_instruction_page() {
	add_submenu_page('writing-instruction','关键字链接说明','关键字链接说明','manage_options','keyword-link-instuction','keyword_link_instruction');
}

function keyword_link_instruction() {
	echo '<h1>关键字链接说明</h1>';
}
?>