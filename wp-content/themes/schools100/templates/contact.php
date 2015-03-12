<?php
/**
Template Name: 联系我们
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
					<div class="col-xs-6 col-sm-3"><a href="<?php bloginfo('url'); ?>/aeas-test/">AEAS测试</a></div>
					<div class="col-xs-6 col-sm-3"><a href="#">联系我们</a></div>
				</div>
			</div>
		</div>
		<div class="container-fluid info-contact">
			<div class="contact-follow">
				<h1 class="text-center"><b>联系我们</b></h1>
				<div class="contact-china">
				</div>
				<div class="contact-sydney">
				</div>
				<div class="contact-melbourne">
				</div>
				<div class="row contact-image">
					<div class="col-sm-6 col-xs-12">
					</div>
					<div class="col-sm-6 col-xs-12">
					</div>
				</div>
				<div class="contact-follow">
				</div>
				<div class="micromsg-phone">
				</div>
			</div>
			<div class="consultants">
				<h1 class="text-center"><b>顾问团队</b></h1>
				<div class="consultant-beijing">
					<h3><b>北京金牌顾问</b></h3>
					<div class="consultant-group row">
					<?php 
						$args = array(
							'category-name' => '',
						);
					?>
						<div class="col-xs-12 col-sm-6">
							<p><b></b></p>
						</div>
					<?php ?>
					</div>
				</div>
				<div class="consultant-melbourne">
					<h3><b>墨尔本金牌顾问</b></h3>
					<div class="consultant-group row">
						
					</div>
				</div>
				<div class="consultant-sydney">
					<h3><b>悉尼金牌顾问</b></h3>
					<div class="consultant-group row">
						
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
