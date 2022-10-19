<?php
/**
 * Template Name: page-slim
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
        <div class="col-md-6 offset-md-3">
        <?php if(have_posts()) : ?>
            <ul>
                <?php while(have_posts()) : the_post(); ?>
                    <li class="h2">
                        <div class="h1 text-center">
                            <?php the_title();?>
                        </div>
                        <div class="h4">
                            <?php the_content();?>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</div>


<!-- footer -->
<?php get_footer();?>