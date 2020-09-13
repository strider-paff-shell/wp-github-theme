<?php get_template_part('parts/sidebar_categories');?>
<?php get_template_part('parts/sidebar_tags');?>
<?php get_template_part('parts/sidebar_archive');?>
<?php if ( is_active_sidebar( 'sidebar_widgets' ) ) : ?>
    <div id="primary-sidebar" class="sidebar_category_list widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar_widgets' ); ?>
    </div>
<?php endif; ?>
