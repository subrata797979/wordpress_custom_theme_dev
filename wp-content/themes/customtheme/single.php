<?php
/**
 * Template : single page
 *
 * @package WordPress
 * @subpackage Custom_Theme
 * @since Custom Theme 1.0
 */
?>

<!-- header -->
<?php get_header();?>

<!-- middle -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content','single');?>
                    <hr>
                    <div class="py-3">
                        <h1 class="fw-bolder">Comment Section</h1>
                        <?php
                            if(comments_open() || get_comments_number()) {
                                comments_template();
                            }
                        ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php
                if(is_singular('post')) {
                    the_post_navigation(array(
                        'next_text' => 'Next',
                        'prev_text' => 'Previous'
                    ));
                }
            ?>
        </div>
        <div class="col-md-4">
            <?php get_sidebar();?>
        </div>
    </div>
    
</div>

<!-- footer -->
<?php get_footer();?>