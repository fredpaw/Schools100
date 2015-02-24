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
		
		<div class="container-fluid main-content">
			<div class="404">
			<h1><?php _e('你所访问的页面不存在！','devdmbootstrap3'); ?></h1>
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