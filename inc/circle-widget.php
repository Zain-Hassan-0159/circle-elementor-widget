<?php

/**
 * Circle Widget
 *
 * @package           Circle Widget
 * @author            Zain Hassan
 *
 */
   


/**
 * Elementor List Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class circle_widget_elementore  extends \Elementor\Widget_Base {
	

	public function get_style_depends() {

		// wp_register_style( 'wishes-style', plugins_url( 'assets/css/style.css', __FILE__ ) );

		// return [
		// 	'wishes-style',
		// ];

	}
	

	/**
	 * Get widget name.
	 *
	 * Retrieve company widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'circle-widget';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve company widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Circle Widget', 'circle-widget' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve company widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-circle';
	}

	/**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget help URL.
	 */
	public function get_custom_help_url() {
		return 'https://developers.elementor.com/widgets/';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the company of categories the company widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'el-circle' ];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the company of keywords the company widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'circle', 'widgets', 'custom', 'circle widgets' ];
	}



	/**
	 * Register company widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

        $this->start_controls_section(
			'content_sectiongeneral',
			[
				'label' => esc_html__( 'General', 'circle-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);


        $this->add_control(
			'general_logo',
			[
				'label' => esc_html__( 'Choose Image', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' =>   plugin_dir_url( __FILE__ ) . "assets/images/logo.png",
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Health Hubs', 'circle-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'card_title_one',
			[
				'label' => esc_html__( 'Title', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Health Hubs', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your title here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_desc_one',
			[
				'label' => esc_html__( 'Description', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Designed to offer complimentary and supportive services, our Health Hubs are located within proximity to both public and private health precincts and provide a diverse range of health and medical service opportunities for the broader community.', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your description here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_linktitle_one',
			[
				'label' => esc_html__( 'Link Title', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Learn More', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your title here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_link_one',
			[
				'label' => esc_html__( 'Link URL', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'circle-widget' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

        $this->add_control(
			'health_hubs',
			[
				'label' => esc_html__( 'Choose Image', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' =>   plugin_dir_url( __FILE__ ) . "assets/images/Circle-Sections_0002_Layer-3.png",
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'content_section2',
			[
				'label' => esc_html__( 'Group', 'circle-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'card_title_two',
			[
				'label' => esc_html__( 'Title', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Group', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your title here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_desc_two',
			[
				'label' => esc_html__( 'Description', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Cornerstone is an integrated healthcare development group. We develop primary and specialised healthcare hubs across Australia—health centres of excellence, empowering true integration through multi-disciplinary care.', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your description here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_linktitle_two',
			[
				'label' => esc_html__( 'Link Title', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Learn More', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your title here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_link_two',
			[
				'label' => esc_html__( 'Link URL', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'circle-widget' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

        $this->add_control(
			'group',
			[
				'label' => esc_html__( 'Choose Image', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' =>   plugin_dir_url( __FILE__ ) . "assets/images/Circle-Sections_0001_Layer-2.png",
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'content_section3',
			[
				'label' => esc_html__( 'MLD', 'circle-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'card_title_three',
			[
				'label' => esc_html__( 'Title', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'MLD', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your title here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_desc_three',
			[
				'label' => esc_html__( 'Description', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'MyLocalDoc is a network of locally operated GP Clinics throughout Australia. We aim to bring together local doctors and their community of patients with an outcome of exceptional patient care. Our practices are crafted to set a high standard of personal and professional general medicine for the entire family.', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your description here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_linktitle_three',
			[
				'label' => esc_html__( 'Link Title', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Learn More', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your title here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_link_three',
			[
				'label' => esc_html__( 'Link URL', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'circle-widget' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

        $this->add_control(
			'mld',
			[
				'label' => esc_html__( 'Choose Image', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' =>   plugin_dir_url( __FILE__ ) . "assets/images/Circle-Sections_0000_Layer-1.png",
				],
			]
		);

		$this->end_controls_section();

        $this->start_controls_section(
			'content_section4',
			[
				'label' => esc_html__( 'Construction', 'circle-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'card_title_four',
			[
				'label' => esc_html__( 'Title', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Construction', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your title here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_desc_four',
			[
				'label' => esc_html__( 'Description', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( "With our origins in design and construction, we specialise in delivering integrated healthcare. Our expertise ranges from medicine, allied health, radiation and oncology, hospital, and education bringing significance to the communities.", 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your description here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_linktitle_four',
			[
				'label' => esc_html__( 'Link Title', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Learn More', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your title here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_link_four',
			[
				'label' => esc_html__( 'Link URL', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'circle-widget' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

        
        $this->add_control(
			'construction',
			[
				'label' => esc_html__( 'Choose Image', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' =>   plugin_dir_url( __FILE__ ) . "assets/images/Circle-Sections_0005_Layer-6.png",
				],
			]
		);

		$this->end_controls_section();

		

		$this->start_controls_section(
			'content_section5',
			[
				'label' => esc_html__( 'Funds Management', 'circle-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'card_title_five',
			[
				'label' => esc_html__( 'Title', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Funds Management', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your title here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_desc_five',
			[
				'label' => esc_html__( 'Description', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( "A long-term diverse healthcare fund developing and investing in the future of Australia's healthcare needs with the underlying purpose to 'create thriving communities'. We have established a team of excellence to manage our investments and asset portfolio. We look to partner with aligned investors for healthcare outcomes.", 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your description here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_linktitle_five',
			[
				'label' => esc_html__( 'Link Title', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Learn More', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your title here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_link_five',
			[
				'label' => esc_html__( 'Link URL', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'circle-widget' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);
        
        
        $this->add_control(
			'funds_management',
			[
				'label' => esc_html__( 'Choose Image', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' =>   plugin_dir_url( __FILE__ ) . "assets/images/Circle-Sections_0004_Layer-5.png",
				],
			]
		);

		$this->end_controls_section();

        $this->start_controls_section(
			'content_section6',
			[
				'label' => esc_html__( 'Cornerstone Life', 'circle-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

        $this->add_control(
			'card_title_six',
			[
				'label' => esc_html__( 'Title', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Cornerstone Life', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your title here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_desc_six',
			[
				'label' => esc_html__( 'Description', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Our Christian convictions mean we effectively steward resources into our larger philanthropic vision, transforming lives at home and abroad. We are also aware of our responsibilities to steward the earth’s resources.', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your description here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_linktitle_six',
			[
				'label' => esc_html__( 'Link Title', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Learn More', 'circle-widget' ),
				'placeholder' => esc_html__( 'Type your title here', 'circle-widget' ),
			]
		);

        $this->add_control(
			'card_link_six',
			[
				'label' => esc_html__( 'Link URL', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'circle-widget' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

        
        
        $this->add_control(
			'cornerstone_life',
			[
				'label' => esc_html__( 'Choose Image', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' =>   plugin_dir_url( __FILE__ ) . "assets/images/Circle-Sections_0003_Layer-4.png",
				],
			]
		);

		$this->end_controls_section();

	

        $this->start_controls_section(
			'wishes_style_section',
			[
				'label' => __( 'Style', 'circle-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'heading_typography',
                'label' => __( 'Heading Typography', 'circle-widget' ),
				'selector' => '{{WRAPPER}} .content-container .tab-content .content-heading',
			]
		);
		
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
                'label' => __( 'Content Typography', 'circle-widget' ),
				'selector' => '{{WRAPPER}} .content-container .tab-content .content-text',
			]
		);
		
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'button_typography',
                'label' => __( 'Button Typography', 'circle-widget' ),
				'selector' => '{{WRAPPER}}  .tab-content a',
			]
		);
		
		
		$this->add_control(
			'card_bg_color',
			[
				'label' => esc_html__( 'Card Background Color', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#cecece',
				'selectors' => [
					'{{WRAPPER}} .content .content-container' => 'background-color: {{VALUE}};'
				],
			]
		);
		
		$this->add_control(
			'arrows_bg_color',
			[
				'label' => esc_html__( 'Arrows Background Color', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#cecece',
				'selectors' => [
					'{{WRAPPER}} .content .content-container span' => 'background-color:{{VALUE}};'
				],
			]
		);
		
		$this->add_control(
			'arrows_color',
			[
				'label' => esc_html__( 'Arrows Color', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} .content .content-container span:after' => 'border-color:{{VALUE}};'
				],
			]
		);
		
		$this->add_control(
			'card_heading_color',
			[
				'label' => esc_html__( 'Card Heading Color', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#376be6',
				'selectors' => [
					'{{WRAPPER}} .content-container .tab-content .content-heading' => 'color: {{VALUE}};',
				]
			]
		);
		
		$this->add_control(
			'card_content_color',
			[
				'label' => esc_html__( 'Card Content Color', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} .content-container .tab-content .content-text' => 'color: {{VALUE}};',
				]
			]
		);
		
		$this->add_control(
			'card_buttonbg_color',
			[
				'label' => esc_html__( 'Button Bg Color', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#376be6',
				'selectors' => [
					'{{WRAPPER}} .tab-content a' => 'background-color: {{VALUE}};',
				]
			]
		);
		
		$this->add_control(
			'card_button_color',
			[
				'label' => esc_html__( 'Button Color', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .tab-content a' => 'color: {{VALUE}};',
				]
			]
		);

        $this->add_control(
			'button_padding',
			[
				'label' => esc_html__( 'Button padding', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}}  .tab-content a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border_button',
                'label' => esc_html__( 'Button Border', 'circle-widget' ),
				'selector' => '{{WRAPPER}} .tab-content a',
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow',
                'label' => esc_html__( 'Box Shadow', 'circle-widget' ),
				'selector' => '{{WRAPPER}} .content .content-container',
			]
		);

		
		$this->end_controls_section();
	

        $this->start_controls_section(
			'wishes_style_section_hover',
			[
				'label' => __( 'Hover Style', 'circle-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
			
        $this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'button_typography_hover',
                'label' => __( 'Button Typography Hover', 'circle-widget' ),
				'selector' => '{{WRAPPER}}  .tab-content a:hover',
			]
		);
		
		
		$this->add_control(
			'arrows_bg_color_hover',
			[
				'label' => esc_html__( 'Arrows Background Color Hover', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#cecece',
				'selectors' => [
					'{{WRAPPER}} .content .content-container span:hover' => 'background-color:{{VALUE}};'
				],
			]
		);
		
		$this->add_control(
			'arrows_color_hover',
			[
				'label' => esc_html__( 'Arrows Color Hover', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} .content .content-container span:hover:after' => 'border-color:{{VALUE}};'
				],
			]
		);
		
		
		$this->add_control(
			'card_buttonbg_color_hover',
			[
				'label' => esc_html__( 'Button Bg Color Hover', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#376be6',
				'selectors' => [
					'{{WRAPPER}} .tab-content a:hover' => 'background-color: {{VALUE}};',
				]
			]
		);
		
		$this->add_control(
			'card_button_color_hover',
			[
				'label' => esc_html__( 'Button Color Hover', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#fff',
				'selectors' => [
					'{{WRAPPER}} .tab-content a:hover' => 'color: {{VALUE}};',
				]
			]
		);

        $this->add_control(
			'button_padding_hover',
			[
				'label' => esc_html__( 'Button padding Hover', 'circle-widget' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
				'selectors' => [
					'{{WRAPPER}}  .tab-content a:hover' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

        
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border_button_hover',
                'label' => esc_html__( 'Button Border Hover', 'circle-widget' ),
				'selector' => '{{WRAPPER}} .tab-content a:hover',
			]
		);

		$this->end_controls_section();


	}

	/**
	 * Render company widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

		// echo "<pre>";
		// var_dump($settings['posts_include_terms']);
        
        ?>
  <style>

    .disc-content * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .disc-content{  
      overflow: hidden;
    }
    .disc {
      width: 660px;
      height: 660px;
      position: relative;
      left: calc(50% - 330px);
      transition: all 1s  ;
      /* margin-top: 350px; */
      display: inline-block;
      z-index: 22;
      transform: scale(1.2);
    }
    .content{
      display: flex;
      /* justify-content: space-between; */
      align-items: center;
    }
    .content .disc  .main-circle{
      animation: unset;
      transition: all 1s;
      transform: rotate(150deg);
    }
    .content .disc{
      left: -13%;
      }
   
    .content .disc .corner-images{
      filter: grayscale(1); 
    }
    
    .content .disc .corner-images.active{
      filter: grayscale(0); 
    }

    .disc .main-circle {
      position: relative;
      height: 100%;
      font-size: 0;
      display: flex;
      flex-wrap: wrap;
      -webkit-animation: rotating 15s linear infinite;
      -moz-animation: rotating 15s linear infinite;
      -ms-animation: rotating 15s linear infinite;
      -o-animation: rotating 15s linear infinite;
      animation: rotating 15s linear infinite;
    }

    .disc .corner-images {
      width: 220px;
      vertical-align: top;
      /* display: inline-block; */
      display: grid;
      transition: all 1s  ;
    }


    .disc .corner-images img {
      max-width: 100%;
    }
    
    .disc .main-circle .corner-images:nth-child(4){
      order: 6;
    }
    .disc .main-circle .corner-images:nth-child(6){
      order: 4;
    }
    .disc .main-circle .corner-images:nth-child(5){
      order: 5;
    }

    .disc .main-circle .corner-images:nth-child(1) img {
      max-width: unset;
      width: 200px;
      transform: translate(63px, 103px) rotate(-0.8deg);
    }

    .disc .main-circle .corner-images:nth-child(2) img {
      max-width: unset;
      width: 264px;
      transform: translate(-24px, 36px) rotate(-1deg);
    }

    .disc .main-circle .corner-images:nth-child(3) img {
      max-width: unset;
      width: 200px;
      transform: translate(-45px, 98px) rotate(-1.3deg);
    }

    .disc .main-circle .corner-images:nth-child(4) img {
      max-width: unset;
      width: 230px;
      transform: translate(-42px, 13px) rotate(-1deg);
    }

    .disc .main-circle .corner-images:nth-child(5) img {
      max-width: unset;
      width: 264px;
      transform: translate(-18px, 126px) rotate(-1deg);
    }

    .disc .main-circle .corner-images:nth-child(6) img {
      max-width: unset;
    width: 200px;
    transform: translate(66px, -10px) rotate(-1deg);
    }

    .disc .center {
      width: 100%;
      height: 100%;
      position: absolute;
      top: 0;
      left: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 1;
    }
    .content .disc .center{
      display: none;
    }
    .disc .center .center-content {
      /* background: lightgray; */
      width: 250px;
      height: 250px;
      border-radius: 50%;
      justify-content: center;
      align-items: center;
      display: flex;
    }
    
    .disc .center .center-content img{
      max-width: 80%;
    }

    
    .tab-content a{
        background: #376be6;
        color: white;
        padding: 4px 20px;
        border-radius: 8px;
        display: inline-block;
    }

    .tab-content .content-text{
        margin-top: 0;
        margin-bottom: 10px;
    }

    .tab-content .content-heading{
        margin-top: 0;
    }

    @-webkit-keyframes rotating

    /* Safari and Chrome */
      {
      from {
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      to {
        -webkit-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes rotating {
      from {
        -ms-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      to {
        -ms-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    .content-container{
      width: calc(100% - 660px);
      background-color: #cecece;
      padding: 50px;
      border-radius: 10px;
      /* visibility: hidden; */
      right: -100%;
      /* transform: translate(192%,0); */
      transition: all 1s ease-in-out;
      position: fixed;
    }
    .content .content-container{
      /* left: -13%; */
      right: 13%;
      transform: translate(0,0);
      position: relative;
      /* visibility: visible; */
    }
    /* .content .content-container .tab-buttons{
      position: absolute;
      top: calc(50% - 15px);
    } */
    .content .content-container  span{
      position: absolute;
      height: 30px;
      width: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #cecece;
      border-radius: 50%;
      cursor: pointer;
      right: -40px;
      top: 120px;
    }
    .content .content-container  span:after{
      content: "";
      width: 30%;
      height: 30%;
      border-top-left-radius: 5px;
      display: block;
      border-left: 3px solid black;
      border-top: 3px solid black;
      transform: rotate(-137deg);
    }

      .content .content-container span.btn-next{
        left: unset;
        right: -40px;
        top: 80px;
        
      }
    .content .content-container span.btn-next:after{
      transform: rotate(-45deg);
      border-left: unset;
      border-top-left-radius: 0px;
      border-top-right-radius: 5px;
      border-right: 3px solid  black;
      border-top: 3px solid black;
      top: 10.5px;
      left: 9px;
    }
    .content-container .tab-content .content-heading{
      color: #376be6;
      margin-bottom: 20px;
      font-size: 35px;
    }
    .content-container .tab-content .content-text{
      font-size: 25px;
      /* line-height: 2; */
    }
    .content-container .tab-content{
      display: none;
    }
    .content-container .tab-content.active{
      display: initial;
    }
  </style>
        <div class="disc-content content">
            <div class="disc">
                <div class="main-circle">
                <div class="corner-images active">
                    <img src="<?php  echo $settings['health_hubs']['url']; ?>">
                </div>
                <div class="corner-images">
                    <img src="<?php  echo $settings['group']['url']; ?>">
                </div>
                <div class="corner-images ">
                    <img src="<?php  echo $settings['mld']['url']; ?>">
                </div>
                <div class="corner-images">
                    <img src="<?php  echo $settings['construction']['url']; ?>">
                </div>
                <div class="corner-images">
                    <img src="<?php  echo $settings['funds_management']['url']; ?>">
                </div>
                <div class="corner-images">
                    <img src="<?php  echo $settings['cornerstone_life']['url']; ?>">
                </div>
                </div>
                <div class="center">
                <div class="center-content"><img src="<?php  echo $settings['general_logo']['url']; ?>"></div>
                </div>
            </div>
            <div class="content-container">
                <div class="tab-buttons">
                <span class="btn-prev" data-deg="150"></span>
                <span class="btn-next" data-deg="150"></span>
                </div>
                
                <div class="tab-content active">
                    <h2 class="content-heading"><?php echo $settings['card_title_one']; ?></h2>
                    <p class="content-text"><?php echo $settings['card_desc_one']; ?>
                    </p>
                    <?php
                    if ( ! empty( $settings['card_link_one']['url'] ) ) {
                        $this->add_link_attributes( 'card_link_one', $settings['card_link_one'] );
                    }
                    ?>
                    <a <?php echo $this->get_render_attribute_string( 'card_link_one' ); ?>><?php echo $settings['card_linktitle_one']; ?></a>
                </div>
                <div class="tab-content">
                    <h2 class="content-heading"><?php echo $settings['card_title_two']; ?></h2>
                    <p class="content-text"><?php echo $settings['card_desc_two']; ?>
                    </p>
                    <?php
                    if ( ! empty( $settings['card_link_two']['url'] ) ) {
                        $this->add_link_attributes( 'card_link_two', $settings['card_link_two'] );
                    }
                    ?>
                    <a <?php echo $this->get_render_attribute_string( 'card_link_two' ); ?>><?php echo $settings['card_linktitle_two']; ?></a>
                </div>
                <div class="tab-content ">
                    <h2 class="content-heading"><?php echo $settings['card_title_three']; ?></h2>
                    <p class="content-text">
                    <?php echo $settings['card_desc_three']; ?>
                    </p>
                    <?php
                    if ( ! empty( $settings['card_link_three']['url'] ) ) {
                        $this->add_link_attributes( 'card_link_three', $settings['card_link_three'] );
                    }
                    ?>
                    <a <?php echo $this->get_render_attribute_string( 'card_link_three' ); ?>><?php echo $settings['card_linktitle_three']; ?></a>
                </div>
                <div class="tab-content ">
                    <h2 class="content-heading"><?php echo $settings['card_title_four']; ?></h2>
                    <p class="content-text">
                    <?php echo $settings['card_desc_four']; ?>
                    </p>
                    <?php
                    if ( ! empty( $settings['card_link_four']['url'] ) ) {
                        $this->add_link_attributes( 'card_link_four', $settings['card_link_four'] );
                    }
                    ?>
                    <a <?php echo $this->get_render_attribute_string( 'card_link_four' ); ?>><?php echo $settings['card_linktitle_four']; ?></a>
                </div>
                <div class="tab-content ">
                    <h2 class="content-heading"><?php echo $settings['card_title_five']; ?></h2>
                    <p class="content-text">
                    <?php echo $settings['card_desc_five']; ?>
                    </p>
                    <?php
                    if ( ! empty( $settings['card_link_five']['url'] ) ) {
                        $this->add_link_attributes( 'card_link_five', $settings['card_link_five'] );
                    }
                    ?>
                    <a <?php echo $this->get_render_attribute_string( 'card_link_five' ); ?>><?php echo $settings['card_linktitle_five']; ?></a>
                </div>
                <div class="tab-content ">
                    <h2 class="content-heading"><?php echo $settings['card_title_six']; ?></h2>
                    <p class="content-text">
                    <?php echo $settings['card_desc_six']; ?>
                    </p>
                    <?php
                    if ( ! empty( $settings['card_link_six']['url'] ) ) {
                        $this->add_link_attributes( 'card_link_six', $settings['card_link_six'] );
                    }
                    ?>
                    <a <?php echo $this->get_render_attribute_string( 'card_link_six' ); ?>><?php echo $settings['card_linktitle_six']; ?></a>
                </div>


            </div>
        </div>
        <script>

            jQuery(window).scroll(function () {
            var bottom_of_object = jQuery('.disc').offset().top + (jQuery('.disc').outerHeight() * 0.8);
            var bottom_of_window = jQuery(window).scrollTop() + jQuery(window).height();
            console.log( bottom_of_window );
            if (bottom_of_window > bottom_of_object && bottom_of_window < bottom_of_object+400) {
                jQuery('.disc-content').addClass('content');
            }else{
                jQuery('.disc-content').removeClass('content');
            }
            });

            jQuery(document).on('click','.btn-next',function(){
            currentindex = jQuery('.corner-images.active').index();
            jQuery('.corner-images').removeClass('active');
            jQuery('.tab-content').removeClass('active');
            if(currentindex==5){
                jQuery('.corner-images').eq(0).addClass('active');
                jQuery(document).find('.tab-content').eq(0).addClass('active');
            }else{
                jQuery('.corner-images').eq(currentindex).next().addClass('active');
                jQuery(document).find('.tab-content').eq(currentindex).next().addClass('active');
            }

            degree = parseInt(jQuery(this).data('deg')) - 60 ;
            jQuery(this).data('deg', degree) ;
            jQuery('.btn-prev').data('deg', degree) ;
            jQuery('.content .disc .main-circle').css('transform', 'rotate('+degree+'deg)');
            });

            jQuery(document).on('click','.btn-prev',function(){
            currentindex = jQuery('.corner-images.active').index();
            jQuery('.corner-images').removeClass('active');
            jQuery('.tab-content').removeClass('active');
            if(currentindex==0){
                jQuery('.corner-images').eq(5).addClass('active');
                jQuery(document).find('.tab-content').eq(5).addClass('active');
            }else{
                jQuery('.corner-images').eq(currentindex).prev().addClass('active');
                jQuery(document).find('.tab-content').eq(currentindex).prev().addClass('active');
            }

            degree = parseInt(jQuery(this).data('deg')) + 60 ;
            jQuery(this).data('deg', degree) ;
            jQuery('.btn-next').data('deg', degree) ;
            jQuery('.content .disc .main-circle').css('transform', 'rotate('+degree+'deg)');
            });

        </script>
        <?php
	}


}