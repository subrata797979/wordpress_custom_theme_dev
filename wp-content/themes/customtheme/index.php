<!-- header -->
<?php get_header();?>


<!-- middle -->
<div class="container py-3">
    <?php if(have_posts()) : ?>
    <ol>
        <?php while(have_posts()) : the_post(); ?>
            <li class="h2">
                <?php the_title();?>
                <div class="h4">
                    <?php the_content();?>
                </div>
            </li>
        <?php endwhile; ?>
    </ol>
    <?php endif; ?>
</div>


<!-- footer -->
<?php get_footer();?>