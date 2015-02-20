<?php
/**
Template Name: School List
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
					<div class="col-xs-6 col-sm-3"><a href="#">基本信息</a></div>
					<div class="col-xs-6 col-sm-3"><a href="#">服务理念</a></div>
					<div class="col-xs-6 col-sm-3"><a href="#">AEAS测试</a></div>
					<div class="col-xs-6 col-sm-3"><a href="#">联系我们</a></div>
				</div>
			</div>
		</div>
		<div class="school-category row">
			<div class="container-fluid">
				<div class="col-sm-3 col-xs-12">
					<div class="list-group">
						<a class="list-group-item disabled" href="#">教会中学</a>
						<a class="list-group-item" href="#">公立中学</a>
						<a class="list-group-item" href="#">私立中学</a>
						<a class="list-group-item" href="#">贵族中学</a>
						<a class="list-group-item" href="#">男子中学</a>
						<a class="list-group-item" href="#">女子中学</a>
						<a class="list-group-item" href="#">混合中学</a>
						<a class="list-group-item" href="#">特长中学</a>
						<a class="list-group-item" href="#">IB中学</a>
						<a class="list-group-item" href="#">寄宿中学</a>
					</div>
				</div>
			</div>
			<div class="col-sm-9 hidden-xs">
				<img src=""></img>
			</div>
		</div>
		<div class="school-category-list row">
			<div class="school-category-title">
			</div>
			<div class="school-category-sort">
			</div>
			<div class="school-category-list row">
				<div class="school-category-thumb col-sm-2">
				</div>
				<div class="school-category-detail col-sm-10">
					<div class="school-title">
					</div>
					<div class="school-fee">
					</div>
					<div class="school-requirement">
					</div>
					<div class="school-population">
					</div>
					<div class="school-establish-time">
					</div>
					<div class="school-type">
					</div>
				</div>
			</div>
		</div>
		
		<?php get_template_part('template-part', 'footernav'); ?>
    </div>

    <?php //get the right sidebar ?>
    <?php get_sidebar( 'right' ); ?>

</div>
</div>
<!-- end content container -->

<?php get_footer(); ?>
