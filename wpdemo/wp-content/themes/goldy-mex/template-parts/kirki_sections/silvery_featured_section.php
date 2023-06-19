<?php
global $goldy_mex_themetype;
// print_r($goldy_mex_themetype['featured_section_contain_bg_color']);
// Featured Section
new \Kirki\Section(
	'featured_section',
	[
		'title'       => esc_html__( 'Featured Section', 'goldy-mex' ),
		'panel'       => 'globly_theme_option',
		'priority'    => 160,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'goldy_mex_featured_section_main_title',
		'label'    => esc_html__( 'Featured Section Title', 'kirki' ),
		'section'  => 'featured_section',
		'default'  => esc_html__( 'Featured Section', 'kirki' ),
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'goldy_mex_featured_section_description',
		'label'    => esc_html__( 'Featured Section Discription', 'kirki' ),
		'section'  => 'featured_section',
		'default'  => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'kirki' ),
		'priority' => 10,
	]
);
	
new \Kirki\Field\Repeater(
	[
		'settings' => 'goldy_mex_featured_section_content',
		'label'    => esc_html__( 'featured Items Content', 'goldy-mex' ),
		'row_label' => array( 'value' => 'Info item' ),
		'section'  => 'featured_section',
		'priority' => 10,
		'default'  => [
			[
				'icon_value'    => 'fa-cloud',
				'title'    => 'Featured title 1',
				'text'    => 'this is featured.',	
				'link_url'    => '#',
			],
			[
				'icon_value'    => 'fa-facebook',
				'title'    => 'Featured title 2',
				'text'    => 'this is featured.',
				'link_url'    => '#',	
			],
			[
				'icon_value'    => 'fa-twitter',
				'title'    => 'Featured title 3',
				'text'    => 'this is featured.',	
				'link_url'    => '#',
			],
		],
		'fields'   => [
			'icon_value'    => [
				'type'		  => 'text',
				'label'       => esc_html__( 'Icon:', 'goldy-mex' ),
				'description' => sprintf(esc_html__( 'Note: Some icons may not be displayed here. You can see the full list of icons at %1$s.', 'goldy-mex' ),
						sprintf( '<a href="https://fontawesome.com/v4/icons/" rel="nofollow">%s</a>', esc_html__( 'http://fontawesome.io/icons/', 'goldy-mex' ) )
					),
			],
			'title'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Title', 'goldy-mex' ),
			],
			'text'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Text', 'goldy-mex' ),
			],
			'link_url'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Link URL:', 'kirki' ),
			],
		],
		'partial_refresh'    => [
			'goldy_mex_featured_section_main_title' => [
				'selector'        => '.featured-section_data',
				'render_callback' => function() {
				    return get_theme_mod('goldy_mex_featured_section_content');
				}
			],
		],
		'choices' => [
			'limit' => ($goldy_mex_themetype['themtypeis']=='normal') ? 3 : 100,
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'featured_section_icon_size',
		'label'    => esc_html__( 'Icon Size', 'goldy-mex' ),
		'description' => esc_html__( 'in px', 'goldy-mex' ),
		'section'  => 'featured_section',
		'priority'    => 160,
		'default'  => '60px',
		'output' => array(
			array(
				'element'  => '.featured_section_info .featured_content .featured-thumbnail i',
				'property' => 'font-size',
			),
			array(
				'element'  => '.featured_section_info .featured_content .featured-thumbnail i',
				'property' => 'width',
			),
			array(
				'element'  => '.featured_section_info .featured_content .featured-thumbnail i',
				'property' => 'height',
			),
		),
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'featured_section_bg_image',
		'label'       => esc_html__( 'Backgroung Image', 'goldy-mex' ),
		'section'     => 'featured_section',
		'default'     => '',
		'priority'    => 160,
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'featured_section_background_position',
		'label'       => esc_html__( 'Background Position', 'goldy-mex' ),
		'section'     => 'featured_section',
		'default'     => 'center center',
		'placeholder' => esc_html__( 'Choose an option', 'goldy-mex' ),
		'priority'    => 160,
		'choices'     => [
			'left top' => esc_html__( 'Left Top', 'goldy-mex' ),
			'left center' => esc_html__( 'Left Center', 'goldy-mex' ),
			'left bottom' => esc_html__( 'Left Bottom', 'goldy-mex' ),
			'right top' => esc_html__( 'Right Top', 'goldy-mex' ),
			'right center' => esc_html__( 'Right Center', 'goldy-mex' ),
			'right bottom' => esc_html__( 'Right Bottom', 'goldy-mex' ),
			'center top' => esc_html__( 'Center Top', 'goldy-mex' ),
			'center center' => esc_html__( 'Center Center', 'goldy-mex' ),
			'center bottom' => esc_html__( 'Center Bottom', 'goldy-mex' ),
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data',
				'property' => 'background-position',
			),
		),
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'featured_section_background_attachment',
		'label'       => esc_html__( 'Background Attachment', 'goldy-mex' ),
		'section'     => 'featured_section',
		'default'     => 'scroll',
		'priority'    => 160,
		'placeholder' => esc_html__( 'Choose an option', 'goldy-mex' ),
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'goldy-mex' ),
			'fixed' => esc_html__( 'Fixed', 'goldy-mex' ),
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data',
				'property' => 'background-attachment',
			),
		),
	]
);

new \Kirki\Field\Select(
	[
		'settings'    => 'featured_section_background_size',
		'label'       => esc_html__( 'Background Size', 'goldy-mex' ),
		'section'     => 'featured_section',
		'default'     => 'cover',
		'priority'    => 160,
		'placeholder' => esc_html__( 'Choose an option', 'goldy-mex' ),
		'choices'     => [
			'auto' => esc_html__( 'Auto', 'goldy-mex' ),
			'cover' => esc_html__( 'Cover', 'goldy-mex' ),
			'contain' => esc_html__( 'Contain', 'goldy-mex' ),
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data',
				'property' => 'background-size',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_bg_color',
		'label'       => __( 'Background Color', 'goldy-mex' ),
		'section'     => 'featured_section',
		'default'     => '#ffffff',
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_text_color',
		'label'       => __( 'Text Color', 'goldy-mex' ),
		'section'     => 'featured_section',
		'default'     => '#333333',
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_contain_bg_color',
		'label'       => __( 'Contain Background Color', 'goldy-mex' ),
		'section'     => 'featured_section',
		'default'     => $goldy_mex_themetype['featured_section_contain_bg_color'],
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.section-featured-wrep',
				'property' => 'background',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_bg_hover_color',
		'label'       => __( 'Contain Background Hover Color', 'goldy-mex' ),
		'section'     => 'featured_section',
		'default'     => $goldy_mex_themetype['featured_section_bg_hover_color'],
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				// 'element'  => '.section-featured-wrep:before, .section-featured-wrep:after',
				'element'  => $goldy_mex_themetype['featured_section_bg_hover_color_element'],
				'property' => 'background',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_contain_text_color',
		'label'       => __( 'Contain Text Color', 'goldy-mex' ),
		'section'     => 'featured_section',
		'default'     => '#273641',
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.section-featured-wrep, .section-featured-wrep:hover',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_icon_color',
		'label'       => __( 'Icon Color', 'goldy-mex' ),
		'section'     => 'featured_section',
		'default'     => $goldy_mex_themetype['featured_section_icon_color'],
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data .featured_content .featured-icon',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_icon_bg_color',
		'label'       => __( 'Icon Background Color', 'goldy-mex' ),
		'section'     => 'featured_section',
		'default'     => $goldy_mex_themetype['featured_section_icon_bg_color'],
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data .featured_content .featured-icon',
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_icon_hover_color',
		'label'       => __( 'Icon Hover Color', 'goldy-mex' ),
		'section'     => 'featured_section',
		'default'     => '#273641',
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data .section-featured-wrep:hover i',
				'property' => 'color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_icon_bg_hover_color',
		'label'       => __( 'Icon Background Hover Color', 'goldy-mex' ),
		'section'     => 'featured_section',
		'default'     => '#fcf5f4',
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => $goldy_mex_themetype['featured_section_icon_bg_color_element'],
				'property' => 'background-color',
			),
		),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'featured_section_border_color',
		'label'       => __( 'Border Color', 'goldy-mex' ),
		'section'     => 'featured_section',
		'default'     => $goldy_mex_themetype['featured_section_border_color'],
		'priority'    => 160,
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.featured-section_data .featured_content .featured-thumbnail:after',
				'property' => 'background-color',
			),
			array(
				'element'  => '.section-featured-wrep .fea-brd',
				'property' => 'border-color',
			),
		),
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'featured_section_Margin',
		'label'    => esc_html__( 'Margin', 'goldy-mex' ),
		'description' => esc_html__( 'in px', 'goldy-mex' ),
		'section'     => 'featured_section',
		'default'  => esc_html__( '0px 0px 0px 0px', 'goldy-mex' ),
		'priority' => 160,
		'output' => array(
			array(
				'element'  => '.featured-section_data',
				'property' => 'margin',
			),
		),
	]
);
?>