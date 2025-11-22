<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
    // Trigger the Urgency Bar
    if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } 
?>

<header class="squash-header">
    <a href="<?php echo home_url(); ?>" class="squash-logo">
        <?php bloginfo('name'); ?>
    </a>
    
    <?php if ( class_exists( 'WooCommerce' ) ) : ?>
        <a href="<?php echo wc_get_cart_url(); ?>" style="text-decoration:none; color:#333; font-weight:bold;">
            🛒 Cart
        </a>
    <?php endif; ?>
</header>