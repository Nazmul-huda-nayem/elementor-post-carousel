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

<?php if($pcfe_yes_value === $pcfe_categories_swtcher){ ?>
    <?php if('show_main_cat' === $pcfe_cat_show_status){ ?>
    <div class="pcfe_category"> 
        <?php $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            echo '<ul class="post-categories"><li><a href="'. esc_url(get_permalink()) .'">'.esc_html( $categories[0]->name ).'</a></li></ul>';
        } ?>
    </div> 
    <?php } elseif('show_multiple_cat' === $pcfe_cat_show_status){
    ?><div class="pcfe_category"> <?php the_category(); ?></div> <?php
    } ?>
<?php } ?>