<?php get_header(); ?>

<!-- SECTION 1: THE HERO -->
<section class="hero">
    <div class="container">
        <h1>The One Product That Changes Everything.</h1>
        <p>Stop wasting time with complicated solutions. Squash the problem today with our premium solution.</p>
        <a href="#shop" class="btn-squash">Get It Now - $49</a>
    </div>
</section>

<!-- SECTION 2: THE BENEFITS (Grid) -->
<section style="background: #f4f4f4; padding: 60px 0;">
    <div class="container" style="display:grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap:30px;">
        <div style="background:#fff; padding:30px; border-radius:8px;">
            <h3>🚀 Fast Results</h3>
            <p>See changes in less than 24 hours. Guaranteed.</p>
        </div>
        <div style="background:#fff; padding:30px; border-radius:8px;">
            <h3>🛡️ Secure</h3>
            <p>Encrypted checkout and 30-day money-back guarantee.</p>
        </div>
        <div style="background:#fff; padding:30px; border-radius:8px;">
            <h3>⭐ Top Rated</h3>
            <p>Loved by over 10,000 happy customers worldwide.</p>
        </div>
    </div>
</section>

<!-- SECTION 3: THE SHOP (WooCommerce Integration) -->
<section id="shop" class="container" style="padding: 80px 20px; text-align:center;">
    <h2 style="font-size:2.5rem; margin-bottom:40px;">Select Your Package</h2>
    <?php echo do_shortcode('[products limit="3" columns="3"]'); ?>
</section>

<?php get_footer(); ?>