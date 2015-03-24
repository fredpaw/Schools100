<?php
////////////////////////////////////////////////////////////////////
// Theme Information
////////////////////////////////////////////////////////////////////

    $themename = "DevDmBootstrap3";
    $developer_uri = "http://devdm.com";
    $shortname = "dm";
    $version = '1.50';
    load_theme_textdomain( 'devdmbootstrap3', get_template_directory() . '/languages' );

////////////////////////////////////////////////////////////////////
// include Theme-options.php for Admin Theme settings
////////////////////////////////////////////////////////////////////

   include 'theme-options.php';


////////////////////////////////////////////////////////////////////
// Enqueue Styles (normal style.css and bootstrap.css)
////////////////////////////////////////////////////////////////////
    function devdmbootstrap3_theme_stylesheets()
    {
        wp_register_style('bootstrap.css', get_template_directory_uri() . '/css/bootstrap.css', array(), '1', 'all' );
        wp_enqueue_style( 'bootstrap.css');
        wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), '1', 'all' );
    }
    add_action('wp_enqueue_scripts', 'devdmbootstrap3_theme_stylesheets');

//Editor Style
add_editor_style('css/editor-style.css');

////////////////////////////////////////////////////////////////////
// Register Bootstrap JS with jquery
////////////////////////////////////////////////////////////////////
    function devdmbootstrap3_theme_js()
    {
        global $version;
        wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/bootstrap.js',array( 'jquery' ),$version,true );
    }
    add_action('wp_enqueue_scripts', 'devdmbootstrap3_theme_js');

////////////////////////////////////////////////////////////////////
// Add Title Parameters
////////////////////////////////////////////////////////////////////

if(!function_exists('devdmbootstrap3_wp_title')) {

    function devdmbootstrap3_wp_title( $title, $sep ) { // Taken from Twenty Twelve 1.0
        global $paged, $page;

        if ( is_feed() )
            return $title;

        // Add the site name.
        $title .= get_bloginfo( 'name' );

        // Add the site description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            $title = "$title $sep $site_description";

        // Add a page number if necessary.
        if ( $paged >= 2 || $page >= 2 )
            $title = "$title $sep " . sprintf( __( 'Page %s', 'devdmbootstrap3' ), max( $paged, $page ) );

        return $title;
    }
    add_filter( 'wp_title', 'devdmbootstrap3_wp_title', 10, 2 );

}


////////////////////////////////////////////////////////////////////
// Register Custom Navigation Walker include custom menu widget to use walkerclass
////////////////////////////////////////////////////////////////////

    require_once('lib/wp_bootstrap_navwalker.php');
    require_once('lib/bootstrap-custom-menu-widget.php');

////////////////////////////////////////////////////////////////////
// Register Menus
////////////////////////////////////////////////////////////////////

        register_nav_menus(
            array(
                'main_menu' => 'Main Menu',
                'footer_menu' => 'Footer Menu'
            )
        );

////////////////////////////////////////////////////////////////////
// Register the Sidebar(s)
////////////////////////////////////////////////////////////////////

        register_sidebar(
            array(
            'name' => 'Right Sidebar',
            'id' => 'right-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

        register_sidebar(
            array(
            'name' => 'Left Sidebar',
            'id' => 'left-sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));

////////////////////////////////////////////////////////////////////
// Register hook and action to set Main content area col-md- width based on sidebar declarations
////////////////////////////////////////////////////////////////////

add_action( 'devdmbootstrap3_main_content_width_hook', 'devdmbootstrap3_main_content_width_columns');

function devdmbootstrap3_main_content_width_columns () {

    global $dm_settings;

    $columns = '12';

    if ($dm_settings['right_sidebar'] != 0) {
        $columns = $columns - $dm_settings['right_sidebar_width'];
    }

    echo $columns;
}

function devdmbootstrap3_main_content_width() {
    do_action('devdmbootstrap3_main_content_width_hook');
}

////////////////////////////////////////////////////////////////////
// Add support for a featured image and the size
////////////////////////////////////////////////////////////////////

    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size(300,300, true);

////////////////////////////////////////////////////////////////////
// Adds RSS feed links to for posts and comments.
////////////////////////////////////////////////////////////////////

    add_theme_support( 'automatic-feed-links' );


////////////////////////////////////////////////////////////////////
// Set Content Width
////////////////////////////////////////////////////////////////////

if ( ! isset( $content_width ) ) $content_width = 800;


////////////////////////////////////////////////////////////////////
// Get site url for links
////////////////////////////////////////////////////////////////////
add_shortcode('theme_uri', 'wpse_theme_uri_shortcode' );

function wpse_theme_uri_shortcode( $attrs = array (), $content = '' )
{
    $theme_uri = is_child_theme()
        ? get_stylesheet_directory_uri()
        : get_template_directory_uri();

    return trailingslashit( $theme_uri );
}

add_filter('widget_text', 'do_shortcode');

////////////////////////////////////////////////////////////////////
// Alter excerpt length
////////////////////////////////////////////////////////////////////
function new_excerpt_length($length) {
return 250;
}
add_filter('excerpt_length', 'new_excerpt_length');

////////////////////////////////////////////////////////////////////
// Changing excerpt more
////////////////////////////////////////////////////////////////////
function new_excerpt_more($more) {
return ' ...';
}
add_filter('excerpt_more', 'new_excerpt_more');

////////////////////////////////////////////////////////////////////
// Add sorting.js to header
////////////////////////////////////////////////////////////////////
add_action( 'wp_enqueue_scripts', 'add_sorting' );
function add_sorting() {
    wp_enqueue_script(
        'sorting', // name your script so that you can attach other scripts and de-register, etc.
        get_stylesheet_directory_uri() . '/js/sorting.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}

////////////////////////////////////////////////////////////////////
// Add 53kefu.js to header
////////////////////////////////////////////////////////////////////
add_action( 'wp_enqueue_scripts', 'add_kefu' );
function add_kefu() {
    wp_enqueue_script(
        'kefu', // name your script so that you can attach other scripts and de-register, etc.
        'http://tb.53kf.com/kf.php?arg=10061337&style=1', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}

////////////////////////////////////////////////////////////////////
// Add qq kefu.js and kefu.css to header
////////////////////////////////////////////////////////////////////
add_action( 'wp_enqueue_scripts', 'add_qq' );
function add_qq() {
    wp_enqueue_script(
        'qqjs', // name your script so that you can attach other scripts and de-register, etc.
        get_stylesheet_directory_uri() . '/js/kefu.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
	
	wp_enqueue_style(
		'qqcss',
		get_stylesheet_directory_uri() . '/css/kefu.css'
	);
}

////////////////////////////////////////////////////////////////////
// Add dist.js to header
////////////////////////////////////////////////////////////////////
add_action( 'wp_enqueue_scripts', 'add_dist' );
function add_dist() {
    wp_enqueue_script(
        'distribution', // name your script so that you can attach other scripts and de-register, etc.
        get_stylesheet_directory_uri() . '/js/dist.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}

////////////////////////////////////////////////////////////////////
// Add youku.js to header
////////////////////////////////////////////////////////////////////
add_action( 'wp_enqueue_scripts', 'add_youku_js' );
function add_youku_js() {
	if(is_home() || is_front_page()){
		wp_enqueue_script(
			'youku', // name your script so that you can attach other scripts and de-register, etc.
			get_stylesheet_directory_uri() . '/js/youku.js', // this is the location of your script file
			array('jquery') // this array lists the scripts upon which your script depends
		);
	}
}

////////////////////////////////////////////////////////////////////
// Add recomm.js to header
////////////////////////////////////////////////////////////////////
add_action( 'wp_enqueue_scripts','remove_dist');
function remove_dist() {
	if(is_page('名校推荐')) {
		wp_dequeue_script('distribution');
	}
}
add_action( 'wp_enqueue_scripts', 'add_recomm' );
function add_recomm() {
	if (is_page('名校推荐')) {
		wp_enqueue_script(
			'recommended', // name your script so that you can attach other scripts and de-register, etc.
			get_stylesheet_directory_uri() . '/js/recomm.js', // this is the location of your script file
			array('jquery') // this array lists the scripts upon which your script depends
		);
	}
}

////////////////////////////////////////////////////////////////////
// Add post date scroll js to the page
////////////////////////////////////////////////////////////////////
add_action( 'wp_enqueue_scripts','add_date_scroll');
function add_date_scroll() {
	if(is_page('最新消息')) {
		wp_enqueue_script(
			'date_scroll',
			get_stylesheet_directory_uri() . '/js/scroll.js',
			array('jquery')
		);
	}
	if(is_page('教育理念 百花齐放')) {
		wp_enqueue_script(
			'date_scroll',
			get_stylesheet_directory_uri() . '/js/scroll.js',
			array('jquery')
		);
	}
}

////////////////////////////////////////////////////////////////////
// Add scroll style for the home page
////////////////////////////////////////////////////////////////////
/*add_action( 'wp_enqueue_scripts','add_scroll_style');
function add_scroll_style() {
	if(is_home() || is_front_page()) {
		wp_enqueue_script(
			'jscroll', // name your script so that you can attach other scripts and de-register, etc.
			get_stylesheet_directory_uri() . '/js/jquery.jscrollpane.min.js', // this is the location of your script file
			array('jquery') // this array lists the scripts upon which your script depends
		);
		
		wp_enqueue_script(
			'jwheel', // name your script so that you can attach other scripts and de-register, etc.
			get_stylesheet_directory_uri() . '/js/jquery.mousewheel.js', // this is the location of your script file
			array('jquery') // this array lists the scripts upon which your script depends
		);
		
		wp_enqueue_style(
			'jscrollcss',
			get_stylesheet_directory_uri() . '/css/jquery.jscrollpane.css'
		);
	}
}*/

////////////////////////////////////////////////////////////////////
// Count post by month for specific post type
////////////////////////////////////////////////////////////////////
function count_post_by_date($post_type_name) {
	$args = array(
		'post_type' => array('news'),
		'nopaging'	=> true,
	);
	
	$the_query = new WP_Query($args);
	
	if($the_query->have_posts()) {
		$newest_year = date('Y',strtotime($the_query->posts[0]->post_date));
		$newest_month = date('m',strtotime($the_query->posts[0]->post_date));
		$oldest_year = date('Y',strtotime($the_query->posts[$the_query->found_posts - 1]->post_date));
		$oldest_month = date('m',strtotime($the_query->posts[$the_query->found_posts - 1]->post_date));
		for( $i = $newest_year; $i >= $oldest_year; $i--) {
			if ($i == $oldest_year && $i != $newest_year) {
				for($j = 12; $j >= $oldest_month; $j--) {
					?>
					<div class="col-md-2 col-sm-2 col-xs-3 text-center post_type_date hidden"><a href="<?php the_permalink(); ?>?year=<?php echo $i; ?>&month=<?php echo $j; ?>"><?php echo $i; ?>年 <?php echo $j; ?>月</a></div>
					<?php
				}
			} else if ($i == $newest_year && $i != $oldest_year) {
				for($j = $newest_month;$j > 0; $j--) {
					?>
					<div class="col-md-2 col-sm-2 col-xs-3 text-center post_type_date hidden"><a href="<?php the_permalink(); ?>?year=<?php echo $i; ?>&month=<?php echo $j; ?>"><?php echo $i; ?>年 <?php echo $j; ?>月</a></div>
					<?php
				}
			} else if ($i == $newest_year && $i == $oldest_year) {
				for($j = $newest_month;$j >= $oldest_month; $j--) {
					?>
					<div class="col-md-2 col-sm-2 col-xs-3 text-center post_type_date hidden"><a href="<?php the_permalink(); ?>?year=<?php echo $i; ?>&month=<?php echo $j; ?>"><?php echo $i; ?>年 <?php echo $j; ?>月</a></div>
					<?php
				}
			} else {
				for($j = 12; $j > 0; $j--) {
					?>
					<div class="col-md-2 col-sm-2 col-xs-3 text-center post_type_date hidden"><a href="<?php the_permalink(); ?>?year=<?php echo $i; ?>&month=<?php echo $j; ?>"><?php echo $i; ?>年 <?php echo $j; ?>月</a></div>
					<?php
				}
			}
		}
	}
}

////////////////////////////////////////////////////////////////////
// Get content from Youku API
////////////////////////////////////////////////////////////////////
function get_youku_content() {
	$url = "https://openapi.youku.com/v2/playlists/videos.json?client_id=1715a72477d73c54&playlist_id=23460959";
	$json = file_get_contents($url);
	$data = json_decode($json);
	if (isset($data)) {
		$total = $data->total;
		$videos = $data->videos;
		?>
		<div class="youku-videos col-sm-8 col-xs-12" id="youku-homepage" name="youku-videos">
			<iframe name="youku-videos" height="300" width="100%" src="http://player.youku.com/embed/<?php echo $videos[$total-1]->id; ?>" rel="nofollow" frameborder=0 allowfullscreen></iframe>
		</div>
		<div class="col-sm-4 col-xs-12 youku-list">
			<div class="col-xs-1 hidden-sm hidden-md hidden-lg text-center" style="margin:0px;padding:0px;"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></div>
			<?php
			$j = 0;
			for ($i = $total - 1; $i >= 0 ; $i--) {
				$j++;
				?>
				<div class="col-xs-10 col-sm-12 youku-link hidden-xs">
						<a href="http://player.youku.com/embed/<?php echo $videos[$i]->id; ?>" target="youku-videos" rel="nofollow"><span><?php echo $j;?></span> <span><?php echo $videos[$i]->title; ?></span></a>
				</div>
				<?php
			} ?>
			<div class="col-xs-1 hidden-sm hidden-md hidden-lg text-center" style="margin:0px;padding:0px;"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></div>
		</div>
		<?php
	} else {
		
	}
}


////////////////////////////////////////////////////////////////////
// Add instruction page to admin
////////////////////////////////////////////////////////////////////
	require_once('instruction.php');
?>