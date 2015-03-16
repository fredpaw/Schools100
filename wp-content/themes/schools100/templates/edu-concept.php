<?php
/*
	Template Name: 教育理念
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
			<h1 class="text-center" style="padding-top:20px;color:#c74a24;font-weight:bold;">教育理念 百花齐放</h1>
			<?php 
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
				$args = array(
					'category_name' => 'education-concept',
					'posts_per_page' 	=> 10,
					'orderby'			=> 'date',
					'order' 			=> 'desc',
					'paged'				=> $paged,
				);
				
				$the_query = new WP_Query( $args );
			?>
			<?php if ( $the_query->have_posts() ) { ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
				<div class="search-list container-fluid">
				   <div <?php post_class(); ?>>

						<h3 class="page-header">
							<a href="<?php the_permalink(); ?>" target="_blank" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'devdmbootstrap3' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h3>

						<?php if ( has_post_thumbnail() ) : ?>
						   <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<?php endif; ?>
						<?php the_excerpt(); ?>
						<?php wp_link_pages(); ?>
						<?php  if ( comments_open() ) : ?>
							   <div class="clear"></div>
							  <p class="text-right">
								  <a class="btn btn-success" href="<?php the_permalink(); ?>#comments"><?php comments_number(__('Leave a Comment','devdmbootstrap3'), __('One Comment','devdmbootstrap3'), '%' . __(' Comments','devdmbootstrap3') );?> <span class="glyphicon glyphicon-comment"></span></a>
							  </p>
						<?php endif; ?>
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
