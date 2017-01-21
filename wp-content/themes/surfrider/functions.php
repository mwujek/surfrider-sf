<?php
update_option( 'default_comment_status', 'closed' );
update_option( 'comment_moderation', 1 );
update_option( 'default_ping_status', 'closed' );
update_option( 'default_pingback_flag', 0 );
update_option( 'require_name_email', 1 );
update_option( 'thread_comments', 0 );
update_option( 'close_comments_for_old_posts', 1 );
update_option( 'close_comments_days_old', 1 );
update_option( 'comment_registration', 1 );
update_option( 'comment_whitelist', 1 );

register_nav_menu( 'main-menu', 'Main Menu' );
$args = array(
	'width'         => 960,
	'height'        => 150,
	'default-image' => get_template_directory_uri() . '/images/san-o.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );
add_theme_support( 'post-thumbnails' );
add_image_size( 'surf-thumb', 100, 70,true);


if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'Right Side Bar.',
    		'before_widget' => '<div class="widget">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
    	register_sidebar(array(
    		'name' => 'Topbar Widgets',
    		'id'   => 'topbar-widgets',
    		'description'   => 'Top Bar(Region/Chapter Description).',
    		'before_widget' => '<div class="widget">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h3>',
    		'after_title'   => '</h3>'
    	));
    	register_sidebar(array(
    		'name' => 'Footer Col1',
    		'id'   => 'footer-col1',
    		'description'   => 'Footer Column 1',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    	register_sidebar(array(
    		'name' => 'Footer Col2',
    		'id'   => 'footer-col2',
    		'description'   => 'Footer Column 2',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    	register_sidebar(array(
    		'name' => 'Footer Col3',
    		'id'   => 'footer-col3',
    		'description'   => 'Footer Column 3',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    	register_sidebar(array(
    		'name' => 'Footer Col4',
    		'id'   => 'footer-col4',
    		'description'   => 'Footer Column 4',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    	register_sidebar(array(
    		'name' => 'Search Col Row 1',
    		'id'   => 'search-col-row1',
    		'description'   => 'Search Box Column Row 1',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    	register_sidebar(array(
    		'name' => 'Search Col Row 2',
    		'id'   => 'search-col-row2',
    		'description'   => 'Search Box Column Row 2',
    	));
    }
/**
 * Adds Button_Widget widget.
 */
class Button_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'button_widget', // Base ID
			'Surfrider - Orange Button', // Name
			array( 'description' => 'Membership button widget (Sidebar)'),
			array() // Args
		);
	}

	/**
	 * Front-end display of widget.
	*/
	public function widget( $args, $instance ) {
		extract( $args );
		$btn_txt = $instance['btn_txt'];
		$btn_link = $instance['btn_link'];

		echo "<a href=\"$btn_link\" id=\"members\" class=\"button centered\">$btn_txt</a>";
	}

	/**
	 * Sanitize widget form values as they are saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags
		$instance['btn_txt'] = strip_tags( $new_instance['btn_txt'] );
		$instance['btn_link'] = strip_tags( $new_instance['btn_link'] );

		return $instance;
	}

	/**
	 * Back-end widget form.
	 */
	public function form( $instance ) {
		
		//Set up some default widget settings.
		$defaults = array('btn_txt' => 'Become a Member', 'btn_link' => 'http://www.surfrider.org/' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'btn_txt' ); ?>">Button Text:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'btn_txt' ); ?>" name="<?php echo $this->get_field_name( 'btn_txt' ); ?>" value="<?php echo $instance['btn_txt']; ?>" type="text"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'btn_link' ); ?>">Button Link:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'btn_link' ); ?>" name="<?php echo $this->get_field_name( 'btn_link' ); ?>" value="<?php echo $instance['btn_link']; ?>" type="text" />
		</p>
		<?php
	}

} // class Button_Widget

/**
 * Adds Description_Widget widget.
 */
class Description_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'description_widget', // Base ID
			'Surfrider - Region/Chapter Description', // Name
			array( 'description' => 'Region/Chapter Description (Topbar)'),
			array() // Args
		);
	}

	/**
	 * Front-end display of widget.
	*/
	public function widget( $args, $instance ) {
		extract( $args );
		$type = isset( $instance['type'] ) ? $instance['type'] : false;//true stands for region
		$name = $instance['name'];
		$desc = $instance['desc'];
		$no_link = isset( $instance['no_link'] ) ? $instance['no_link'] : false;//enable description link
		$desc_link = $instance['desc_link'];
		if($type)
			echo '<div class="reg-desc">
					REGION:
					<br/>';
		else
			echo '<div class="chap-desc">';
		echo "<h3>$name</h3>
				$desc ";
		if(!$no_link)
			echo "<a href=\"$desc_link\" class=\"more-link\">More Details</a>";
		echo "</div>";	
	}

	/**
	 * Sanitize widget form values as they are saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags
		$instance['type'] = $new_instance['type'];
		$instance['name'] = strip_tags( $new_instance['name'] );
		$instance['desc'] = strip_tags( $new_instance['desc'] );
		$instance['no_link'] = $new_instance['no_link'];
		$instance['desc_link'] = strip_tags( $new_instance['desc_link'] );

		return $instance;
	}

	/**
	 * Back-end widget form.
	 */
	public function form( $instance ) {
		
		//Set up some default widget settings.
		$defaults = array(
			'type' => false,
			'name' => 'Chapter Name',
			'desc' => 'Chapter Description',
			'no_link' => false,
			'desc_link'=>'http://www.surfrider.org/');
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'type' ); ?>">Region?</label>    
    		<input class="checkbox" type="checkbox" <?php if ( true == $instance['type'] ) echo 'checked="checked"'; ?> id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" />
		</p> 
		<p>
			<label for="<?php echo $this->get_field_id( 'name' ); ?>">Chapter/Region Name:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" value="<?php echo $instance['name']; ?>" type="text"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'desc' ); ?>">Descripton:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'desc' ); ?>" name="<?php echo $this->get_field_name( 'desc' ); ?>" value="<?php echo $instance['desc']; ?>" type="text"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'desc_link' ); ?>">Link:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'desc_link' ); ?>" name="<?php echo $this->get_field_name( 'desc_link' ); ?>" value="<?php echo $instance['desc_link']; ?>" type="text"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'no_link' ); ?>">Remove 'More Details' Link?</label>
			<input class="checkbox" type="checkbox" <?php if ( true == $instance['no_link'] ) echo 'checked="checked"'; ?> id="<?php echo $this->get_field_id( 'no_link' ); ?>" name="<?php echo $this->get_field_name( 'no_link' ); ?>" />
		</p>
		<?php
	}

} // class Description_Widget
/**
 * Adds Footer_Links_Widget widget.
 */
class Footer_Links_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'footer_links_widget', // Base ID
			'Surfrider - Footer Links', // Name
			array( 'description' => 'Adds Footer Title/Link to each footer column.'),
			array() // Args
		);
	}

	/**
	 * Front-end display of widget.
	*/
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$name = $instance['name'];
		$link = $instance['link'];

		if(!empty($title))
			echo $before_title.$title.$after_title;
		if(!empty($name))
		{
			echo "<div class=\"footer-link\"><a href=\"$link\">$name</a></div>";
		}
	}

	/**
	 * Sanitize widget form values as they are saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['name'] = strip_tags( $new_instance['name'] );
		$instance['link'] = strip_tags( $new_instance['link'] );

		return $instance;
	}

	/**
	 * Back-end widget form.
	 */
	public function form( $instance ) {
		
		//Set up some default widget settings.
		$defaults = array();
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title(Optional):</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'name' ); ?>">Link Name:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" value="<?php echo $instance['name']; ?>" type="text"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'link' ); ?>">Link:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo $instance['link']; ?>" type="text"/>
		</p>
		<?php
	}

} // class Footer_Links_Widget

/**
 * Adds Footer_Connect_Widget widget.
 */
class Footer_Connect_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'footer_connect_widget', // Base ID
			'Surfrider - Footer Connect', // Name
			array( 'description' => 'Manage Connect Widget icons and links.'),
			array() // Args
		);
	}

	/**
	 * Front-end display of widget.
	*/
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$fb = isset( $instance['fb'] ) ? $instance['fb'] : false;
		$fb_link = $instance['fb_link'];
		$tw = isset( $instance['tw'] ) ? $instance['tw'] : false;
		$tw_link = $instance['tw_link'];
		$rss = isset( $instance['rss'] ) ? $instance['rss'] : false;
		$rss_link = $instance['rss_link'];
		$yt = isset( $instance['yt'] ) ? $instance['yt'] : false;
		$yt_link = $instance['yt_link'];

		if(!empty($title))
			echo $before_title.$title.$after_title;
		echo '<ul class="connect">';
		if($fb)
			echo "<li class=\"facebook-bt\"><a href=\"$fb_link\"><span class=\"icon\"></span>Facebook</a></li>";
		if($tw)
			echo "<li class=\"twitter-bt\"><a href=\"$tw_link\"><span class=\"icon\"></span>Twitter</a></li>";
		if($rss)
			echo "<li class=\"rss-bt\"><a href=\"$rss_link\"><span class=\"icon\"></span>RSS</a></li>";
		if($yt)
			echo "<li class=\"youtube-bt\"><a href=\"$yt_link\"><span class=\"icon\"></span>YouTube</a></li>";
		echo '</ul>';
	}

	/**
	 * Sanitize widget form values as they are saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['fb'] = strip_tags( $new_instance['fb'] );
		$instance['fb_link'] = strip_tags( $new_instance['fb_link'] );
		$instance['tw'] = strip_tags( $new_instance['tw'] );
		$instance['tw_link'] = strip_tags( $new_instance['tw_link'] );
		$instance['rss'] = strip_tags( $new_instance['rss'] );
		$instance['rss_link'] = strip_tags( $new_instance['rss_link'] );
		$instance['yt'] = strip_tags( $new_instance['yt'] );
		$instance['yt_link'] = strip_tags( $new_instance['yt_link'] );

		return $instance;
	}

	/**
	 * Back-end widget form.
	 */
	public function form( $instance ) {
		
		//Set up some default widget settings.
		$defaults = array('title' => 'Connect With Us',
			'fb' => true, 'fb_link' => 'http://www.facebook.com/surfrider',
			'tw' => true, 'tw_link' => 'http://twitter.com/surfrider',
			'rss' => true, 'rss_link' => 'http://www.surfrider.org/jims-blog/rss',
			'yt' => true, 'yt_link' => 'http://www.youtube.com/surfriderfoundation');
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title(Optional):</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text"/>
		</p>
		<p>
    		<input class="checkbox" type="checkbox" <?php if ( true == $instance['fb'] ) echo 'checked="checked"'; ?> id="<?php echo $this->get_field_id( 'fb' ); ?>" name="<?php echo $this->get_field_name( 'fb' ); ?>" />
    		<label for="<?php echo $this->get_field_id( 'fb' ); ?>">Facebook:</label>
    		<input class="widefat" id="<?php echo $this->get_field_id( 'fb_link' ); ?>" name="<?php echo $this->get_field_name( 'fb_link' ); ?>" value="<?php echo $instance['fb_link']; ?>" type="text"/>
		</p>
		<p>
    		<input class="checkbox" type="checkbox" <?php if ( true == $instance['tw'] ) echo 'checked="checked"'; ?> id="<?php echo $this->get_field_id( 'tw' ); ?>" name="<?php echo $this->get_field_name( 'tw' ); ?>" />
    		<label for="<?php echo $this->get_field_id( 'tw' ); ?>">Twitter:</label>
    		<input class="widefat" id="<?php echo $this->get_field_id( 'tw_link' ); ?>" name="<?php echo $this->get_field_name( 'tw_link' ); ?>" value="<?php echo $instance['tw_link']; ?>" type="text"/>
		</p>
		<p>
    		<input class="checkbox" type="checkbox" <?php if ( true == $instance['rss'] ) echo 'checked="checked"'; ?> id="<?php echo $this->get_field_id( 'rss' ); ?>" name="<?php echo $this->get_field_name( 'rss' ); ?>" />
    		<label for="<?php echo $this->get_field_id( 'rss' ); ?>">RSS:</label>
    		<input class="widefat" id="<?php echo $this->get_field_id( 'rss_link' ); ?>" name="<?php echo $this->get_field_name( 'rss_link' ); ?>" value="<?php echo $instance['rss_link']; ?>" type="text"/>
		</p>
		<p>
    		<input class="checkbox" type="checkbox" <?php if ( true == $instance['yt'] ) echo 'checked="checked"'; ?> id="<?php echo $this->get_field_id( 'yt' ); ?>" name="<?php echo $this->get_field_name( 'yt' ); ?>" />
    		<label for="<?php echo $this->get_field_id( 'yt' ); ?>">YouTube:</label>
    		<input class="widefat" id="<?php echo $this->get_field_id( 'yt_link' ); ?>" name="<?php echo $this->get_field_name( 'yt_link' ); ?>" value="<?php echo $instance['yt_link']; ?>" type="text"/>
		</p>
		<?php
	}

} // class Footer_Connect_Widget

/**
 * Adds Search_Widget widget.
 */
class Search_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'search_widget', // Base ID
			'Surfrider - Search Box', // Name
			array( 'description' => 'Adds deafult search box.'),
			array() // Args
		);
	}

	/**
	 * Front-end display of widget.
	*/
	public function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );

		if(!empty($title))
			echo $before_title.$title.$after_title;
		echo '<form role="search" method="get" id="searchbox" action="'.home_url( '/' ).'">
				<input type="text" value="" name="s" id="quick-term" size="28" />
				<input id="quick-search-bt" type="submit" class="submit" value="GO" />
			</form>';
	}

	/**
	 * Sanitize widget form values as they are saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags
		$instance['title'] = strip_tags( $new_instance['title'] );

		return $instance;
	}

	/**
	 * Back-end widget form.
	 */
	public function form( $instance ) {
		
		//Set up some default widget settings.
		$defaults = array('title' => 'Search the Site');
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title(Optional):</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" type="text"/>
		</p>
		<?php
	}

} // class Search_Widget

/**
 * Adds Search_Links_Widget widget.
 */
class Search_Links_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'search_links_widget', // Base ID
			'Surfrider - Search Links', // Name
			array( 'description' => 'Adds links after Search Box.'),
			array() // Args
		);
	}

	/**
	 * Front-end display of widget.
	*/
	public function widget( $args, $instance ) {
		extract( $args );
		$type = isset( $instance['type'] ) ? $instance['type'] : false;//true stands for region
		$name = $instance['name'];
		$link = $instance['link'];

		if(!empty($name))
		{
			echo "<a href=\"$link\">$name</a> ";
			if(!$type) echo "|";
			echo " ";
		}
	}

	/**
	 * Sanitize widget form values as they are saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//Strip tags
		$instance['type'] = $new_instance['type'];
		$instance['name'] = strip_tags( $new_instance['name'] );
		$instance['link'] = strip_tags( $new_instance['link'] );

		return $instance;
	}

	/**
	 * Back-end widget form.
	 */
	public function form( $instance ) {
		
		//Set up some default widget settings.
		$defaults = array('type' => false);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'type' ); ?>">Last Item? (Removes the Bar)</label>    
    		<input class="checkbox" type="checkbox" <?php if ( true == $instance['type'] ) echo 'checked="checked"'; ?> id="<?php echo $this->get_field_id( 'type' ); ?>" name="<?php echo $this->get_field_name( 'type' ); ?>" />
		</p> 
		<p>
			<label for="<?php echo $this->get_field_id( 'name' ); ?>">Link Name:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'name' ); ?>" name="<?php echo $this->get_field_name( 'name' ); ?>" value="<?php echo $instance['name']; ?>" type="text"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'link' ); ?>">Link:</label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" value="<?php echo $instance['link']; ?>" type="text"/>
		</p>
		<?php
	}

} // class Footer_Links_Widget

// registering widgets
add_action( 'widgets_init', create_function( '', 'register_widget( "Button_Widget" );' ) );
add_action( 'widgets_init', create_function( '', 'register_widget( "Description_Widget" );' ) );
add_action( 'widgets_init', create_function( '', 'register_widget( "Footer_Links_Widget" );' ) );
add_action( 'widgets_init', create_function( '', 'register_widget( "Footer_Connect_Widget" );' ) );
add_action( 'widgets_init', create_function( '', 'register_widget( "Search_Widget" );' ) );
add_action( 'widgets_init', create_function( '', 'register_widget( "Search_Links_Widget" );' ) );

//Initialize the update checker.
require 'theme-updates/theme-update-checker.php';
$example_update_checker = new ThemeUpdateChecker(
    'surfrider',
    'http://www.surfrider.org/wp_template/repo/info.json'
);
?>