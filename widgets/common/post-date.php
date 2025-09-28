<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Post Carousel for Elementor
 *
 * @package Post Carousel for Elementor
 * @since 1.0.0
 * @version 1.0.0
 *
 * Plugin Name: Post Carousel for Elementor
 * Description: A simple and easy to use post carousel widget for Elementor.
 * Version: 1.0.0
 */ 
?>

<?php if($pcfe_yes_value === $pcfe_date_swtcher){ ?>
    <div class="pcfe_blog_date">
        <?php
        if('show' === $pcfe_taxo_icon){ ?>
            <i class="pcfe_icons far fa-calendar-alt"></i><?php 
        } 
        echo wp_kses_post(get_the_date($pcfe_blog_date_format)); 
         ?>
    </div>
<?php } ?>