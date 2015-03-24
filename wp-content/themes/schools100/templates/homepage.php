<?php
/**
Template Name: Home Page
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
		<div class="recent_news_scroll">
			<?php echo do_shortcode('[metaslider id=54]');?>
		</div>
		<div class="schools-images">
			<div class="row school-thumbs">
				<div class="col-xs-6 col-sm-3">
					<a href="<?php bloginfo('url');?>/schools_type/missionary-school/"><img src="<?php bloginfo('template_url'); ?>/img/c_01_orig.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="<?php bloginfo('url');?>/schools_type/public-school/"><img src="<?php bloginfo('template_url'); ?>/img/c_02_orig.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="<?php bloginfo('url');?>/schools_type/private-school/"><img src="<?php bloginfo('template_url'); ?>/img/c_03_orig.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="<?php bloginfo('url');?>/schools_type/international-school/"><img src="<?php bloginfo('template_url'); ?>/img/c_04_orig.png"/></a>
				</div>
			</div>
			<div class="row school-thumbs">
				<div class="col-xs-12 col-sm-6">
					<a href="<?php bloginfo('url');?>/schools_type/recommended-school/"><img src="<?php bloginfo('template_url'); ?>/img/c_06.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="<?php bloginfo('url');?>/schools_type/elite-school/"><img src="<?php bloginfo('template_url'); ?>/img/c_05_orig.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="<?php bloginfo('url');?>/schools_type/specialty-school/"><img src="<?php bloginfo('template_url'); ?>/img/c_07_orig.png"/></a>
				</div>
			</div>
			<div class="row school-thumbs">
				<div class="col-xs-6 col-sm-3">
					<a href="<?php bloginfo('url');?>/schools_type/girl-school/"><img src="<?php bloginfo('template_url'); ?>/img/c_08_orig.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="<?php bloginfo('url');?>/schools_type/boy-school/"><img src="<?php bloginfo('template_url'); ?>/img/c_09_orig.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="<?php bloginfo('url');?>/schools_type/mixed-school/"><img src="<?php bloginfo('template_url'); ?>/img/c_10_orig.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="<?php bloginfo('url');?>/university-foundation/"><img src="<?php bloginfo('template_url'); ?>/img/c_11_orig.png"/></a>
				</div>
			</div>
			<div class="row school-thumbs">
				<div class="col-xs-6 col-sm-3">
					<a href="<?php bloginfo('url');?>/schools_type/ib-school/"><img src="<?php bloginfo('template_url'); ?>/img/c_12_orig.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href="<?php bloginfo('url');?>/schools_type/boarding-school/"><img src="<?php bloginfo('template_url'); ?>/img/c_13_orig.png"/></a>
				</div>
				<div class="col-xs-12 col-sm-6">
					<a href="<?php bloginfo('url');?>/area-list/new-south-wales-schools/"><img src="<?php bloginfo('template_url'); ?>/img/c_14.png"/></a>
				</div>
			</div>
		</div>
		<div class="row sina-youku">
			<div class="col-md-4 sina">
				<iframe id="sina_widget_3933331142" style="width:100%; height:300px;" frameborder="0" scrolling="no" src="http://v.t.sina.com.cn/widget/widget_blog.php?uid=3933331142&height=300&skin=wd_01&showpic=1"></iframe>
			</div>
			<div class="col-md-8 youku">
					<?php get_youku_content(); ?>
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
