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
			<div class="content-header-title">
				<img src="<?php bloginfo('template_url');?>/img/header.jpg" />
			</div>
			<div class="content-header-link">
				<div class="col-xs-12 col-sm-6 col-md-3 text-center"><a href="<?php bloginfo('url'); ?>/basic-info/">基本信息</a></div>
				<div class="col-xs-12 col-sm-6 col-md-3 text-center"><a href="<?php bloginfo('url'); ?>/service-concept/">服务理念</a></div>
				<div class="col-xs-12 col-sm-6 col-md-3 text-center"><a href="<?php bloginfo('url'); ?>/aeas-test/">AEAS测试</a></div>
				<div class="col-xs-12 col-sm-6 col-md-3 text-center"><a href="<?php bloginfo('url'); ?>/contact-us/">联系我们</a></div>
			</div>
		</div>
		<div class="container-fluid info-content">
			<div class="content-nav">
				<a href="#cs-1">联系我们</a>
				<span class="sep">|</span>
				<a href="#cs-2">顾问团队</a>
			</div>
			<div id="cs-1" class="contact-detail">
				<h1>联系我们</h1>
				<hr>
				<div class="contact-location row">
					<div class="contact-location-detail col-md-7 col-sm-12">
						<p><strong><span class="location">中国</span> 咨询热线：400 808 3028</strong></p>
						<p><strong>QQ：2073876220 2106914517</strong></p>
						<p>邮箱：schools100@gmail.com</p>
						<p>地址：北京市朝阳区东大桥路8号soho尚都南塔2805室</p>
						<p>邮编：100020</p>
						<br>
						<p class="comment">中国直拨澳洲咨询电话：950 4031 6904</p>
						<p class="comment">（免国际长途费）</p>
					</div>
					<div class="contact-weixin col-md-5 col-sm-12">
						<p class="text-center"><img src="<?php bloginfo('template_url'); ?>/img/weixin2d.jpg" alt="百分留学网微信二维码" /></p>
						<p class="text-center"><strong>请扫描关注百分留学网微信平台</strong></p>
						<p class="text-center"><strong>百分留学网一直和您在一起</strong></p>
					</div>
				</div>
				<div class="contact-location row">
					<div class="container-fluid">
						<p><strong><span class="location">悉尼</span> 咨询热线：+61 (2) 9267 7239</strong></p>
						<p><strong>QQ：1955462185</strong></p>
						<p>邮箱：schools100@gmail.com</p>
						<p>地址：Suite 5, Level 1, 377-383 Sussex Street, Sydney, NSW 2000, Australia</p>
					</div>
				</div>
				<div class="contact-location row">
					<div class="container-fluid">
						<p><strong><span class="location">墨尔本</span> 咨询热线：+61 (3) 9614 6026</strong></p>
						<p><strong>QQ：2301396725</strong></p>
						<p>邮箱：schools100@gmail.com</p>
						<p>地址：Suite 120, Level 1, 530 Little Collins Street, Melbourne, VIC 3000, Australia</p>
					</div>
				</div>
				<div class="row contact-image">
					<div class="col-md-6 col-sm-12">
						<div class="container-fluid contact-image-block">
							<p class="text-center"><img src="<?php bloginfo('template_url');?>/img/email-icon.jpg" alt="百分留学网电子邮件" /></p>
							<p class="text-center"><strong>schools100@gmail.com</strong></p>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="container-fluid contact-image-block">
							<p class="text-center"><img src="<?php bloginfo('template_url');?>/img/website_qr.png" alt="百分留学网二维码" /></p>
							<p class="text-center"><strong>http://www.schools100.com</strong></p>
						</div>
					</div>
				</div>
				<div class="contact-follow">
					<p><a href="http://i.youku.com/u/UMTM3MzM5MzY3Ng==" target="_blank" class="youku"><img src="<?php bloginfo('template_url');?>/img/youku.png" alt="百分留学网优酷频道" /></a> <a href="http://weibo.com/schools100" target="_blank"><img src="<?php bloginfo('template_url');?>/img/sina.png" alt="百分留学网微博" /></a></p>
					<p class="guangzhu"><strong>请关注我们的社交圈</strong></p>
				</div>
				<div class="micromsg-phone">
					<h2>使用微信电话本或微话，联系起来更方便！</h2>
					<h2>拨打国际长度全免费！</h2>
					<p><img src="<?php bloginfo('template_url'); ?>/img/weixin_phonebook.png" style="margin-right:10px;"/><img src="<?php bloginfo('template_url'); ?>/img/weihua.png" /></p>
					<div class="row">
						<div class="col-md-9 col-sm-12">
							<p>在Wi-Fi下使用最新的免费通话，随时随地与我们中国或澳洲办公室直接咨询，只需三步：</p>
							<ol>
								<li>请在手机上先下载微信通话本或微话（Andord或iPhone）的APP应用并且安装；</li>
								<li>
									<p>将我们顾问手机号加入您的手机通讯录：</p>
									<p><strong>悉尼顾问电话号：+86 1360 132 1875</strong></p>
									<p><strong>墨尔本顾问电话号：+61 451 439 730</strong></p>
								</li>
								<li>用微信电话本或微话拨打我们顾问手机号，开始咨询！</li>
							<ol>
						</div>
						<div class="col-md-3 hidden-sm hidden-xs">
							<img src="<?php bloginfo('template_url'); ?>/img/cell.png" />
						</div>
					</div>
					<p>国际长途，再也不是障碍。无论您在什么城市，您都可以随时联系到我们悉尼和墨尔本的专业顾问，澳大利亚悉尼或墨尔本和中国有2-3（夏令时）小时的时差，比如中国北京时间下午3点，悉尼或墨尔本的时间是下午5点或6点（夏令时）。</p>
				</div>
			</div>
			<div class="slogan">
				<p>百分留学网，快捷方便的百分服务！</p>
			</div>
			<div id="cs-2" class="consultants">
				<h2>顾问团队</h2>
				<hr>
				<div class="consultant">
					<h3><b>北京金牌顾问</b></h3>
					<div class="consultant-group row">
					<?php 
						$args = array(
							'category_name' => 'consultant-beijing',
							'order'			=> 'asc'
						);
						$the_query = new WP_Query($args);
						if($the_query->have_posts()):
						while($the_query->have_posts()): $the_query->the_post();
					?>
						<div class="col-md-12 col-lg-6">
							<div class="card fluid-container">
							<p class="card-title">
								<strong class="name"><?php echo the_title();?></strong>
								<span class="pull-right">微信 <a href="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(),"large")[0]; ?>" class="preview"><img class="weixin-qr" src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(),"large")[0]; ?>" /></a></span>
								<span class="pull-right">QQ <a class="hidden qq_pc" href="tencent://message/?uin=<?php echo get_post_meta(get_the_ID(),'consultant_qq')[0]; ?>&Site=&Menu=yes"><img class="qq-image" src="<?php bloginfo('template_url');?>/img/qq.png" /></a><a class="qq_mobile" href="mqqwpa://im/chat?chat_type=wpa&uin=<?php echo get_post_meta(get_the_ID(),'consultant_qq')[0]; ?>&version=1"><img class="qq-image" src="<?php bloginfo('template_url');?>/img/qq.png" /></a></span>
							</p>
							<div class="hr"></div>
							<p><?php echo the_content();?></p>
							</div>
						</div>
					<?php 
						endwhile;
						endif;
						wp_reset_postdata();
					?>
					</div>
				</div>
				<div class="consultant">
					<h3><b>墨尔本金牌顾问</b></h3>
					<div class="consultant-group row">
					<?php 
						$args = array(
							'category_name' => 'consultant-melbourne',
							'order'			=> 'asc'
						);
						$the_query = new WP_Query($args);
						if($the_query->have_posts()):
						while($the_query->have_posts()): $the_query->the_post();
					?>
						<div class="col-md-12 col-lg-6">
							<div class="card fluid-container">
							<p class="card-title">
								<strong class="name"><?php echo the_title();?></strong>
								<span class="pull-right">微信 <a href="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(),"large")[0]; ?>" class="preview"><img class="weixin-qr" src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(),"large")[0]; ?>" /></a></span>
								<span class="pull-right">QQ <a class="hidden qq_pc" href="tencent://message/?uin=<?php echo get_post_meta(get_the_ID(),'consultant_qq')[0]; ?>&Site=&Menu=yes"><img class="qq-image" src="<?php bloginfo('template_url');?>/img/qq.png" /></a><a class="qq_mobile" href="mqqwpa://im/chat?chat_type=wpa&uin=<?php echo get_post_meta(get_the_ID(),'consultant_qq')[0]; ?>&version=1"><img class="qq-image" src="<?php bloginfo('template_url');?>/img/qq.png" /></a></span>
							</p>
							<div class="hr"></div>
							<p><?php echo the_content();?></p>
							</div>
						</div>
					<?php 
						endwhile;
						endif;
						wp_reset_postdata();
					?>
					</div>
				</div>
				<div class="consultant">
					<h3><b>悉尼金牌顾问</b></h3>
					<div class="consultant-group row">
					<?php 
						$args = array(
							'category_name' => 'consultant-sydney',
							'order'			=> 'asc'
						);
						$the_query = new WP_Query($args);
						if($the_query->have_posts()):
						while($the_query->have_posts()): $the_query->the_post();
					?>
						<div class="col-md-12 col-lg-6">
							<div class="card fluid-container">
							<p class="card-title">
								<strong class="name"><?php echo the_title();?></strong>
								<span class="pull-right">微信 <a href="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(),"large")[0]; ?>" class="preview"><img class="weixin-qr" src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id(),"large")[0]; ?>" /></a></span>
								<span class="pull-right">QQ <a class="hidden qq_pc" href="tencent://message/?uin=<?php echo get_post_meta(get_the_ID(),'consultant_qq')[0]; ?>&Site=&Menu=yes"><img class="qq-image" src="<?php bloginfo('template_url');?>/img/qq.png" /></a><a class="qq_mobile" href="mqqwpa://im/chat?chat_type=wpa&uin=<?php echo get_post_meta(get_the_ID(),'consultant_qq')[0]; ?>&version=1"><img class="qq-image" src="<?php bloginfo('template_url');?>/img/qq.png" /></a></span>
							</p>
							<div class="hr"></div>
							<p><?php echo the_content();?></p>
							</div>
						</div>
					<?php 
						endwhile;
						endif;
						wp_reset_postdata();
					?>
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
