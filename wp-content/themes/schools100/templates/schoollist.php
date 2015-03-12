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
					<div class="col-xs-6 col-sm-3"><a href="<?php bloginfo('url'); ?>/aeas-test/">AEAS测试</a></div>
					<div class="col-xs-6 col-sm-3"><a href="#">联系我们</a></div>
				</div>
			</div>
		</div>
		<div class="school-category row">
			<div class="container-fluid">
				<div class="school-category-container container-fluid">
					<div class="col-sm-3 col-xs-12 school-category-type">
						<ul>
							<li class="active"><a href="#">教会中学</a></li>
							<li><a href="#">公立中学</a></li>
							<li><a href="#">私立中学</a></li>
							<li><a href="#">贵族中学</a></li>
							<li><a href="#">国际中学</a></li>
							<li><a href="#">男子中学</a></li>
							<li><a href="#">女子中学</a></li>
							<li><a href="#">混合中学</a></li>
							<li><a href="#">特长中学</a></li>
							<li><a href="#">IB中学</a></li>
							<li><a href="#">寄宿中学</a></li>
							<li><a class="<?php bloginfo('url');?>/university-foundation/‎" href="#">大学预科</a></li>
						</ul>
					</div>
					<div class="col-sm-9 col-xs-12 school-category-intro">
					<?php
						$args = array(
						'category_name' 	=> 'school-type-intro',
						);
						
						$the_query = new WP_Query( $args );
						
						if ( $the_query->have_posts() ) {
							$i=1;
							while ( $the_query->have_posts() ) : $the_query->the_post();
					?>
						<div id="school-brief-<?php echo $i; ?>" class="school-intro-block">
							<div class="school-intro">
								<div class="school-intro-title"><a href="<?php the_permalink(); ?>"><h3 class="text-center"><?php the_title();?></h3></a></div>
								<div class="school-intro-content"><?php the_excerpt(); ?></div>
							</div>
						</div>
					<?php
						$i++;
						endwhile;
						}
					?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="school-category-block main-content row">
			<div class="container-fluid school-category-header">
				<div class="school-category-title">
				<h1><?php $category = get_category_by_slug( $_GET['cat'] ); echo $category->name; ?><h1>
				</div>
				<div class="school-category-sort">
				<div class="school-sort pull-right">
				<p class="sort-order" id="fee-order-down">学费排序 <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></p>
				<p class="sort-order" id="fee-order-up">学费排序 <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></p>
				</div>
				<div class="school-sort pull-right">
				<p class="sort-order" id="name-order-down">名字排序 <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></p>
				<p class="sort-order" id="name-order-up">名字排序 <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></p>
				</div>
				</div>
			</div>
			<?php 
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
				if($_GET['sort'] == 'title') {
					$args = array(
					'category_name' 	=> $_GET['cat'] ? $_GET['cat'] : 'missionary-school',
					'posts_per_page' 	=> 5,
					'orderby'			=> 'title',
					'order' 			=> $_GET['order'] ? $_GET['order'] : 'desc',
					'paged'				=> $paged,
					);
				} else if($_GET['sort'] == 'price') {
					$args = array(
					'category_name' 	=> $_GET['cat'] ? $_GET['cat'] : 'missionary-school',
					'posts_per_page' 	=> 5,
					'meta_key'			=> '高中学费',
					'orderby'			=> 'meta_value',
					'order' 			=> $_GET['order'] ? $_GET['order'] : 'desc',
					'paged'				=> $paged,
					);
				} else {
					$args = array(
					'category_name' 	=> $_GET['cat'] ? $_GET['cat'] : 'missionary-school',
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
							<span class="post-meta-key">学校类型：</span><?php the_category(); ?>
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
