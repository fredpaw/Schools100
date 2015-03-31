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
		
		<div class="container-fluid main-content">
            <?php // theloop
                if ( have_posts() ) : while ( have_posts() ) : the_post();

                    // single post
                    if ( is_single() ) : ?>

                        <div <?php post_class(); ?>>

                            <h2 class="page-header"><?php the_title() ;?></h2>
							<p class="text-right">发布时间：<?php the_date(); ?></p>
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                            <?php comments_template(); ?>

                        </div>
                     <?php  endif; ?>

                <?php endwhile; ?>
                <?php posts_nav_link(); ?>
                <?php else: ?>

                    <?php get_404_template(); ?>

            <?php endif; ?>
		</div>
		
		<?php get_template_part('template-part', 'footernav'); ?>
    </div>

    <?php //get the right sidebar ?>
    <?php get_sidebar( 'right' ); ?>

</div>
</div>
<!-- end content container -->

<?php get_footer(); ?>