<?php
/** 
 * XtremeFitness Customizer data
 */

function xtremefitness_customizer( $data ) {
	$xtremefitness_elementor_template_list = xtremefitness_get_elementor_templates();
	$xtremefitness_elementor_header_templates = xtremefitness_get_elementor_header_templates();
	return array(
		'panel' => array ( 
			'id' => 'xtremefitness',
			'name' => esc_html__('XtremeFitness Customizer','xtremefitness'),
			'priority' => 10,
			'section' => array(
				'header_setting' => array(
					'name' => esc_html__( 'Header Topbar Setting', 'xtremefitness' ),
					'priority' => 10,
					'fields' => array(
						array(
							'name' => esc_html__( 'Topbar Swicher', 'xtremefitness' ),
							'id' => 'xtremefitness_topbar_switch',
							'default' => false,
							'type' => 'switch',
							'transport'	=> 'refresh'
						),						
						array(
							'name' => esc_html__( 'Show Button', 'xtremefitness' ),
							'id' => 'xtremefitness_show_header_btn',
							'default' => 0,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Button Text', 'xtremefitness' ),
							'id' => 'xtremefitness_header_btn_text',
							'default' => esc_html__('Sign in','xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Button Link', 'xtremefitness' ),
							'id' => 'xtremefitness_header_btn_link',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),						
						array(
							'name' => esc_html__( 'Button Icon', 'xtremefitness' ),
							'id' => 'xtremefitness_header_btn_icon',
							'default' => esc_html__('fa fa-user-o', 'xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						/** investment button **/	
						array(
							'name' => esc_html__( 'Show Investment Offer Link', 'xtremefitness' ),
							'id' => 'xtremefitness_show_investment_offer_link',
							'default' => 0,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Link Text', 'xtremefitness' ),
							'id' => 'xtremefitness_header_link_text',
							'default' => esc_html__('XtremeFitness Offer','xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Link Url', 'xtremefitness' ),
							'id' => 'xtremefitness_header_link_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						/** contact-info **/
						array(
							'name' => esc_html__( 'Show Contact Info', 'xtremefitness' ),
							'id' => 'xtremefitness_show_contact_info',
							'default' => 0,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Email Address', 'xtremefitness' ),
							'id' => 'xtremefitness_header_email',
							'default' => esc_html__('info@gmail.com','xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Phone Number', 'xtremefitness' ),
							'id' => 'xtremefitness_header_phone',
							'default' => esc_html__('+97657945737', 'xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						)

					) 
				),
				'xtremefitness_topbar_social_profiles_setting' => array(
					'name' => esc_html__( 'Header Social Profiles', 'xtremefitness' ),
					'priority' => 15,
					'fields' => array(
						array(
							'name' => esc_html__( 'Show Social Profiles', 'xtremefitness' ),
							'id' => 'xtremefitness_show_social_profiles',
							'default' => 0,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Facebook Url', 'xtremefitness' ),
							'id' => 'xtremefitness_topbar_fb_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Twitter Url', 'xtremefitness' ),
							'id' => 'xtremefitness_topbar_twitter_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Linkedin Url', 'xtremefitness' ),
							'id' => 'xtremefitness_topbar_linkedin_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Instagram Url', 'xtremefitness' ),
							'id' => 'xtremefitness_topbar_instagram_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
					) 
				),
				'header_main_setting' => array(
					'name' => esc_html__( 'Header Setting', 'xtremefitness' ),
					'priority' => 20,
					'fields' => array(
						array(
							'name' => esc_html__( 'Choose Header Style', 'xtremefitness' ),
							'id' => 'choose_default_header',
							'type'     => 'select',
							'choices'  => array(
								'header-style-1' => esc_html__( 'Header Style 1', 'xtremefitness' ),
								'header-style-2' => esc_html__( 'Header Style 2', 'xtremefitness' ),
							),
							'default' => 'header-style-2',
							'transport'	=> 'refresh'
						),
						array(
							'name' => esc_html__( 'Header Type', 'xtremefitness' ),
							'id' => 'choose_default_header',
							'type'     => 'select',
							'choices'  => array(
								'default-header' => esc_html__( 'Default Header', 'xtremefitness' ),
								'elementor-header' => esc_html__( 'Elementor Header', 'xtremefitness' ),
							),
							'default' => 'default-header',
							'transport'	=> 'refresh'
						),
						array(
							'name' => esc_html__( 'Header Elementor Templates', 'xtremefitness' ),
							'id' => 'choose_elementor_header',
							'type'     => 'select',
							'choices'  => $xtremefitness_elementor_header_templates,
							'transport'	=> 'refresh',
							'required' => ['header_source_type',
							'=',
							'e'],
						),
						array(
							'name' => esc_html__( 'Header Logo', 'xtremefitness' ),
							'id' => 'logo',
							'default' => get_template_directory_uri() . '/assets/img/logo/logo.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header Black Logo', 'xtremefitness' ),
							'id' => 'seconday_logo',
							'default' => get_template_directory_uri() . '/assets/img/logo/logo-black.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header Retina Logo', 'xtremefitness' ),
							'id' => 'retina_logo',
							'default' => get_template_directory_uri() . '/assets/img/logo/logo@2x.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header Retina Black Logo', 'xtremefitness' ),
							'id' => 'retina_secondary_logo',
							'default' => get_template_directory_uri() . '/assets/img/logo/logo-black@2x.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Show Header Search', 'xtremefitness' ),
							'id' => 'xtremefitness_header_search_show',
							'default' => 1,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),	
					) 
				),	
				'banner_main_setting' => array(
					'name' => esc_html__( 'Sub Banner Setting', 'xtremefitness' ),
					'priority' => 20,
					'fields' => array(
						
						array(
							'name' => esc_html__( 'Banner Image', 'xtremefitness' ),
							'id' => 'sub-banner-img',
							'default' => get_template_directory_uri() . '/assets/img/sub-banner-img.jpg',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						
					) 
				),	
				'page_title_setting'=> array(
					'name'=> esc_html__('Page Title Setting','xtremefitness'),
					'priority'=> 30,
					'fields'=> array(
						array(
							'name' => esc_html__( 'Choose Breadcrumb Style', 'xtremefitness' ),
							'id' => 'choose_default_breadcrumb',
							'type'     => 'select',
							'choices'  => array(
								'breadcrumb-style-1' => esc_html__( 'Breadcrumb Style 1', 'xtremefitness' ),
								'breadcrumb-style-2' => esc_html__( 'default', 'xtremefitness' ),
							),
							'default' => 'breadcrumb-style-1',
							'transport'	=> 'refresh'
						),
						array(
							'name'=>esc_html__('Breadcrumb BG Color','xtremefitness'),
							'id'=>'breadcrumb_bg_color',
							'default'=> esc_html__('#343a40','xtremefitness'),
							'transport'	=> 'refresh'  
						),
						array(
							'name' => esc_html__( 'Page Title Background Image', 'xtremefitness' ),
							'id' => 'breadcrumb_bg_img',
							'default' => '',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Breadcrumb Archive', 'xtremefitness' ),
							'id' => 'breadcrumb_archive',
							'default' => esc_html__('Archive for category','xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Breadcrumb Search', 'xtremefitness' ),
							'id' => 'breadcrumb_search',
							'default' => esc_html__('Search results for','xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Breadcrumb tagged', 'xtremefitness' ),
							'id' => 'breadcrumb_post_tags',
							'default' => esc_html__('Posts tagged','xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),		
						array(
							'name' => esc_html__( 'Breadcrumb posted by', 'xtremefitness' ),
							'id' => 'breadcrumb_artitle_post_by',
							'default' => esc_html__('Articles posted by','xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),		
						array(
							'name' => esc_html__( 'Breadcrumb Page Not Found', 'xtremefitness' ),
							'id' => 'breadcrumb_404',
							'default' => esc_html__('Page Not Found','xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),		
						array(
							'name' => esc_html__( 'Breadcrumb Page', 'xtremefitness' ),
							'id' => 'breadcrumb_page',
							'default' => esc_html__('Page','xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),			
						array(
							'name' => esc_html__( 'Breadcrumb Shop', 'xtremefitness' ),
							'id' => 'breadcrumb_shop',
							'default' => esc_html__('Shop','xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),			
						array(
							'name' => esc_html__( 'Breadcrumb Home', 'xtremefitness' ),
							'id' => 'breadcrumb_home',
							'default' => esc_html__('Home','xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),					
					)
				),
				'blog_setting'=> array(
					'name'=> esc_html__('Blog Setting','xtremefitness'),
					'priority'=> 40,
					'fields'=> array(
						array(
							'name' => esc_html__( 'Show Blog BTN', 'xtremefitness' ),
							'id' => 'xtremefitness_blog_btn_switch',
							'default' => 1,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Show Blog Btn Icon', 'xtremefitness' ),
							'id' => 'xtremefitness_blog_btn_icon_switch',
							'default' => 1,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Blog Button text', 'xtremefitness' ),
							'id' => 'xtremefitness_blog_btn',
							'default' => esc_html__('Read More','xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),							
						array(
							'name' => esc_html__( 'Blog Button Icon', 'xtremefitness' ),
							'id' => 'xtremefitness_blog_btn_icon',
							'default' => esc_html__('fas fa-angle-double-right','xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),						
						array(
							'name' => esc_html__( 'Blog Title', 'xtremefitness' ),
							'id' => 'breadcrumb_blog_title',
							'default' => esc_html__('Blog','xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),						
						array(
							'name' => esc_html__( 'Blog Details Title', 'xtremefitness' ),
							'id' => 'breadcrumb_blog_title_details',
							'default' => esc_html__('Blog Details','xtremefitness'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),

					)
				),
				'xtremefitness_footer_setting' => array(
					'name'=> esc_html__('Footer Setting','xtremefitness'),
					'priority'=> 60,
					'fields'=> array(
						array(
							'name' => esc_html__( 'Footer Elementor Templates', 'xtremefitness' ),
							'id' => 'choose_elementor_footer',
							'type'     => 'select',
							'choices'  => $xtremefitness_elementor_template_list,
							'transport'	=> 'refresh',
							'required' => ['footer_source_type',
							'=',
							'e'],
						),
						array(
							'name' => esc_html__( 'Choose Footer Style', 'xtremefitness' ),
							'id' => 'choose_default_footer',
							'type'     => 'select',
							'choices'  => array(
								'footer-style-1' => esc_html__( 'Footer Style 1', 'xtremefitness' ),
								'footer-style-2' => esc_html__( 'Footer Style 2', 'xtremefitness' ),
								'footer-style-3' => esc_html__( 'Footer Style 3', 'xtremefitness' ),
							),
							'default' => 'footer-style-1',
							'transport'	=> 'refresh'
						),
						array(
							'name' => esc_html__( 'Footer Background Image', 'xtremefitness' ),
							'id' => 'xtremefitness_footer_bg',
							'default' => '',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name'=>esc_html__('Footer BG Color','xtremefitness'),
							'id'=>'xtremefitness_footer_bg_color',
							'default'=> esc_html__('#f4f9fc','xtremefitness'),
							'transport'	=> 'refresh'  
						),
						array(
							'name'=>esc_html__('Copy Right','xtremefitness'),
							'id'=>'xtremefitness_copyright',
							'default'=> esc_html__('Copyright &copy; XtremeFitness 2023. All rights reserved','xtremefitness'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						),	
						array(
							'name'=>esc_html__('Enable Scrollup','xtremefitness'),
							'id'=>'xtremefitness_scrollup_switch',
							'default'=> false,
							'type'=>'switch',
							'transport'	=> 'refresh'  
						),						
						array(
							'name'=>esc_html__('Enable Footer Widgets','xtremefitness'),
							'id'=>'xtremefitness_enable_footer_widgets',
							'default'=> true,
							'type'=>'switch',
							'transport'	=> 'refresh'  
						),	
						array(
							'name'=>esc_html__('Enable Preloader','xtremefitness'),
							'id'=>'xtremefitness_preloader_switch',
							'default'=> false,
							'type'=>'switch',
							'transport'	=> 'refresh'  
						)
					)
				),
				'error_page_setting'=> array(
					'name'=> esc_html__('404 Setting','xtremefitness'),
					'priority'=> 90,
					'fields'=> array(
						array(
							'name'=>esc_html__('400 Text','xtremefitness'),
							'id'=>'xtremefitness_error_404_text',
							'default'=> esc_html__('404','xtremefitness'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						),
						array(
							'name'=>esc_html__('Not Found Title','xtremefitness'),
							'id'=>'xtremefitness_error_title',
							'default'=> esc_html__('Page not found','xtremefitness'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						),
						array(
							'name'=>esc_html__('404 Description Text','xtremefitness'),
							'id'=>'xtremefitness_error_desc',
							'default'=> esc_html__('Oops! The page you are looking for does not exist. It might have been moved or deleted','xtremefitness'),
							'type'=>'textarea',
							'transport'	=> 'refresh'  
						),
						array(
							'name'=>esc_html__('404 Link Text','xtremefitness'),
							'id'=>'xtremefitness_error_link_text',
							'default'=> esc_html__('Back To Home','xtremefitness'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						)
						
					)
				),
			),
		)
	);

}

add_filter('xtremefitness_customizer_data', 'xtremefitness_customizer');


