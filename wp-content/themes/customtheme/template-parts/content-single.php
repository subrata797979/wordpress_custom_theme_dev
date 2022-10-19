<?php
/**
 * Template : single content for post
 *
 * @package WordPress
 * @subpackage Custom_Theme
 * @since Custom Theme 1.0
 */
?>

<div id="post-<?php the_ID()?>" <?php post_class();?>>
    <div class="h2">
        <?php the_title();?>
    </div>
    <div class="h5 py-3">
        <?php the_content();?>
    </div>
    <div class="h6">
        <?php the_date();?>
    </div>

    <?php
        wp_link_pages(array(
            'before'        => '<div class="page-links"><span class="page-links-title">'.__('Pages - ','customtheme').'</span>',
            'after'         => '</div>',
            'link_before'   => '<span>',
            'link_after'    => '</span>',
            'pagelink'      => 'Page %',
            'separator'     => ', '
        ));
    ?>
</div>