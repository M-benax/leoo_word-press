<?php
// 1. Setup Theme
function squash_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'squash_setup' );

// 2. Load CSS
function squash_scripts() {
    wp_enqueue_style( 'squash-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'squash_scripts' );

// 3. SQUASH THE BLOAT (Performance)
// Remove emojis, embeds, and xmlrpc for speed
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
add_filter('xmlrpc_enabled', '__return_false');

// 4. The "Urgency" Bar Hook
function squash_urgency_bar() {
    if(is_front_page()) {
        echo '<div style="background:#000; color:#fff; text-align:center; padding:10px; font-size:14px;">
              🔥 <strong>High Demand:</strong> 50% OFF Sale Ends Tonight!
              </div>';
    }
}
add_action('wp_body_open', 'squash_urgency_bar');
?>