<?php
/*
	Template Name:QLD中学
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
		<div class="school-category row">
			<div class="container-fluid">
				<div class="school-distribution-container container-fluid">
					<div class="col-sm-4 col-xs-12 school-distribution">
						<ul>
							<li><a href="<?php bloginfo('url'); ?>/new-south-wales-schools/"><span class="text-right">新南威尔士州</span><span class="text-center">NSW</span></a></li>
							<li><a href="<?php bloginfo('url'); ?>/victoria-schools/"><span class="text-right">维多利亚州</span><span class="text-center">VIC</span></a></li>
							<li class="active"><a href="<?php bloginfo('url'); ?>/queensland-schools/"><span class="text-right">昆士兰州</span><span class="text-center">QLD</span></a></li>
							<li><a href="<?php bloginfo('url'); ?>/south-australia-schools/"><span class="text-right">南澳大利亚州</span><span class="text-center">SA</span></a></li>
							<li><a href="<?php bloginfo('url'); ?>/western-australia-schools/"><span class="text-right">西澳大利亚州</span><span class="text-center">WA</span></a></li>
							<li><a href="<?php bloginfo('url'); ?>/act-schools/"><span class="text-right">首都特区</span><span class="text-center">ACT</span></a></li>
							<li><a href="<?php bloginfo('url'); ?>/north-territory-schools/"><span class="text-right">北领地</span><span class="text-center">NT</span></a></li>
							<li><a href="<?php bloginfo('url'); ?>/tasmania-schools/"><span class="text-right">塔斯马尼亚</span><span class="text-center">TAS</span></a></li>
						</ul>
					</div>
					<div class="col-sm-8 col-xs-12 school-map">
						<p class="hidden text-center"><img src="<?php echo bloginfo('template_url'); ?>/img/nsw.png" /></p>
						<p class="hidden text-center"><img src="<?php echo bloginfo('template_url'); ?>/img/vic.png" /></p>
						<p class="text-center"><img src="<?php echo bloginfo('template_url'); ?>/img/qld.png" /></p>
						<p class="hidden text-center"><img src="<?php echo bloginfo('template_url'); ?>/img/sa.png" /></p>
						<p class="hidden text-center"><img src="<?php echo bloginfo('template_url'); ?>/img/wa.png" /></p>
						<p class="hidden text-center"><img src="<?php echo bloginfo('template_url'); ?>/img/act.png" /></p>
						<p class="hidden text-center"><img src="<?php echo bloginfo('template_url'); ?>/img/nt.png" /></p>
						<p class="hidden text-center"><img src="<?php echo bloginfo('template_url'); ?>/img/tas.png" /></p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="school-category-block main-content row">
			<div class="container-fluid school-category-header">
				<div class="school-category-title">
				<h1><?php $category = get_category_by_slug( 'qld' ); echo $category->name; ?><h1>
				</div>
				<div class="school-category-sort">
				<div class="school-sort pull-right">
				<p class="sort-order" id="fee-order-down">学费排序 <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></p>
				<p class="sort-order" id="fee-order-up" style="display:none;">学费排序 <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></p>
				</div>
				<div class="school-sort pull-right">
				<p class="sort-order" id="name-order-down">名字排序 <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></p>
				<p class="sort-order" id="name-order-up" style="display:none;">名字排序 <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></p>
				</div>
				</div>
			</div>
			<?php 
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
				if($_GET['sort'] == 'title') {
					$args = array(
					'category_name' 	=> 'qld',
					'posts_per_page' 	=> 5,
					'orderby'			=> 'title',
					'order' 			=> $_GET['order'] ? $_GET['order'] : 'desc',
					'paged'				=> $paged,
					);
				} else if($_GET['sort'] == 'fee') {
					$args = array(
					'category_name' 	=> 'qld',
					'posts_per_page' 	=> 5,
					'meta_key'			=> '高中学费',
					'orderby'			=> 'meta_value',
					'order' 			=> $_GET['order'] ? $_GET['order'] : 'desc',
					'paged'				=> $paged,
					);
				} else {
					$args = array(
					'category_name' 	=> 'qld',
					'posts_per_page' 	=> 5,
					'orderby'			=> 'date',
					'order' 			=> 'desc',
					'paged'				=> $paged,
					);
				}
				
				$the_query = new WP_Query( $args );
			?>
			<?php if ( $the_query->have_posts() ) { ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
			<div class="school-category-list row">
				<div class="container-fluid">
					<div class="school-category-thumb col-md-3 col-sm-4 col-xs-12">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="col-md-9 col-sm-8 col-xs-12">
					<div class="school-category-detail">
						<div class="school-title">
							<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?><span class="pull-right"><img src="<?php bloginfo('template_url'); ?>/img/double_arrow.png" /></span></h3></a>
						</div>
						<div class="school-meta">
						<?php the_meta(); ?>
						</div>
						<div class="school-type">
							<span class="post-meta-key">学校类型：</span>
							<?php
								$categories = get_the_category();
								if($categories) {
									foreach($categories as $category) {
										switch($category->name) {
											case '教会中学':
											?>
												<a href="<?php bloginfo('url'); ?>/missionary-school/">教会中学</a>
											<?php
												break;
											case '公立中学':
											?>
												<a href="<?php bloginfo('url'); ?>/public-school/">公立中学</a>
											<?php
												break;
											case '私立中学':
											?>
												<a href="<?php bloginfo('url'); ?>/private-school/">私立中学</a>
											<?php
												break;
											case '贵族中学':
											?>
												<a href="<?php bloginfo('url'); ?>/elite-school/">贵族中学</a>
											<?php
												break;
											case '国际中学':
											?>
												<a href="<?php bloginfo('url'); ?>/international-school/">国际中学</a>
											<?php
												break;
											case '男子中学':
											?>
												<a href="<?php bloginfo('url'); ?>/boy-school/">男子中学</a>
											<?php
												break;
											case '女子中学':
											?>
												<a href="<?php bloginfo('url'); ?>/girl-school/">女子中学</a>
											<?php
												break;
											case '混合中学':
											?>
												<a href="<?php bloginfo('url'); ?>/mixed-school/">混合中学</a>
											<?php
												break;
											case '特长中学':
											?>
												<a href="<?php bloginfo('url'); ?>/specialty-school/">特长中学</a>
											<?php
												break;
											case 'IB中学':
											?>
												<a href="<?php bloginfo('url'); ?>/ib-school/">IB中学</a>
											<?php
												break;
											case '寄宿中学':
											?>
												<a href="<?php bloginfo('url'); ?>/boarding-school/">寄宿中学</a>
											<?php
												break;
											case '新南威尔士州':
											?>
												<a href="<?php bloginfo('url'); ?>/new-south-wales-schools/">新南威尔士州</a>
											<?php
												break;
											case '维多利亚州':
											?>
												<a href="<?php bloginfo('url'); ?>/victoria-schools/">维多利亚州</a>
											<?php
												break;
											case '昆士兰州':
											?>
												<a href="<?php bloginfo('url'); ?>/queensland-schools/">昆士兰州</a>
											<?php
												break;
											case '南澳大利亚州':
											?>
												<a href="<?php bloginfo('url'); ?>/south-australia-schools/">南澳大利亚州</a>
											<?php
												break;
											case '西澳大利亚州':
											?>
												<a href="<?php bloginfo('url'); ?>/western-australia-schools/">西澳大利亚州</a>
											<?php
												break;
											case '首都特区':
											?>
												<a href="<?php bloginfo('url'); ?>/act-schools/">首都特区</a>
											<?php
												break;
											case '北领地':
											?>
												<a href="<?php bloginfo('url'); ?>/north-territory-schools/">北领地</a>
											<?php
												break;
											case '塔斯马尼亚':
											?>
												<a href="<?php bloginfo('url'); ?>/tasmania-schools/">塔斯马尼亚</a>
											<?php
												break;
											case '名校推荐':
											?>
												<a href="<?php bloginfo('url'); ?>/recommended-schools/">名校推荐</a>
											<?php
												break;
										}
									}
								}
							?>
						</div>
					</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<div class="pagination">
				<div class="pagination-list">
					<?php
					$big = 999999999; // need an unlikely integer

					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $the_query->max_num_pages
					) );
				?>
				</div>
			</div>
			<?php } else { ?>
				<?php get_404_template(); ?>
			<?php }	?>
		</div>
		
		<?php get_template_part('template-part', 'footernav'); ?>
    </div>

    <?php //get the right sidebar ?>
    <?php get_sidebar( 'right' ); ?>

</div>
</div>
<!-- end content container -->
<?php get_footer(); ?>
