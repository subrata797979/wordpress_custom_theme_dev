<?php
/**
 * Template Name: page-home
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
    <div class="my-5 p-5 bg-primary text-white rounded">
        <h1>Welcome</h1>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
    </div>
    <div class="row">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <?php the_content();?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<!-- footer -->
<?php get_footer();?>