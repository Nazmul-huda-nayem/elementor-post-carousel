<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<div class="pcfe_blog_image">
    <a class="pcfe_imgnot" href="<?php echo esc_url(get_permalink()); ?>">
        <?php if(has_post_thumbnail()){
            echo '<img class="pcfe_blog_thumbnail" src="' . esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')) . '" alt="' . esc_attr(get_the_title()) . '" />';
        } else{ 
            echo '<h2 class="text-center ">' . esc_html__('No Thumbnail', 'post-carousel-for-elementor') . '</h2>';
        }?>
    </a>
</div>