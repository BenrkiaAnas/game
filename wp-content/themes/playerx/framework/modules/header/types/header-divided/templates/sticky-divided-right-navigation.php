<?php do_action('playerx_edge_action_before_top_navigation'); ?>

    <nav class="edgtf-main-menu edgtf-drop-down edgtf-divided-right-part <?php echo esc_attr($additional_class); ?>">
        <?php wp_nav_menu(array(
            'theme_location' => 'divided-right-navigation',
            'container' => '',
            'container_class' => '',
            'menu_class' => 'clearfix',
            'menu_id' => '',
            'fallback_cb' => 'top_navigation_fallback',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'walker' => new PlayerxEdgeClassStickyNavigationWalker()
        )); ?>
    </nav>

<?php do_action('playerx_edge_action_after_top_navigation'); ?>