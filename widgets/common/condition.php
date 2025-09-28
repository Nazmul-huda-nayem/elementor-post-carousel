<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Post Carousel for Elementor
 * 
 * @author  Post Carousel for Elementor
 * @package Post Carousel for Elementor
 * @version 1.0.0
 */

    $style_classes = array(
        'style1' => 'pcfe_blogPost_style1',
        'style2' => 'pcfe_blogPost_style1 pcfe_blogPost_style2',
    );
    $pcfe_blog_class = isset($style_classes[$pcfe_styles]) ? $style_classes[$pcfe_styles] : '';