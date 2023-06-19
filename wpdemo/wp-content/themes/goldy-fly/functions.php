<?php
/**
 * goldy-fly functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package goldy-fly
 */

// include_once( 'inc/kirki/kirki.php' );

if ( ! defined( '_GOLDY_FLY_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_GOLDY_FLY_VERSION', '1.0.0' );
}

/**
 * Customizer additions.
 */

require get_stylesheet_directory() . '/inc/goldy-about.php';

function goldy_fly_customizer_css() {

    wp_enqueue_style( 'goldy-fly-customize-controls-style', get_stylesheet_directory_uri() . '/assets/css/goldy-fly-customizer-admin.css' );
}
add_action( 'admin_enqueue_scripts', 'goldy_fly_customizer_css',0 );

add_action("init","goldy_fly_theme_limit_set",11);
function goldy_fly_theme_limit_set(){
	global $goldy_fly_themetype, $goldy_mex_themetype;

	remove_action( 'goldy_our_portfolio_loop', 'goldy_mex_our_portfolio_loop',5 );
	remove_action( 'goldy_featured_section_loop', 'goldy_mex_featured_section_loop',5 );

	$goldy_fly_themetype['themtypeis']='normal';
	if (is_plugin_active('slivery-extender/slivery-extender.php') ) {
		$goldy_fly_themetype['pluginactive']="yes";
	}else{
		$goldy_fly_themetype['pluginactive']="no";
	}

	$goldy_fly_themetype['recommended_plugins_name'] = 'goldy_fly';
	$goldy_fly_themetype['goldy_documentation_Upsell_Section']= "https://www.inverstheme.com/goldy-fly-documentation/";
	$goldy_fly_themetype['pro_section_custom_control']= "https://www.inverstheme.com/theme/goldy-fly-pro/";
	
	$goldy_fly_themetype['header_top_bar_bg_color']= "#ed8a63";
	$goldy_fly_themetype['header_text_color']= "#ffffff";
	$goldy_fly_themetype['header_bg_color']= "#18191b";

	$goldy_fly_themetype['mob_nav_menu_activ_color']= "#cb9b31";

	$goldy_fly_themetype['_sidebar_heading_bg_color']= "#202020";
	$goldy_fly_themetype['_sidebar_heading_text_color']= "#ffffff";
	$goldy_fly_themetype['mob_sub_menu_bg_color']= "#b57258";
	
	$goldy_fly_themetype['link_color']= "#ffffff";
	$goldy_fly_themetype['link_hover_color']= "#ed8a63";
	$goldy_fly_themetype['_menu_active_color']= "#ed8a63";

	$goldy_fly_themetype['silvery_social_icon_color']= "#214462";

	$goldy_fly_themetype['silvery_social_icon_bg_color']= "#ffffff";
	$goldy_fly_themetype['silvery_social_icon_hover_color']= "#ed8a63";
	$goldy_fly_themetype['silvery_social_icon_hover_bg_color']= "#111";
	$goldy_fly_themetype['button_bg_color']= "#ed8a63";
	$goldy_fly_themetype['_button_bg_hover_color']= "rgba(6, 62, 49, 0.5)";
	$goldy_fly_themetype['_button_texthover_color']= "#ffffff";
	$goldy_fly_themetype['_button_border_radius']= "5px";
	$goldy_fly_themetype['_button_border_color']= "#ed8a63";
	$goldy_fly_themetype['_scroll_button_bg_color']= "#ed8a63";

	$goldy_fly_themetype['silvery_featured_slider_arrow_bg_color']= "#273641";

	$goldy_fly_themetype['featured_section_contain_bg_color']= "#fde3be";
	$goldy_fly_themetype['featured_section_bg_hover_color']= "#ed8a63 ";
	$goldy_fly_themetype['featured_section_bg_hover_color_element']= ".section-featured-wrep:hover";
	$goldy_fly_themetype['featured_section_icon_color']= "#ed8a63";
	$goldy_fly_themetype['featured_section_icon_bg_color']= "#fcf5f4";
	$goldy_fly_themetype['featured_section_border_color']= "#301007";
	$goldy_fly_themetype['featured_section_icon_size']= "60px";

	$goldy_fly_themetype['our_portfolio_bg_color']= "#f9f9f9";

	$goldy_fly_themetype['our_portfolio_icon_color']= "#ed8a63";
	$goldy_fly_themetype['our_portfolio_border_color']= "#ed8a63";
	$goldy_fly_themetype['our_portfolio_border_hover_color']= "#fd6047";

	$goldy_fly_themetype['our_portfolio_container_text_color']= "#000000";

	$goldy_fly_themetype['our_team_container_text_hover_color']= "#3686ad";
	$goldy_fly_themetype['our_team_link_color']= "#0a62b2";
	$goldy_fly_themetype['our_team_link_hover_color']= "#ed8a63";
	$goldy_fly_themetype['our_testimonial_quote_hover_color']= "#ed8a63";
	$goldy_fly_themetype['our_testimonial_img_hover_border_color']= "#ffffff";
	$goldy_fly_themetype['our_testimonial_img_hover_border_color_element']= ".image_testimonials img:hover";
	$goldy_fly_themetype['our_testimonial_contain_bg_color']= "#f6f6f6";
	$goldy_fly_themetype['our_testimonial_contain_description_bg_color']= "#e9e9e9";
	$goldy_fly_themetype['our_testimonial_headline_text_color']= "#ed8a63";
	$goldy_fly_themetype['our_testimonial_arrow_bg_color']= "#273641";

	$goldy_fly_themetype['our_services_bg_color']= "#ffffff";

	$goldy_fly_themetype['our_services_first_widget_bg_color']= "#658b90";
	$goldy_fly_themetype['our_services_first_widget_text_color']= "#ffffff";
	$goldy_fly_themetype['our_services_second_widget_bg_color']= "#ba8672";
	$goldy_fly_themetype['our_services_second_widget_text_color']= "#ffffff";
	$goldy_fly_themetype['our_services_third_widget_bg_color']= "#d292b1";
	$goldy_fly_themetype['our_services_third_widget_text_color']= "#ffffff";
	$goldy_fly_themetype['_footer_bg_color']= "#202020";
	$goldy_fly_themetype['_footer_text_color']= "#7c99ba";
	$goldy_fly_themetype['footer_link_color']= "#c1c5ca";
	$goldy_fly_themetype['_footer_link_hover_color']= "#ed8a63";
	$goldy_fly_themetype['global_ordering_default'] = array(
		'goldy_mex_featuredimage_slider',
		'goldy_mex_our_portfolio_section',
		'goldy_mex_about_section',
		'goldy_mex_featured_section',
		'goldy_mex_appointment_section',
		'goldy_mex_our_team_section',
		'goldy_mex_our_testimonial_section',
		'goldy_mex_our_sponsors_section',
		'goldy_mex_services_section',
	);
	$goldy_mex_themetype = $goldy_fly_themetype;
}

/* enqueue script for parent theme stylesheeet */        
function goldy_fly_childtheme_parent_styles() {
 
 // enqueue style
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'goldy-fly' ) );
}
add_action( 'wp_enqueue_scripts', 'goldy_fly_childtheme_parent_styles');


/**
 * Callback sections.
 */


add_action('goldy_our_portfolio_loop','goldy_fly_our_portfolio_loop',5);
function goldy_fly_our_portfolio_loop($info_item){
?>
<div class="protfolio_img_main">
	<div class="protfolio_images">
		<?php if(!empty( $info_item['image'])){ ?>
			<img src="<?php echo esc_url($info_item['image']); ?>" alt="The Last of us">
		<?php }else{
			?>
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/no-thumb.jpg" alt="The Last of us"> 
			<?php
		} 
		?>
	</div>
</div>
<div class="our_port_containe">
	<div class="our_portfolio_title" >
		<i class="fa fa-window-minimize" aria-hidden="true"></i>
		<h3><?php echo $info_item['title'];?></h3>
		<p><?php //echo $info_item->subtitle; ?></p>
		<p class="our_portfolio_desc"><?php echo wp_kses_post($info_item['text']); ?></p>
	</div>	
	<div class="our_portfolio_btn">
	<?php if(!empty($info_item['link_url'])){ ?>
		<a href="<?php echo $info_item['link_url']; ?>">
			<i class="fa fa-arrow-right"></i> 
		</a>
	<?php } ?>
	</div>
</div>
<?php
}

add_action('goldy_featured_section_loop','goldy_fly_featured_section_loop',5);
function goldy_fly_featured_section_loop($info_item){
?>
<div class="fea-brd"></div>
<div class="featured_content_inner">
	<?php if(!empty($info_item['icon_value'])){ ?>
		<div class="featured-icon">
			<i class="fa <?php echo esc_attr($info_item['icon_value'])?>"></i>
		</div>
	<?php } ?>
		<div class="featured-title"> 
			<h4>
				<?php echo esc_attr($info_item['title']); ?>
			</h4>
		</div>
	<div class="featured-description">
		<p><?php echo wp_kses_post($info_item['text']); ?></p>
	</div>
</div>
<?php
}