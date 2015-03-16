<?php
/*
	Template Name:网站地图
	Author: Fred Zhou
	Version: 1.0
*/
?>

<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<div class="hidden-xs row sidebar-left">
<?php get_sidebar( 'left' ); ?>
</div>

</div>
<div class="col-sm-9 col-xs-12">
<!-- start content container -->
<div class="row dmbs-content">

    <?php //left sidebar ?>


    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

        <div class="row top-search"><?php echo get_search_form(); ?></div>
		
		<div class="row content-header">
			<div class="col-sm-3 text-center hidden-xs">
				<img src="<?php bloginfo('template_url'); ?>/img/student.png" />
			</div>
			<div class="col-sm-9 col-xs-12">
				<div class="content-header-title">
					<h1>帮您找个好学校</h1>
				</div>
				<div class="content-header-link">
					<div class="col-xs-6 col-sm-3"><a href="<?php bloginfo('url'); ?>/basic-info/">基本信息</a></div>
					<div class="col-xs-6 col-sm-3"><a href="<?php bloginfo('url'); ?>/service-concept/">服务理念</a></div>
					<div class="col-xs-6 col-sm-3"><a href="<?php bloginfo('url'); ?>/aeas-test/">AEAS测试</a></div>
					<div class="col-xs-6 col-sm-3"><a href="<?php bloginfo('url'); ?>/contact-us/">联系我们</a></div>
				</div>
			</div>
		</div>
		
		<div class="main-content">
			<h2 id="authors">Authors</h2>
<ul>
<?php
wp_list_authors(
  array(
    'exclude_admin' => false,
  )
);
?>
</ul>

<h2 id="pages">Pages</h2>

<ul>
<?php
// Add pages you'd like to exclude in the exclude here
wp_list_pages(
  array(
    'exclude' => '',
    'title_li' => '',
  )
);
?>
</ul>
 
<h2 id="posts">Posts</h2>

<ul>
<?php
// Add categories you'd like to exclude in the exclude here
$cats = get_categories('exclude=');
foreach ($cats as $cat) {
  echo "<li><h3>".$cat->cat_name."</h3>";
  echo "<ul>";
  query_posts('posts_per_page=-1&cat='.$cat->cat_ID);
  while(have_posts()) {
    the_post();
    $category = get_the_category();
    // Only display a post link once, even if it's in multiple categories
    if ($category[0]->cat_ID == $cat->cat_ID) {
      echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
    }
  }
  echo "</ul>";
  echo "</li>";
}
?>
</ul>
<?php
  foreach( get_post_types( array('public' => true) ) as $post_type ) {
  if ( in_array( $post_type, array('post','page','attachment') ) )
    continue;
  $pt = get_post_type_object( $post_type );
  echo '<h2>'.$pt->labels->name.'</h2>';
  echo '<ul>';
  query_posts('post_type='.$post_type.'&posts_per_page=-1');
  while( have_posts() ) {
    the_post();
    echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
  }
  echo '</ul>';
}
?>

		</div>
		
		<?php get_template_part('template-part', 'footernav'); ?>
    </div>

    <?php //get the right sidebar ?>
    <?php get_sidebar( 'right' ); ?>

</div>
</div>
<!-- end content container -->
<?php get_footer(); ?>
