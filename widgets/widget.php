<?php
namespace PCFEBlogPosts\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class PCFEWidgets extends Widget_Base {

	public function get_name() {
		return 'pcfe-blogpost-carousel';
	}

	public function get_title() {
		return esc_html__( 'Post Carousel', 'post-carousel-for-elementor' );
	}

	public function get_icon() {
		return 'eicon-posts-carousel pcfe-blogpost-icon';
	}

	public function get_categories() {
		return ['pcfe-category'];
	}

	protected function register_controls() {

		//tab-content
		$this->start_controls_section(
			'pcfe_content_section',
			[
				'label' => esc_html__( 'All Style Here', 'post-carousel-for-elementor' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'pcfe_select_style_selection',
			[
				'label' => esc_html__( 'Select Style', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'post-carousel-for-elementor' ),
					'style2' => esc_html__( 'Style 2', 'post-carousel-for-elementor' ),
					'style3' => esc_html__( 'Style 3 (Pro)', 'post-carousel-for-elementor' ),
					'style4' => esc_html__( 'Style 4 (Pro)', 'post-carousel-for-elementor' ),
					'style5' => esc_html__( 'Style 5 (Pro)', 'post-carousel-for-elementor' ),
					'style6' => esc_html__( 'Style 6 (Pro)', 'post-carousel-for-elementor' ),
					'style7' => esc_html__( 'Style 7 (Pro)', 'post-carousel-for-elementor' ),
					'style8' => esc_html__( 'Style 8 (Pro)', 'post-carousel-for-elementor' ),
					'style9' => esc_html__( 'Style 9 (Pro)', 'post-carousel-for-elementor' ),
					'style10' => esc_html__( 'Style 10 (Pro)', 'post-carousel-for-elementor' ),
					'style11' => esc_html__( 'Style 11 (Pro)', 'post-carousel-for-elementor' ),
					'style12' => esc_html__( 'Style 12 (Pro)', 'post-carousel-for-elementor' ),
					'style13' => esc_html__( 'Style 13 (Pro)', 'post-carousel-for-elementor' ),
					'style14' => esc_html__( 'Style 14 (Pro)', 'post-carousel-for-elementor' ),
					'style15' => esc_html__( 'Style 15 (Pro)', 'post-carousel-for-elementor' ),
					'style16' => esc_html__( 'Style 16 (Pro)', 'post-carousel-for-elementor' ),
					'style17' => esc_html__( 'Style 17 (Pro)', 'post-carousel-for-elementor' ),
					'style18' => esc_html__( 'Style 18 (Pro)', 'post-carousel-for-elementor' ),
					'style19' => esc_html__( 'Style 19 (Pro)', 'post-carousel-for-elementor' ),
					'style20' => esc_html__( 'Style 20 (Pro)', 'post-carousel-for-elementor' ),
					'style21' => esc_html__( 'Style 21 (Pro)', 'post-carousel-for-elementor' ),
					'style22' => esc_html__( 'Style 22 (Pro)', 'post-carousel-for-elementor' ),
					'style23' => esc_html__( 'Style 23 (Pro)', 'post-carousel-for-elementor' ),
					'style24' => esc_html__( 'Style 24 (Pro)', 'post-carousel-for-elementor' ),
					'style25' => esc_html__( 'Style 25 (Pro)', 'post-carousel-for-elementor' ),
					'style26' => esc_html__( 'Style 26 (Pro)', 'post-carousel-for-elementor' ),
					'style27' => esc_html__( 'Style 27 (Pro)', 'post-carousel-for-elementor' ),
					'style28' => esc_html__( 'Style 28 (Pro)', 'post-carousel-for-elementor' ),
					'style29' => esc_html__( 'Style 29 (Pro)', 'post-carousel-for-elementor' ),
					'style30' => esc_html__( 'Style 30 (Pro)', 'post-carousel-for-elementor' ),
					'style31' => esc_html__( 'Style 31 (Pro)', 'post-carousel-for-elementor' ),
					'style32' => esc_html__( 'Style 32 (Pro)', 'post-carousel-for-elementor' ),
					'style33' => esc_html__( 'Style 33 (Pro)', 'post-carousel-for-elementor' ),
					'style34' => esc_html__( 'Style 34 (Pro)', 'post-carousel-for-elementor' ),
					'style35' => esc_html__( 'Style 35 (Pro)', 'post-carousel-for-elementor' ),
					'style36' => esc_html__( 'Style 36 (Pro)', 'post-carousel-for-elementor' ),
					'style37' => esc_html__( 'Style 37 (Pro)', 'post-carousel-for-elementor' ),
					'style38' => esc_html__( 'Style 38 (Pro)', 'post-carousel-for-elementor' ),
					'style39' => esc_html__( 'Style 39 (Pro)', 'post-carousel-for-elementor' ),
					'style40' => esc_html__( 'Style 40 (Pro)', 'post-carousel-for-elementor' ),
					'style41' => esc_html__( 'Style 41 (Pro)', 'post-carousel-for-elementor' ),
				],
				'description' => 'See <a class="bwdeb-pro-promotion-text" href="https://bwdelementoraddons.com/post-carousel/" target="_blank"><b>Demo</b></a>. Get <a class="bwdeb-pro-promotion-text" href="https://codecanyon.net/item/creative-post-carousel-addon-for-elementor/41061763" target="_blank"><b>Pro...</b></a>',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'pcfe_image_show_switcher',
			[
				'label' => esc_html__( 'Image', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
				'label_off' => esc_html__( 'Hide', 'post-carousel-for-elementor' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'pcfe_title_show_switcher',
			[
				'label' => esc_html__( 'Title', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
				'label_off' => esc_html__( 'Hide', 'post-carousel-for-elementor' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'pcfe_title_tags',
			[
				'label' => esc_html__( 'Title HTML Tag', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'div',
				'options' => [
					'div'  => esc_html__( 'Div', 'post-carousel-for-elementor' ),
					'h1' => esc_html__( 'H1', 'post-carousel-for-elementor' ),
					'h2' => esc_html__( 'H2', 'post-carousel-for-elementor' ),
					'h3' => esc_html__( 'H3', 'post-carousel-for-elementor' ),
					'h4' => esc_html__( 'H4', 'post-carousel-for-elementor' ),
					'h5' => esc_html__( 'H5', 'post-carousel-for-elementor' ),
					'h6' => esc_html__( 'H6', 'post-carousel-for-elementor' ),
					'p' => esc_html__( 'p', 'post-carousel-for-elementor' ),
				],
				'condition' => [
					'pcfe_title_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'pcfe_description_show_switcher',
			[
				'label' => esc_html__( 'Description', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
				'label_off' => esc_html__( 'Hide', 'post-carousel-for-elementor' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'pcfe_the_post_description_words',
			[
				'label' => esc_html__( 'Word Length', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'pcfe_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '...', 'post-carousel-for-elementor' ),
				'label_block' => true,
				'condition' => [
					'pcfe_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'pcfe_taxo_icon',
			[
				'label' => esc_html__( 'All Taxo Icons', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SELECT,
				'separator' => 'before',
				'default' => 'show',
				'options' => [
					'none' => esc_html__( 'None', 'post-carousel-for-elementor' ),
					'show' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
				],
			]
		);
		$this->add_control(
			'pcfe_date_show_switcher',
			[
				'label' => esc_html__( 'Publish Date', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
				'label_off' => esc_html__( 'Hide', 'post-carousel-for-elementor' ),
				'separator' => 'before',
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'pcfe_blog_date_format',
			[
				'label' => esc_html__( 'Date Format', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'j M y', 'post-carousel-for-elementor' ),
				'placeholder' => esc_html__( 'j M y', 'post-carousel-for-elementor' ),
				'label_block' => true,
				'condition' => [
					'pcfe_date_show_switcher' => 'yes',
				],
				'description' => '<span class="pro-feature">Use WordPress date format. <a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank">More...</a></span>',
			]
		);
		$this->add_control(
			'pcfe_author_show_switcher',
			[
				'label' => esc_html__( 'Author', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
				'label_off' => esc_html__( 'Hide', 'post-carousel-for-elementor' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->add_control(
			'pcfe_author_indicator',
			[
				'label' => esc_html__( 'Author Indicator', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'none' => esc_html__( 'None', 'post-carousel-for-elementor' ),
					'gravatar' => esc_html__( 'Gravatar', 'post-carousel-for-elementor' ),
					'icon' => esc_html__( 'Author Icon', 'post-carousel-for-elementor' ),
				],
				'condition' => [
					'pcfe_author_show_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'pcfe_blog_gravader_height',
			[
				'label' => esc_html__( 'Gravader Size', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .pcfe_author-img img' => 'height: {{SIZE}}{{UNIT}} !important; width: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'pcfe_author_show_switcher' => 'yes',
					'pcfe_author_indicator' => 'gravatar',
				],
			]
		);
		$this->add_control(
			'pcfe_author_icon',
			[
				'label' => esc_html__( 'Icon', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-user-alt',
					'library' => 'solid',
				],
				'condition' => [
					'pcfe_author_show_switcher' => 'yes',
					'pcfe_author_indicator' => 'icon',
				],
			]
		);
		$this->add_responsive_control(
			'pcfe_blog_author_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .pcfe_author-img i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'pcfe_author_show_switcher' => 'yes',
					'pcfe_author_indicator' => 'icon',
				],
			]
		);
		$this->add_control(
			'pcfe_comments_show_switcher',
			[
				'label' => esc_html__( 'Comment', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
				'label_off' => esc_html__( 'Hide', 'post-carousel-for-elementor' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blogs_button',
			[
				'label' => esc_html__( 'Button', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'pcfe_button_show_switcher',
			[
				'label' => esc_html__( 'Button', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
				'label_off' => esc_html__( 'Hide', 'post-carousel-for-elementor' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'pcfe_button_types',
			[
				'label' => esc_html__( 'Button Type', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'text_icon',
				'options' => [
					'text_icon' => esc_html__( 'Text Icon', 'post-carousel-for-elementor' ),
					'icon' => esc_html__( 'Icon', 'post-carousel-for-elementor' ),
				],
			]
		);
		$this->add_control(
			'pcfe_blog_button_title',
			[
				'label' => esc_html__( 'Title', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Read More', 'post-carousel-for-elementor'),
				'label_block' => true,
				'condition' => [
					'pcfe_button_show_switcher' => 'yes',
				],
				'condition' => [
					'pcfe_button_types' => 'text_icon',
				],
			]
		);
		$this->add_responsive_control(
			'pcfe_button_icon_align',
			[
				'label' => esc_html__( 'Icon Align', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'right',
				'options' => [
					'none' => [
						'title' => esc_html__( 'None', 'post-carousel-for-elementor' ),
						'icon' => 'eicon-disable-trash-o',
					],
					'left' => [
						'title' => esc_html__( 'Left', 'post-carousel-for-elementor' ),
						'icon' => 'eicon-h-align-left',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'post-carousel-for-elementor' ),
						'icon' => 'eicon-h-align-right',
					],
				],
				'toggle' => true,
				'condition' => [
					'pcfe_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'pcfe_button_indicator_icon',
			[
				'label' => esc_html__( 'Icon', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-right',
					'library' => 'solid',
				],
				'condition' => [
					'pcfe_button_types' => 'text_icon',
					'pcfe_button_icon_align' => ['left', 'right'],
				],
			]
		);
		$this->add_control(
			'pcfe_blog_button_icon',
			[
				'label' => esc_html__( 'Icon', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-caret-right',
					'library' => 'solid',
				],
				'condition' => [
					'pcfe_button_types' => 'icon',
				],
			]
		);
		$this->add_control(
			'pcfe_button_open_switcher',
			[
				'label' => esc_html__( 'Open in new window', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'post-carousel-for-elementor' ),
				'label_off' => esc_html__( 'No', 'post-carousel-for-elementor' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'pcfe_button_show_switcher' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		function get_all_post_types() {
			$post_type_options = array(
				'post' => __('Posts', 'post-carousel-for-elementor'),
				'page' => __('Pages', 'post-carousel-for-elementor'),
			);
			$post_type_options['manual'] = esc_html__('Manual Selection', 'post-carousel-for-elementor');

			return $post_type_options;
		}
		$this->add_control(
			'selected_post_types',
			[
				'label' => __( 'Source', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'post',
				'multiple' => true,
				'options' => get_all_post_types(),
			]
		);

		$this->add_control(
			'pcfe_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', 'post-carousel-for-elementor' ),
			]
		);

		// Add custom query to retrieve all authors
		function get_all_authors() {
			$authors = get_users( array( 'orderby' => 'display_name' ) );
			$author_options = array();
			foreach ($authors as $author) {
				$author_options[$author->ID] = $author->display_name;
			}
			return $author_options;
		}
		$this->add_control(
            'pcfe_the_all_author',
            [
                'label' => __( 'Select Authors', 'post-carousel-for-elementor' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
				'label_block' => true,
                'options' => get_all_authors(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
            ]
        );
		// Retrieve all unique categories
		function get_all_categories() {
			$categories = get_categories();
			$category_options = array();
			foreach ($categories as $category) {
				$category_options[$category->term_id] = $category->name;
			}
			return $category_options;
		}

		$this->add_control(
			'pcfe_the_all_categories',
			[
				'label' => __( 'Select Categories', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => get_all_categories(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique tags
		function get_all_tags() {
			$tags = get_tags();
			$tag_options = array();
			foreach ($tags as $tag) {
				$tag_options[$tag->term_id] = $tag->name;
			}
			return $tag_options;
		}
		$this->add_control(
			'pcfe_the_all_tags',
			[
				'label' => __( 'Select Tags', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => get_all_tags(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all unique post formats
		function get_all_post_formats() {
			$post_formats = get_theme_support( 'post-formats' );
			
			// Check if $post_formats is an array
			if ( is_array( $post_formats ) && is_array( $post_formats[0] ) ) {
				$post_formats = $post_formats[0];
			} else {
				$post_formats = array();
			}
		
			$post_format_options = array();
			foreach ( $post_formats as $format ) {
				$post_format_options[$format] = ucfirst( $format );
			}
			return $post_format_options;
		}
		
		
		$this->add_control(
			'pcfe_the_all_post_formats',
			[
				'label' => __( 'Post Formats', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => get_all_post_formats(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		// Retrieve all posts
		function get_all_posts() {
			$posts = get_posts( array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => -1,
			) );

			$post_options = array();
			foreach ( $posts as $post ) {
				$post_options[$post->ID] = $post->post_title;
			}
			return $post_options;
		}
		$this->add_control(
			'pcfe_include_posts',
			[
				'label' => __( 'Include Posts', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => get_all_posts(),
				'condition' => [
					'selected_post_types' => ['manual'],
				],
			]
		);
		// Retrieve all posts
		function get_all_post() {
			$posts = get_posts( array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => -1,
			) );

			$post_options = array();
			foreach ( $posts as $post ) {
				$post_options[$post->ID] = $post->post_title;
			}
			return $post_options;
		}

		$this->add_control(
			'pcfe_exclude_post',
			[
				'label' => __( 'Exclude Posts', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'label_block' => true,
				'options' => get_all_post(),
				'condition' => [
					'selected_post_types' => ['post', 'page'],
				],
			]
		);
		

		$this->add_control(
			'pcfe_the_all_date',
			[
				'label' => esc_html__( 'Date', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'All', 'post-carousel-for-elementor' ),
					'd' => esc_html__( 'Today', 'post-carousel-for-elementor' ),
					'm' => esc_html__( 'Current Month', 'post-carousel-for-elementor' ),
					'coustom' => esc_html__( 'Custom', 'post-carousel-for-elementor' ),
				],
			]
		);
		$this->add_control(
			'pcfe_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2024', 'post-carousel-for-elementor' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'post-carousel-for-elementor' ),
				'label_block' => true,
				'condition' => [
					'pcfe_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_coustom_month',
			[
				'label' => esc_html__( 'Select Month', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SELECT,
				'multiple' => true,
				'default' => '0',
				'options' => [
					'0' => esc_html__( 'All', 'post-carousel-for-elementor' ),
					'1' => esc_html__( 'Jan', 'post-carousel-for-elementor' ),
					'2' => esc_html__( 'Feb', 'post-carousel-for-elementor' ),
					'3' => esc_html__( 'Mar', 'post-carousel-for-elementor' ),
					'4' => esc_html__( 'Apr', 'post-carousel-for-elementor' ),
					'5' => esc_html__( 'May', 'post-carousel-for-elementor' ),
					'6' => esc_html__( 'Jun', 'post-carousel-for-elementor' ),
					'7' => esc_html__( 'Jul', 'post-carousel-for-elementor' ),
					'8' => esc_html__( 'Aug', 'post-carousel-for-elementor' ),
					'9' => esc_html__( 'Sep', 'post-carousel-for-elementor' ),
					'10' => esc_html__( 'Oct', 'post-carousel-for-elementor' ),
					'11' => esc_html__( 'Nov', 'post-carousel-for-elementor' ),
					'12' => esc_html__( 'Dec', 'post-carousel-for-elementor' ),
				],
				'condition' => [
					'pcfe_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'post-carousel-for-elementor' ),
				'placeholder' => esc_html__( '00', 'post-carousel-for-elementor' ),
				'condition' => [
					'pcfe_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'pcfe_the_order_by',
			[
				'label' => esc_html__( 'Order By', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'all',
				'options' => [
					'all' => esc_html__( 'All', 'post-carousel-for-elementor' ),
					'author' => esc_html__( 'Author', 'post-carousel-for-elementor' ),
					'title' => esc_html__( 'Title', 'post-carousel-for-elementor' ),
					'id' => esc_html__( 'ID', 'post-carousel-for-elementor' ),
					'date' => esc_html__( 'Date', 'post-carousel-for-elementor' ),
					'rand' => esc_html__( 'Random', 'post-carousel-for-elementor' ),
				],
			]
		);
		$this->add_control(
			'pcfe_blog_order',
			[
				'label' => esc_html__( 'Order', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'DESC' => esc_html__( 'Descending', 'post-carousel-for-elementor' ),
					'ASC' => esc_html__( 'Ascending', 'post-carousel-for-elementor' ),
				],
			]
		);
		
		$this->add_control(
			'pcfe_categories_show_switcher',
			[
				'label' => esc_html__( 'Category', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
				'label_off' => esc_html__( 'Hide', 'post-carousel-for-elementor' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'pcfe_the_cat_show_status',
			[
				'label' => esc_html__( 'Show Status', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show_multiple_cat',
				'options' => [
					'show_multiple_cat' => esc_html__( 'Show Multiple Category', 'post-carousel-for-elementor' ),
					'show_main_cat' => esc_html__( 'Show Main Category', 'post-carousel-for-elementor' ),
				],
				'condition' => [
					'pcfe_categories_show_switcher' => 'yes',
				],
			]
		);
		
		$this->add_control(
			'pcfe_tags_show_switcher',
			[
				'label' => esc_html__( 'Tag', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
				'label_off' => esc_html__( 'Hide', 'post-carousel-for-elementor' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		
		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'pcfe_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				// 'default' => 'center',
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'post-carousel-for-elementor' ),
						'icon' => 'eicon-align-start-h',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'post-carousel-for-elementor' ),
						'icon' => 'eicon-align-stretch-h',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'post-carousel-for-elementor' ),
						'icon' => 'eicon-align-end-h',
					],
				],
				'toggle' => true,
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_content_padding',
            [
                'label' => esc_html__('Content Padding', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_bottom_part' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
			'pcfe_blog_taxo_gap',
			[
				'label' => esc_html__( 'Taxo Gap', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SLIDER,
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_meta' => 'gap: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .pcfe-btm-gap' => 'margin-block-end: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blog_title_style_section',
			[
				'label' => esc_html__( 'Title', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'pcfe_title_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'pcfe_blog_title_style_post'
		);
		$this->start_controls_tab(
			'pcfe_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'post-carousel-for-elementor' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_title_typography',
				'selector' => '{{WRAPPER}} .pcfe_title',
			]
		);
		$this->add_control(
			'pcfe_blog_title_color',
			[
				'label' => esc_html__( 'Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'pcfe_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'post-carousel-for-elementor' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .pcfe_blog_box:hover .pcfe_title',
			]
		);
		$this->add_control(
			'pcfe_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'pcfe_blog_title_border_radius',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
				'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .pcfe_title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'pcfe_blog_title_padding',
            [
                'label' => esc_html__('Padding', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_title' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'pcfe_blog_title_margin',
            [
                'label' => esc_html__('Margin', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_title' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blog_description_style_section',
			[
				'label' => esc_html__( 'Description', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'pcfe_description_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'pcfe_blog_description_style_post'
		);
		$this->start_controls_tab(
			'pcfe_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'post-carousel-for-elementor' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_description_typography',
				'selector' => '{{WRAPPER}} .pcfe_desce',
			]
		);
		$this->add_control(
			'pcfe_blog_description_color',
			[
				'label' => esc_html__( 'Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'pcfe_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'post-carousel-for-elementor' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .pcfe_blog_box:hover .pcfe_desce',
			]
		);
		$this->add_control(
			'pcfe_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'pcfe_blog_description_border_radius',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
				'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .pcfe_desce' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'pcfe_blog_desc_padding',
            [
                'label' => esc_html__('Padding', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_desce' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'pcfe_blog_desc_margin',
            [
                'label' => esc_html__('Margin', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_desce' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blog_button_style_section',
			[
				'label' => esc_html__( 'Button Style', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'pcfe_blog_button_options',
			[
				'label' => esc_html__( 'Button', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'pcfe_blog_button_style_post'
		);
		$this->start_controls_tab(
			'pcfe_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'post-carousel-for-elementor' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_button_typography',
				'selector' => '{{WRAPPER}} .pcfe_button, {{WRAPPER}} .pcfe_button a',
			]
		);
		$this->add_control(
			'pcfe_blog_button_color',
			[
				'label' => esc_html__( 'Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_button, {{WRAPPER}} .pcfe_button a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_button, {{WRAPPER}} .pcfe_button::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'pcfe_blog_button_border',
				'label' => esc_html__( 'Border', 'post-carousel-for-elementor' ),
				'selector' => '{{WRAPPER}} .pcfe_blog_bttn .pcfe_button',
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_button, {{WRAPPER}} .pcfe_blog_bttn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'pcfe_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'post-carousel-for-elementor' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .pcfe_button:hover, {{WRAPPER}} .pcfe_button:hover a',
			]
		);
		$this->add_control(
			'pcfe_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_button:hover, {{WRAPPER}} .pcfe_button:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_button:hover, {{WRAPPER}} .pcfe_button::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'pcfe_blog_button_border_hover',
				'label' => esc_html__( 'Border', 'post-carousel-for-elementor' ),
				'selector' => '{{WRAPPER}} .pcfe_blog_bttn .pcfe_button:hover',
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_button_bg_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_button:hover, {{WRAPPER}} .pcfe_blog_bttn:hover, {{WRAPPER}} .pcfe_button::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'pcfe_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
				'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .pcfe_button' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'pcfe_blog_button_icon_margin',
            [
                'label' => esc_html__('Margin', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_button' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'pcfe_blog_button_the_icon_margin',
            [
                'label' => esc_html__('Icon Margin', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
				'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}} .pcfe_button .pcfe_icons_right, {{WRAPPER}} .pcfe_button .pcfe_icons_left' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'pcfe_the_post_image_height_size',
			[
				'label' => esc_html__( 'Height', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 600,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_image' => 'height: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_button_image_overly_color',
			[
				'label' => esc_html__( 'Image Overlay', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_image_overly_b::before, {{WRAPPER}} .pcfe_image_overly_a::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_image img, {{WRAPPER}} .pcfe_blog_image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'pcfe_blog_image_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'post-carousel-for-elementor' ),
				'selector' => '{{WRAPPER}} .pcfe_blog_image img',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blog_author_style_section',
			[
				'label' => esc_html__( 'Author', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'pcfe_author_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'pcfe_blog_taxonomy_author_style_post'
		);
		$this->start_controls_tab(
			'pcfe_blog_taxonomy_author_normal_post',
			[
				'label' => esc_html__( 'Normal', 'post-carousel-for-elementor' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_taxonomy_author_typography',
				'selector' => '{{WRAPPER}} .pcfe_blog_user a, {{WRAPPER}} .pcfe_blog_user, {{WRAPPER}} .pcfe_blog_user .pcfe_icons',
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_author_color',
			[
				'label' => esc_html__( 'Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_author-img, {{WRAPPER}} .pcfe_blog_user a, {{WRAPPER}} .pcfe_blog_user, {{WRAPPER}} .pcfe_blog_user .pcfe_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_user::after, {{WRAPPER}} .pcfe_blog_user::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_author_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_user' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_taxonomy_author_border_radius',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_user' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'pcfe_blog_taxonomy_author_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'post-carousel-for-elementor' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_taxonomy_author_hover_typography',
				'selector' => '{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_user a, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_user, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_user .pcfe_icons',
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_author_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_user a, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_user, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_user .pcfe_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_user::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_author_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_user' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_taxonomy_author_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_user:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'pcfe_blog_author_padding',
            [
                'label' => esc_html__('Padding', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_user' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'pcfe_blog_author_margin',
            [
                'label' => esc_html__('Margin', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_user' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'pcfe_date_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'pcfe_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'pcfe_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', 'post-carousel-for-elementor' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .pcfe_blog_date, {{WRAPPER}} .pcfe_blog_date .pcfe_icons',
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_date, {{WRAPPER}} .pcfe_blog_date .pcfe_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_date::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_date' => 'background: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_date::before, {{WRAPPER}} .pcfe_blogPost_17 .pcfe_blog_date::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
			'pcfe_blog_taxonomy_date_box_size',
			[
				'label' => esc_html__( 'Box size', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::SLIDER,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_date' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'pcfe_select_style_selection' =>['style4', 'style11', 'style13', 'style17', 'style23', 'style30', 'style31'],
				],
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'pcfe_blog_taxonomy_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'post-carousel-for-elementor' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_taxonomy_date_hover_typography',
				'selector' => '{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_date, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_date .pcfe_icons',
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_date, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_date .pcfe_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_date::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_date' => 'background: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_date::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_taxonomy_date_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_date:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'pcfe_blog_date_padding',
            [
                'label' => esc_html__('Padding', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_date' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'pcfe_blog_date_margin',
            [
                'label' => esc_html__('Margin', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_date' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blog_comment_style_section',
			[
				'label' => esc_html__( 'Comment', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'pcfe_comments_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'pcfe_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'pcfe_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Normal', 'post-carousel-for-elementor' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_taxonomy_comment_typography',
				'selector' => '{{WRAPPER}} .pcfe_blog_comment, {{WRAPPER}} .pcfe_blog_comment a, {{WRAPPER}} .pcfe_blog_comment .pcfe_icons',
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_comment, {{WRAPPER}} .pcfe_blog_comment a, {{WRAPPER}} .pcfe_blog_comment .pcfe_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_comment_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_comment, {{WRAPPER}} .pcfe_blog_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_taxonomy_comment_border_radius',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'pcfe_blog_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'post-carousel-for-elementor' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_taxonomy_comment_hover_typography',
				'selector' => '{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_comment, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_comment a, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_comment .pcfe_icons',
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_comment, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_comment a, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_comment .pcfe_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_comment_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_comment, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_taxonomy_comment_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'pcfe_blog_comment_padding',
            [
                'label' => esc_html__('Padding', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_comment' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'pcfe_blog_comment_margin',
            [
                'label' => esc_html__('Margin', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_comment' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blog_tags_style_section',
			[
				'label' => esc_html__( 'Tags', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'pcfe_tags_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'pcfe_blog_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'pcfe_blog_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', 'post-carousel-for-elementor' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .pcfe_blog_tag, {{WRAPPER}} .pcfe_blog_tag a, {{WRAPPER}} .pcfe_blog_tag .pcfe_icons',
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_tag, {{WRAPPER}} .pcfe_blog_tag a, {{WRAPPER}} .pcfe_blog_tag .pcfe_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_tag, {{WRAPPER}} .pcfe_blog_tag::before, {{WRAPPER}} .pcfe_blog_tag::after' => 'background: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_taxonomy_tags_border_radius',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'pcfe_blog_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'post-carousel-for-elementor' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_tag, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_tag a, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_tag .pcfe_icons',
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_tag, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_tag a, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_tag .pcfe_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_tag, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_tag::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_taxonomy_tags_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
            'pcfe_taxonomy_tags_padding',
            [
                'label' => esc_html__('Padding', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_tag' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'pcfe_blog_tag_margin',
            [
                'label' => esc_html__('Margin', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_tag' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blog_category_style_section',
			[
				'label' => esc_html__( 'Category', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'pcfe_categories_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'pcfe_blog_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'pcfe_blog_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', 'post-carousel-for-elementor' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .pcfe_category li, {{WRAPPER}} .pcfe_category li a, {{WRAPPER}} .pcfe_category .pcfe_icons',
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_category li, {{WRAPPER}} .pcfe_category li a, {{WRAPPER}} .pcfe_category .pcfe_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .pcfe_category::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_category li, {{WRAPPER}} .pcfe_category li::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .pcfe_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_taxonomy_categories_border_radius',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_category li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'pcfe_blog_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'post-carousel-for-elementor' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_blog_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .pcfe_category li:hover, {{WRAPPER}} .pcfe_category:hover li a, {{WRAPPER}} .pcfe_category:hover .pcfe_icons',
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_box .pcfe_category li:hover, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_category li a, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_category li .pcfe_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_category li::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_box .pcfe_category li:hover, {{WRAPPER}} .pcfe_blog_box .pcfe_category li:hover::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_taxonomy_categories_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_box:hover .pcfe_category li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'pcfe_taxonomy_cat_padding',
            [
                'label' => esc_html__('Padding', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_category li' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'pcfe_blog_cat_margin',
            [
                'label' => esc_html__('Margin', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_category li' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		// Hover control start for box
		$this->start_controls_tabs(
			'pcfe_blog_box_style_post'
		);
		$this->start_controls_tab(
			'pcfe_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'post-carousel-for-elementor' ),
			]
		);
		// Normal Controls
		$this->add_control(
			'pcfe_blog_box_bg_color',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_n_bg_b:before, {{WRAPPER}} .pcfe_g_bg, {{WRAPPER}} .pcfe_blog_bottom_part, {{WRAPPER}} .pcfe-bg' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_box_heading',
			[
				'label' => esc_html__( 'Gradient Background', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'pcfe_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .pcfe_g_bg_b:before, {{WRAPPER}} .pcfe_g_bg, {{WRAPPER}} .pcfe_blog_bottom_part, {{WRAPPER}} .pcfe-bg',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'pcfe_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'post-carousel-for-elementor' ),
				'selector' => '{{WRAPPER}} .pcfe_g_bg_b:before, {{WRAPPER}} .pcfe_box_sha, {{WRAPPER}} .pcfe_box_style_cmn',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'pcfe_blog_box_border',
				'label' => esc_html__( 'Border', 'post-carousel-for-elementor' ),
				'selector' => '{{WRAPPER}} .pcfe_blog_box',
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_blog_box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'pcfe_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_box_margin_cmn' => 'margin-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; margin-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'pcfe_blog_box_padding',
            [
                'label' => esc_html__('Box Padding', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_box_padding_cmn' => 'padding-block: {{TOP}}{{UNIT}} {{BOTTOM}}{{UNIT}}; padding-inline: {{LEFT}}{{UNIT}} {{RIGHT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'pcfe_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'post-carousel-for-elementor' ),
			]
		);
		// Hover Controls
		$this->add_control(
			'pcfe_blog_box_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe_blog_box:hover .pcfe_n_bg_b::before, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_g_bg, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_bottom_part, {{WRAPPER}} .pcfe_blog_box:hover .pcfe-bg' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'pcfe_blog_box_heading_hover',
			[
				'label' => esc_html__( 'Gradient Background', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'pcfe_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'types' => [ 'gradient' ],
				'selector' => '{{WRAPPER}} .pcfe_blog_box:hover .pcfe_n_bg_b::before, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_g_bg, {{WRAPPER}} .pcfe_blog_box:hover .pcfe_blog_bottom_part, {{WRAPPER}} .pcfe_blog_box:hover .pcfe-bg',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'pcfe_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'post-carousel-for-elementor' ),
				'selector' => '{{WRAPPER}} .pcfe_g_bg_b:hover:before, {{WRAPPER}} .pcfe_box_sha:hover, {{WRAPPER}} .pcfe_box_style_cmn:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'pcfe_blog_box_border_hover',
				'label' => esc_html__( 'Border', 'post-carousel-for-elementor' ),
				'selector' => '{{WRAPPER}} .pcfe_blog_box:hover',
			]
		);
		$this->add_responsive_control(
            'pcfe_blog_the_box_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', 'post-carousel-for-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .pcfe_box_radi:hover, {{WRAPPER}} .pcfe_box_style_cmn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blogpost_carousel',
			[
				'label' => esc_html__( 'Carousel Controls', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'pcfe-blogpost-custom-id',
			[
				'label' => esc_html__( 'Custom Id', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'post-id', 'post-carousel-for-elementor' ),
			]
		);

		//item-gap
		$this->add_control(
			'pcfe_slide_margin',
			[
				'label' => esc_html__( 'Item Gap', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 20,
			]
		);

		//popover-responsive-device
		$this->add_control(
			'pcfe_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Device', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'post-carousel-for-elementor' ),
				'label_on' => esc_html__( 'Custom', 'post-carousel-for-elementor' ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

			$this->add_control(
				'pcfe_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 3,
				]
			);
			$this->add_control(
				'pcfe_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 2,
				]
			);
			$this->add_control(
				'pcfe_slide_mobile_view',
				[
					'label' => esc_html__( 'Mobile View', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);

		$this->end_popover();


		//popover-autoplay
		$this->add_control(
			'pcfe_aupoplay_popover',
			[
				'label' => esc_html__( 'More Options', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'post-carousel-for-elementor' ),
				'label_on' => esc_html__( 'Custom', 'post-carousel-for-elementor' ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

				//infinite_loop_switcher
				$this->add_control(
					'pcfe_infinite_autoplay_switcher',
					[
						'label' => esc_html__( 'Autoplay', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
						'label_off' => esc_html__( 'Hide', 'post-carousel-for-elementor' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'pcfe_infinite_loop_switcher',
					[
						'label' => esc_html__( 'Infinite Loop', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
						'label_off' => esc_html__( 'Hide', 'post-carousel-for-elementor' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'pcfe_HoverPause_switcher',
					[
						'label' => esc_html__( 'Hover Pause', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
						'label_off' => esc_html__( 'Hide', 'post-carousel-for-elementor' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'pcfe_centermode_switcher',
					[
						'label' => esc_html__( 'Center Mode', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
						'label_off' => esc_html__( 'Hide', 'post-carousel-for-elementor' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				$this->add_control(
					'pcfe_autoplay_timeout',
					[
						'label' => esc_html__( 'Autoplay TimeOut (ms)', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'pcfe_autoplay_speed',
					[
						'label' => esc_html__( 'Autoplay Speeds (ms)', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'pcfe_stace_padding',
					[
						'label' => esc_html__( 'Stage Padding (px)', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 0,
						'max' => 100000,
						'step' => 1,
						'default' => 8,
					]
				);

		$this->end_popover();


		//popover-//Arrow Navigation
		$this->add_control(
			'pcfe_arrow_popover',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'post-carousel-for-elementor' ),
				'label_on' => esc_html__( 'Custom', 'post-carousel-for-elementor' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//Arrow Navigation switcher
			$this->add_control(
				'pcfe_nav_switcher',
				[
					'label' => esc_html__( 'Arrow Navigation ?', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
					'label_off' => esc_html__( 'Hide', 'post-carousel-for-elementor' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//arrow type
			$this->add_control(
				'pcfe_nav_type',
				[
					'label' => esc_html__( 'Arrow Type', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'icon',
					'options' => [
						'icon'  => esc_html__( 'Icon', 'post-carousel-for-elementor' ),
						'text'  => esc_html__( 'Text', 'post-carousel-for-elementor' ),
					],
					'condition' => [
						'pcfe_nav_switcher' => 'yes',
					],
				]
			);
			//prev icon
			$this->add_control(
				'pcfe_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
					'condition' => [
						'pcfe_nav_type' => 'icon',
						'pcfe_nav_switcher' => 'yes',
					],
				]
			);
			//next icon
			$this->add_control(
				'pcfe_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
					'condition' => [
						'pcfe_nav_type' => 'icon',
						'pcfe_nav_switcher' => 'yes',
					],
				]
			);
			//prev text
			$this->add_control(
				'pcfe_nav_prev_text',
				[
					'label' => esc_html__( 'Previous Text', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Prev', 'post-carousel-for-elementor' ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'pcfe_nav_type' => 'text',
						'pcfe_nav_switcher' => 'yes',
					],
				]
			);
			//next text
			$this->add_control(
				'pcfe_nav_next_text',
				[
					'label' => esc_html__( 'Next Text', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Next', 'post-carousel-for-elementor' ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'pcfe_nav_type' => 'text',
						'pcfe_nav_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();



		//popover-//dots
		$this->add_control(
			'pcfe_dots_popover',
			[
				'label' => esc_html__( 'Navigation :: Dots', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'post-carousel-for-elementor' ),
				'label_on' => esc_html__( 'Custom', 'post-carousel-for-elementor' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//dots switcher
			$this->add_control(
				'pcfe_dots_switcher',
				[
					'label' => esc_html__( 'Active Dots ?', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'post-carousel-for-elementor' ),
					'label_off' => esc_html__( 'Hide', 'post-carousel-for-elementor' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//dots type
			$this->add_control(
				'pcfe_dots_type',
				[
					'label' => esc_html__( 'Type', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'dots',
					'options' => [
						'dots'  => esc_html__( 'Dots', 'post-carousel-for-elementor' ),
						'numbers'  => esc_html__( 'Numbers', 'post-carousel-for-elementor' ),
					],
					'condition' => [
						'pcfe_dots_switcher' => 'yes',
					],
				]
			);

			//dots type
			$this->add_control(
				'pcfe_dots_type_style',
				[
					'label' => esc_html__( 'Dot Style', 'post-carousel-for-elementor' ),
					'type' => Controls_Manager::SELECT,
					'default' => '',
					'options' => [
						''  => esc_html__( 'Default', 'post-carousel-for-elementor' ),
						'pcfe_dots1'  => esc_html__( 'Style 1', 'post-carousel-for-elementor' ),
						'pcfe_dots2'  => esc_html__( 'Style 2', 'post-carousel-for-elementor' ),
						'pcfe_dots3'  => esc_html__( 'Style 3', 'post-carousel-for-elementor' ),
						'pcfe_dots4'  => esc_html__( 'Style 4', 'post-carousel-for-elementor' ),
						'pcfe_dots5'  => esc_html__( 'Style 5', 'post-carousel-for-elementor' ),
						'pcfe_dots6'  => esc_html__( 'Style 6', 'post-carousel-for-elementor' ),
						'pcfe_dots7'  => esc_html__( 'Style 7', 'post-carousel-for-elementor' ),
						'pcfe_dots8'  => esc_html__( 'Style 8', 'post-carousel-for-elementor' ),
						'pcfe_dots9'  => esc_html__( 'Style 9', 'post-carousel-for-elementor' ),
						'pcfe_dots10'  => esc_html__( 'Style 10', 'post-carousel-for-elementor' ),
					],
					'condition' => [
						'pcfe_dots_switcher' => 'yes',
						'pcfe_dots_type' => 'dots',
					],
				]
			);

		$this->end_popover();


		$this->end_controls_section();




		$this->start_controls_section(
			'pcfe_blogpost_carousel_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'pcfe_nav_switcher' => 'yes'
				],
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs',
            [
                'separator' => 'before',
            ]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'post-carousel-for-elementor' ),
			]
		);

			//arrow-color
			$this->add_control(
				'pcfe_arrow_color',
				[
					'label' => esc_html__( 'Color', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next ' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'pcfe_arrow_background_color',
					'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next ',
				]
			);

			//size
			$this->add_responsive_control(
				'pcfe_arrow_size',
				[
					'label' => esc_html__( 'Icon Size', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 100,
							'step' => 1,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next' => 'font-size: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'pcfe_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'pcfe_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev span, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next span',
					'condition' => [
						'pcfe_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'pcfe_arrow_width',
				[
					'label' => esc_html__( 'Width', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 200,
							'step' => 1,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'pcfe_arrow_height',
				[
					'label' => esc_html__( 'Height', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 200,
							'step' => 1,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'pcfe_arrow_border',
					'label' => esc_html__( 'Border', 'post-carousel-for-elementor' ),
					'selector' => '{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next ',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'pcfe_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'pcfe_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', 'post-carousel-for-elementor' ),
					'selector' => '{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next ',
				]
			);

			//opacity
			$this->add_control(
				'pcfe_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', 'post-carousel-for-elementor'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'pcfe_photostack_visibility',
				[
					'label'     => esc_html__('Visibility', 'post-carousel-for-elementor'),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', 'post-carousel-for-elementor'),
						'hidden'  => esc_html__('Hidden', 'post-carousel-for-elementor'),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'pcfe_arrow_popover_style',
				[
					'label' => esc_html__( 'Position', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', 'post-carousel-for-elementor' ),
					'label_on' => esc_html__( 'Custom', 'post-carousel-for-elementor' ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow
				$this->add_control(
					'pcfe_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'pcfe_arrow_left_position_vertical',
					[
						'label' => esc_html__( 'Vertical', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'pcfe_arrow_left_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'pcfe_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'pcfe_arrow_Right_position_vertical',
					[
						'label' => esc_html__( 'Vertical', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'pcfe_arrow_right_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'post-carousel-for-elementor' ),
			]
		);

			//arrow-color
			$this->add_control(
				'pcfe_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev:hover, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'pcfe_arrow_background_color_hover',
					'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev:hover, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'pcfe_arrow_size_hover',
				[
					'label' => esc_html__( 'Size', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev:hover, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'pcfe_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev:hover span, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next:hover span',
					'condition' => [
						'pcfe_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'pcfe_arrow_width_hover',
				[
					'label' => esc_html__( 'Width', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev:hover, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next:hover ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'pcfe_arrow_height_hover',
				[
					'label' => esc_html__( 'Height', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev:hover, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next:hover ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'pcfe_arrow_border_hover',
					'label' => esc_html__( 'Border', 'post-carousel-for-elementor' ),
					'selector' => '{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev:hover, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'pcfe_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev:hover, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'pcfe_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', 'post-carousel-for-elementor' ),
					'selector' => '{{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-prev:hover, {{WRAPPER}} .pcfe-owl-nav button.pcfe-owl-next:hover',
				]
			);

			//opacity
			$this->add_control(
				'pcfe_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', 'post-carousel-for-elementor'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .pcfe-owl.pcfe-owl-carousel:hover .pcfe-owl-nav button.pcfe-owl-prev, {{WRAPPER}} .pcfe-owl.pcfe-owl-carousel:hover .pcfe-owl-nav button.pcfe-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'pcfe_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', 'post-carousel-for-elementor'),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', 'post-carousel-for-elementor'),
						'hidden'  => esc_html__('Hidden', 'post-carousel-for-elementor'),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .pcfe-owl.pcfe-owl-carousel:hover .pcfe-owl-nav button.pcfe-owl-prev, {{WRAPPER}} .pcfe-owl.pcfe-owl-carousel:hover .pcfe-owl-nav button.pcfe-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'pcfe_arrow_popover_style_hover',
				[
					'label' => esc_html__( 'Position', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', 'post-carousel-for-elementor' ),
					'label_on' => esc_html__( 'Custom', 'post-carousel-for-elementor' ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow-heading
				$this->add_control(
					'pcfe_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'pcfe_arrow_left_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .pcfe-owl.pcfe-owl-carousel:hover .pcfe-owl-nav button.pcfe-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'pcfe_arrow_left_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .pcfe-owl.pcfe-owl-carousel:hover .pcfe-owl-nav button.pcfe-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'pcfe_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'pcfe_arrow_Right_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .pcfe-owl.pcfe-owl-carousel:hover .pcfe-owl-nav button.pcfe-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'pcfe_arrow_right_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', 'post-carousel-for-elementor' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .pcfe-owl.pcfe-owl-carousel:hover .pcfe-owl-nav button.pcfe-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();

		$this->start_controls_section(
			'pcfe_blogpost_carousel_dots_style',
			[
				'label' => esc_html__( 'Navigation :: Dots', 'post-carousel-for-elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'pcfe_dots_switcher' => 'yes'
				],
			]
		);

		//popover-//dots Navigation
		$this->add_control(
			'pcfe_dots_popover_style',
			[
				'label' => esc_html__( 'Position', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'post-carousel-for-elementor' ),
				'label_on' => esc_html__( 'Custom', 'post-carousel-for-elementor' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//top
			$this->add_responsive_control(
				'pcfe_dots_Right_position_vertical',
				[
					'label' => esc_html__( 'Vertical', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -1000,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => -1000,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .pcfe-owl-dots' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'pcfe_dots_left_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', 'post-carousel-for-elementor' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -1000,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => -1000,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .pcfe-owl-dots' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//dots-gap
		$this->add_responsive_control(
			'pcfe_dots_gap_ertical',
			[
				'label' => esc_html__( 'Vertical Gap', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .pcfe-owl-dots' => 'margin-block-start: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//dots-gap
		$this->add_responsive_control(
			'pcfe_dots_gap',
			[
				'label' => esc_html__( 'Dots Gap', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot:not(:last-child) ' => 'margin-inline-end: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'pcfe_dots_alignment',
			[
				'label' => esc_html__( 'Alignment', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Left', 'post-carousel-for-elementor' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'post-carousel-for-elementor' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'Right', 'post-carousel-for-elementor' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .pcfe-owl-dots' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs_dots',
            [
                'separator' => 'before',
            ]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab_dots',
			[
				'label' => esc_html__( 'Normal', 'post-carousel-for-elementor' ),
			]
		);

		//dots-color
		$this->add_control(
			'pcfe_dots_number_color',
			[
				'label' => esc_html__( 'Color', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'pcfe_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'pcfe_dots_background_color',
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_dots_number_typography',
				'selector' => '{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot span',
				'condition' => [
					'pcfe_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'pcfe_dots_width',
			[
				'label' => esc_html__( 'Dot Size', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 50,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .pcfe-slider-common .pcfe-owl-dots .pcfe-owl-dot ' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
				],
			]
		);


		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'pcfe_dots_border',
				'label' => esc_html__( 'Border', 'post-carousel-for-elementor' ),
				'selector' => '{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'pcfe_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'pcfe_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', 'post-carousel-for-elementor' ),
				'selector' => '{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot',
			]
		);


		$this->end_controls_tab();



		//highlight-active-style------------------------------------------
		$this->start_controls_tab(
			'style_active_tab_dots',
			[
				'label' => esc_html__( 'Active', 'post-carousel-for-elementor' ),
			]
		);

		//dots-color
		$this->add_control(
			'pcfe_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot.active span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'pcfe_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'pcfe_dots_background_color_active',
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot.active',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_dots_number_typography_active',
				'selector' => '{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot.active span',
				'condition' => [
					'pcfe_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'pcfe_dots_width_active',
			[
				'label' => esc_html__( 'Width', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot.active' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'pcfe_dots_height_active',
			[
				'label' => esc_html__( 'Height', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot.active' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'pcfe_dots_border_active',
				'label' => esc_html__( 'Border', 'post-carousel-for-elementor' ),
				'selector' => '{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot.active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'pcfe_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'pcfe_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', 'post-carousel-for-elementor' ),
				'selector' => '{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot.active',
			]
		);

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab_dots',
			[
				'label' => esc_html__( 'Hover', 'post-carousel-for-elementor' ),
			]
		);

		//dots-color
		$this->add_control(
			'pcfe_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot:hover span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'pcfe_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'pcfe_dots_background_color_hover',
				'label' => esc_html__( 'Background', 'post-carousel-for-elementor' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot:hover',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pcfe_dots_number_typography_hover',
				'selector' => '{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot:hover span',
				'condition' => [
					'pcfe_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'pcfe_dots_width_hover',
			[
				'label' => esc_html__( 'Width', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot:hover' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'pcfe_dots_height_hover',
			[
				'label' => esc_html__( 'Height', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'pcfe_dots_border_hover',
				'label' => esc_html__( 'Border', 'post-carousel-for-elementor' ),
				'selector' => '{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'pcfe_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'post-carousel-for-elementor' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'pcfe_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', 'post-carousel-for-elementor' ),
				'selector' => '{{WRAPPER}} .pcfe-owl-dots .pcfe-owl-dot:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
	}


	protected function render(){
		$settings = $this->get_settings_for_display();
		// for-owl-carousel-start
		$pcfe_slide_margin = $settings['pcfe_slide_margin'];
		$pcfe_slide_mobile_view = $settings['pcfe_slide_mobile_view'];
		$pcfe_slide_tablet_view = $settings['pcfe_slide_tablet_view'];
		$pcfe_slide_desktop_view = $settings['pcfe_slide_desktop_view'];
		$pcfe_infinite_autoplay_switcher = $settings['pcfe_infinite_autoplay_switcher'];
		$pcfe_infinite_loop_switcher = $settings['pcfe_infinite_loop_switcher'];
		$pcfe_HoverPause_switcher = $settings['pcfe_HoverPause_switcher'];
		$pcfe_centermode_switcher = $settings['pcfe_centermode_switcher'];
		$pcfe_autoplay_timeout = $settings['pcfe_autoplay_timeout'];
		$pcfe_autoplay_speed = $settings['pcfe_autoplay_speed'];
		$pcfe_stace_padding = $settings['pcfe_stace_padding'];
		//nav--------------------------------------------------
		$pcfe_nav_switcher = $settings['pcfe_nav_switcher'];
		$pcfe_nav_type = $settings['pcfe_nav_type'];

		if( $pcfe_nav_switcher == 'yes' ) {
			if( $pcfe_nav_type == 'icon' ) {
				$prev = $settings['pcfe_nav_prev_arrow']['value'];
				$next = $settings['pcfe_nav_next_arrow']['value'];
			} else if( $pcfe_nav_type == 'text' ) {
				$prev = $settings['pcfe_nav_prev_text'];
				$next = $settings['pcfe_nav_next_text'];
			} 
		}
		$pcfe_dots_switcher = $settings['pcfe_dots_switcher'];
		$pcfe_dots_type = $settings['pcfe_dots_type'];
		// for-owl-carousel-end

		// For style to Ferdaus start
		$pcfe_styles = $settings['pcfe_select_style_selection'];
		$pcfe_title_tags = $settings['pcfe_title_tags'];
		$pcfe_post_per_page = $settings['pcfe_the_post_per_page'];
		$pcfe_post_description_words = $settings['pcfe_the_post_description_words'];
		$pcfe_blog_word_trim_indi = $settings['pcfe_blog_word_trim_indi'];
		$pcfe_blog_date_format = $settings['pcfe_blog_date_format'];

		$pcfe_author_indicator = $settings['pcfe_author_indicator'];
		$pcfe_button_icon_align = $settings['pcfe_button_icon_align'];
		// Button Icon only pcfe_blog_button_icon
		$pcfe_taxo_icon = $settings['pcfe_taxo_icon'];
		$pcfe_button_types = $settings['pcfe_button_types'];

		$pcfe_image_swtcher = $settings['pcfe_image_show_switcher'];
		$pcfe_title_swtcher = $settings['pcfe_title_show_switcher'];
		$pcfe_description_swtcher = $settings['pcfe_description_show_switcher'];
		$pcfe_date_swtcher = $settings['pcfe_date_show_switcher'];
		$pcfe_author_swtcher = $settings['pcfe_author_show_switcher'];
		$pcfe_comments_swtcher = $settings['pcfe_comments_show_switcher'];
		$pcfe_categories_swtcher = $settings['pcfe_categories_show_switcher'];
		$pcfe_tags_swtcher = $settings['pcfe_tags_show_switcher'];
		$pcfe_cat_show_status = $settings['pcfe_the_cat_show_status'];

		$pcfe_categorys_dataa = $settings['pcfe_the_all_categories'];
		$pcfe_the_blog_type = $settings['selected_post_types'];
		$pcfe_blog_order = $settings['pcfe_blog_order'];
		$pcfe_author = $settings['pcfe_the_all_author'];
		$pcfe_order_by = $settings['pcfe_the_order_by'];
		$pcfe_include_post = $settings['pcfe_include_posts'];
		$pcfe_exclude_post = $settings['pcfe_exclude_post'];
		$pcfe_tags_filter = $settings['pcfe_the_all_tags'];
		$pcfe_post_format = $settings['pcfe_the_all_post_formats'];
		
		$pcfe_the_all_date = $settings['pcfe_the_all_date'];
		if('d' === $pcfe_the_all_date){
			$pcfe_coustom_day = $pcfe_coustom_month = $pcfe_coustom_year = $wdbp_time = '';
			$day =  date('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $pcfe_the_all_date){
			$pcfe_coustom_day = $pcfe_coustom_month = $pcfe_coustom_year = $wdbp_time = '';
			$month =  date('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $pcfe_the_all_date){
			$pcfe_coustom_day = $pcfe_coustom_month = $pcfe_coustom_year = $wdbp_time = '';
			$year =  date('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $pcfe_the_all_date){
			$pcfe_coustom_year = $settings['pcfe_blog_coustom_year'];
			$pcfe_coustom_month = $settings['pcfe_blog_coustom_month'];
			$pcfe_coustom_day = $settings['pcfe_blog_coustom_day'];
			$wdbp_time = '';
		} else{
			$pcfe_coustom_day = $pcfe_coustom_month = $pcfe_coustom_year = $wdbp_time = '';
		}

		$pcfe_args = array(
			'posts_per_page' => $pcfe_post_per_page,
			'author__in'     => $pcfe_author,
			'tag__in'        => $pcfe_tags_filter,
			'category__in'   => $pcfe_categorys_dataa,
			'post_status'    => 'publish',
			'post__not_in'   => $pcfe_exclude_post,
			'orderby'        => $pcfe_order_by,
			'order'   		 => $pcfe_blog_order,
			'date_query'     => $wdbp_time,
			'year'           => $pcfe_coustom_year,
			'monthnum'       => $pcfe_coustom_month,
			'day'            => $pcfe_coustom_day,
		);
		
		// Check the selected post source
		if ($pcfe_the_blog_type === 'post') {
			$pcfe_args['post_type'] = 'post';
		} elseif ($pcfe_the_blog_type === 'page') {
			$pcfe_args['post_type'] = 'page';
		} elseif ($pcfe_the_blog_type === 'manual') {
			$pcfe_include_post = $settings['pcfe_include_posts']; // Assuming this contains the manually selected post IDs
			if (!empty($pcfe_include_post)) {
				$pcfe_args['post__in'] = $pcfe_include_post;
			} else {}
		}

		$pcfe_yes_value = 'yes';
		include 'common/condition.php';
		
		if ( $pcfe_styles == 'style1' || $pcfe_styles == 'style2' ) {?>
			<div class="<?php echo esc_attr($pcfe_blog_class); ?> pcfe-slider-common <?php echo esc_attr($settings['pcfe_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['pcfe-blogpost-custom-id'] ); ?>">
				<?php include 'common/variables.php'; ?>
				<div class="pcfe-owl pcfe-owl-carousel pcfe-owl-theme">
					<?php $wp_query = new \WP_Query( $pcfe_args );
					if($wp_query->have_posts()) :
						while($wp_query->have_posts()) : $wp_query->the_post();
							echo '<div class="col-pcfe">';?>
								<div class="pcfe_blog_box pcfe_box_padding_cmn"> 
									<?php 
									include 'common/thumbnail.php'; 
									include 'common/post-bottom-part.php'; 
									?>
								</div>
							</div>
						<?php endwhile; 
					endif;
					wp_reset_postdata(); ?>
				</div>
			</div>
			<?php
		} else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'post-carousel-for-elementor').'<a href="https://codecanyon.net/item/creative-post-carousel-addon-for-elementor/41061763" target="_blank"><b>'.esc_html__(' PRO...', 'post-carousel-for-elementor').'</b></a></h1>';
		}
	}
}
