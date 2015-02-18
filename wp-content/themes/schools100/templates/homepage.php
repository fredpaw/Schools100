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

<div class="hidden-xs hidden-sm row sidebar-left">
<?php get_sidebar( 'left' ); ?>
</div>

</div>
<div class="col-md-9">
<!-- start content container -->
<div class="row dmbs-content">

    <?php //left sidebar ?>


    <div class="col-md-<?php devdmbootstrap3_main_content_width(); ?> dmbs-main">

        <div class="row top-search"><?php echo get_search_form(); ?></div>
		<div class="recent_news_scroll">
			<?php echo do_shortcode('[ivrss-gallery type="GROUP1" display="1" height="200" random="No" speed="" waitseconds=""]'); ?>
		</div>
		<div class="schools-images">
			<div class="row school-thumbs">
				<div class="col-xs-6 col-sm-3">
					<a href=""><img src="wp-content/themes/schools100/img/c_01_orig.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href=""><img src="wp-content/themes/schools100/img/c_02_orig.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href=""><img src="wp-content/themes/schools100/img/c_03_orig.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<img src="wp-content/themes/schools100/img/c_04.png"/>
				</div>
			</div>
			<div class="row school-thumbs">
				<div class="col-xs-12 col-sm-6">
					<a href=""><img src="wp-content/themes/schools100/img/c_06.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href=""><img src="wp-content/themes/schools100/img/c_05_orig.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href=""><img src="wp-content/themes/schools100/img/c_07_orig.png"/></a>
				</div>
			</div>
			<div class="row school-thumbs">
				<div class="col-xs-6 col-sm-3">
					<img src="wp-content/themes/schools100/img/c_08.png"/>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href=""><img src="wp-content/themes/schools100/img/c_09_orig.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href=""><img src="wp-content/themes/schools100/img/c_10_orig.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href=""><img src="wp-content/themes/schools100/img/c_11_orig.png"/></a>
				</div>
			</div>
			<div class="row school-thumbs">
				<div class="col-xs-6 col-sm-3">
					<a href=""><img src="wp-content/themes/schools100/img/c_12_orig.png"/></a>
				</div>
				<div class="col-xs-6 col-sm-3">
					<a href=""><img src="wp-content/themes/schools100/img/c_13_orig.png"/></a>
				</div>
				<div class="col-xs-12 col-sm-6">
					<a href=""><img src="wp-content/themes/schools100/img/c_14.png"/></a>
				</div>
			</div>
		</div>
		<div class="row sina-youku">
			<div class="col-md-4 sina">
				<iframe id="sina_widget_3933331142" style="width:100%; height:300px;" frameborder="0" scrolling="no" src="http://v.t.sina.com.cn/widget/widget_blog.php?uid=3933331142&height=300&skin=wd_01&showpic=1"></iframe>
			</div>
			<div class="col-md-8 youku">
				<div class="row">
					<div class="youku-videos col-sm-8 col-xs-12" id="youku-homepage" name="youku-videos">
						<iframe name="youku-videos" height=300 width=510 src="http://player.youku.com/embed/XODkwNDgxNzQ0" rel="nofollow" frameborder=0 allowfullscreen></iframe>
					</div>
					<div class="youku-list col-sm-4 col-xs-12">
						<div class="row">
							<div class="col-xs-3 col-sm-12">
								<div class="row">
									<div class="col-xs-12 col-sm-2">
										<a href="http://player.youku.com/embed/XODkwNDgxNzQ0" target="youku-videos" rel="nofollow">1</a>
									</div>
									<div class="hidden-xs col-sm-10">
										<a href="http://player.youku.com/embed/XODkwNDgxNzQ0" target="youku-videos" rel="nofollow">视频1</a>
									</div>
								</div>
							</div>
							<div class="col-xs-3 col-sm-12">
								<div class="row">
									<div class="col-xs-12 col-sm-2">
										<a href="http://player.youku.com/embed/XODkwNDcwNTg4" target="youku-videos" rel="nofollow">2</a>
									</div>
									<div class="hidden-xs col-sm-10">
										<a href="http://player.youku.com/embed/XODkwNDcwNTg4" target="youku-videos" rel="nofollow">视频2</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-3 col-sm-12">
									<div class="col-xs-12 col-sm-2">
										<a href="http://player.youku.com/embed/XODkwNDY4Mjg0" target="youku-videos" rel="nofollow">3</a>
									</div>
									<div class="hidden-xs col-sm-10">
										<a href="http://player.youku.com/embed/XODkwNDY4Mjg0" target="youku-videos" rel="nofollow">视频3</a>
									</div>
								</div>
							</div>
							<div class="col-xs-3 col-sm-12">
								<div class="row">
									<div class="col-xs-12 col-sm-2">
										<a href="http://player.youku.com/embed/XODkxNjQwOTQw" target="youku-videos" rel="nofollow">4</a>
									</div>
									<div class="hidden-xs col-sm-10">
										<a href="http://player.youku.com/embed/XODkxNjQwOTQw" target="youku-videos" rel="nofollow">视频4</a>
									</div>
								</div>
							</div>
						</div>
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
