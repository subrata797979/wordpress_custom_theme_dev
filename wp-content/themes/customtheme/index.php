<?php
/**
 * Template : index or landing page
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
            <div class="h2">
                <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">',esc_url(get_permalink())),'</a></h2>');?>
            </div>
            <div class="h4">
                <?php the_content();?>
            </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="col-md-4">
        <!-- sidebar -->
        <?php get_sidebar();?>
    </div>
  </div>
  
</div>

<!-- footer -->
<?php get_footer();?>