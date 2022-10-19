<?php
/**
 * Template : sidebar
 *
 * @package WordPress
 * @subpackage Custom_Theme
 * @since Custom Theme 1.0
 */
?>

<div class="container">
    <?php
        if(is_active_sidebar('sidebar-1')) {
            echo '<aside id="secondary" class="sidebar widget-area" role="complementary">';
            dynamic_sidebar('sidebar-1');
            echo '</aside>';
        }
    ?>
</div>
