<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Post Bottom Part for Elementor
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
<div class="pcfe_blog_bottom_part pcfe_box_style_cmn">

<?php 
    // Post Meta
    include 'post-meta.php';
    // Post Title
    if($pcfe_yes_value === $pcfe_title_swtcher){ ?>
        <<?php echo esc_attr($pcfe_title_tags); ?> class="pcfe_blog_title">
            <a  class="pcfe_title" href="<?php echo esc_url(get_permalink()); ?>" ><?php echo esc_html(get_the_title()); ?></a>
        </<?php echo esc_attr($pcfe_title_tags); ?>>
    <?php } 
   
    // Post Descrition
    if($pcfe_yes_value === $pcfe_description_swtcher){?>
        <div class="pcfe_blog_description">
            <div class="pcfe_desce"><?php echo wp_kses_post(wp_trim_words(get_the_content(), $pcfe_post_description_words, $pcfe_blog_word_trim_indi)); ?></div>
        </div><?php
    }
    // Post Button
    include 'post-button.php';
    ?>

</div>