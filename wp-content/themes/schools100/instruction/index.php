<?php
////////////////////////////////////////////////////////////////////
// Add writing instruction to admin page 
////////////////////////////////////////////////////////////////////
add_action('admin_menu','add_writing_instruction_page');
function add_writing_instruction_page() {
	add_menu_page('后台编辑说明','后台编辑说明','publish_posts','writing-instruction','','dashicons-welcome-write-blog');
}

////////////////////////////////////////////////////////////////////
// Add post writing instruction subpage to admin page 
////////////////////////////////////////////////////////////////////
add_action('admin_menu','add_post_instruction_page');
function add_post_instruction_page() {
	add_submenu_page('writing-instruction','文章编辑说明','文章编辑说明','publish_posts','writing-instruction','post_writing_instruction');
}

function post_writing_instruction() {
	include_once('post_instruction.php');
}

////////////////////////////////////////////////////////////////////
// Add article writing instruction subpage to admin page 
////////////////////////////////////////////////////////////////////
add_action('admin_menu','cate_and_gallery_instruction_page');
function cate_and_gallery_instruction_page() {
	add_submenu_page('writing-instruction','分类及多媒体编辑说明','分类及多媒体编辑说明','publish_posts','cate_and_gallery_instruction','cate_and_gallery_instruction');
}

function cate_and_gallery_instruction() {
	include_once('cat_img_instruction.php');
}

////////////////////////////////////////////////////////////////////
// Add keyword link instruction subpage to admin page 
////////////////////////////////////////////////////////////////////
add_action('admin_menu','add_keyword_link_instruction_page');
function add_keyword_link_instruction_page() {
	add_submenu_page('writing-instruction','关键字链接说明','关键字链接说明','manage_options','keyword-link-instuction','keyword_link_instruction');
}

function keyword_link_instruction() {
	include_once('keyword_instruction.php');
}
?>