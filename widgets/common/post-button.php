<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Post Button for Elementor
 *
 * @package Post Carousel for Elementor
 * @since 1.0.0
 * @version 1.0.0
 *
 * Plugin Name: Post Carousel for Elementor
 * Description: A simple and easy to use post carousel widget for Elementor.
 * Version: 1.0.0
 */

if($pcfe_yes_value === $settings['pcfe_button_show_switcher']){?>
    <div class="pcfe_blog_bttn">
        <a class="pcfe_button" href="<?php echo esc_url(get_permalink()); ?>" <?php if($pcfe_yes_value === $settings['pcfe_button_open_switcher']){ ?>target="_blank" <?php } ?>><?php if('icon' === $pcfe_button_types){ ?><i class="pcfe_icons <?php echo esc_attr($settings['pcfe_blog_button_icon']['value']); ?>"></i><?php } elseif('text_icon' === $pcfe_button_types){/* */ if('left' === $pcfe_button_icon_align){ ?><i class="pcfe_icons pcfe_icons_left <?php echo esc_attr($settings['pcfe_button_indicator_icon']['value']); ?>"></i><?php } echo esc_html($settings['pcfe_blog_button_title']);  if('right' === $pcfe_button_icon_align){ ?><i class="pcfe_icons pcfe_icons_right <?php echo esc_attr($settings['pcfe_button_indicator_icon']['value']); ?>"></i><?php } } ?></a>
    </div>
<?php } ?>