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

<div class="pcfe_blog_meta">
    <!-- Post Date -->
    <?php include 'post-date.php';
    // Author Indicator
    if($pcfe_yes_value === $pcfe_author_swtcher){ ?>
        <div class="pcfe_author-img">
            <div class="pcfe_blog_user">
            <?php if('icon' === $pcfe_author_indicator){ ?>
                    <i class="pcfe_icons <?php echo esc_attr($settings['pcfe_author_icon']['value']); ?>"></i><?php 
                }elseif('gravatar' === $pcfe_author_indicator){
                    echo wp_kses_post(get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = '', $args = array( 'class' => 'wt-author-img' ) )); 
                }echo wp_kses_post(get_the_author_meta( 'nickname' )); ?>
            </div>
        </div>
    <?php }
    // Post Tags
    if($pcfe_yes_value === $pcfe_tags_swtcher){ ?>
        <div class="bedbp_the_tags">
            <div class="pcfe_blog_tag"> <?php echo esc_html(get_tags()); ?> </div>
        </div>
        <?php } ?>
    <?php 
    // Post Comments
    if($pcfe_yes_value === $pcfe_comments_swtcher){ ?>
        <div class="pcfe_blog_comment">
            <?php if('show' === $pcfe_taxo_icon){ ?><i class="pcfe_icons fas fa-comments"></i><?php } if(!have_comments()){ echo esc_html__('Comment (', 'post-carousel-for-elementor') . esc_html(get_comments_number()).')'; } ?>
        </div>
    <?php } 
    // Post Categories
    include 'post-category.php'; 
    ?>
    
</div>