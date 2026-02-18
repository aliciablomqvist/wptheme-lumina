<?php

if (!defined('ABSPATH')) {
    exit;
}

function lumina_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_theme_support('align-wide');
    add_theme_support('custom-logo');
    
    add_image_size('lumina-hero', 1920, 1080, true);
    add_image_size('lumina-square', 800, 800, true);
    add_image_size('lumina-portrait', 600, 900, true);
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'lumina-drinks'),
    ));
}
add_action('after_setup_theme', 'lumina_setup');

function lumina_enqueue_fonts() {
    wp_enqueue_style(
        'lumina-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&family=Inter:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'lumina_enqueue_fonts');

function lumina_enqueue_assets() {
    wp_enqueue_style('lumina-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    wp_enqueue_style('lumina-cocktails', get_template_directory_uri() . '/assets/css/cocktails.css', array(), '1.0.0');
    wp_enqueue_script('lumina-scripts', get_template_directory_uri() . '/assets/js/lumina.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'lumina_enqueue_assets');

function lumina_register_patterns() {
    
    register_block_pattern_category('lumina', array(
        'label' => __('Lumina Drinks', 'lumina-drinks'),
    ));
    
    register_block_pattern(
        'lumina/hero-overlay',
        array(
            'title' => 'Hero with Overlay Text',
            'description' => 'Full-width hero image with centered text overlay',
            'categories' => array('lumina'),
            'content' => '<!-- wp:cover {"url":"","dimRatio":30,"overlayColor":"black","minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","align":"full","className":"lumina-hero"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-center lumina-hero" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-black-background-color"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"5rem","fontWeight":"300","letterSpacing":"0.05em","lineHeight":"1.1","textTransform":"uppercase"}},"textColor":"white","fontFamily":"serif"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-serif-font-family" style="font-size:5rem;font-weight:300;letter-spacing:0.05em;line-height:1.1;text-transform:uppercase">CURATED<br>COCKTAILS</h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"3rem","fontWeight":"300","letterSpacing":"0.08em","lineHeight":"1.2"}},"textColor":"white","fontFamily":"serif"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-serif-font-family" style="font-size:3rem;font-weight:300;letter-spacing:0.08em;line-height:1.2">SEAMLESS<br>SERVICE</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem","lineHeight":"1.8"},"spacing":{"margin":{"top":"2rem","bottom":"3rem"}}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color" style="margin-top:2rem;margin-bottom:3rem;font-size:1rem;line-height:1.8">Lumina crafts cocktails that elevate your experience beyond the bottle, blending bespoke flavors with artistry and a commitment to making your event effortless and extraordinary.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"gold","textColor":"white","style":{"border":{"radius":"0px"},"typography":{"letterSpacing":"0.1em"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-gold-background-color has-text-color has-background wp-element-button" style="border-radius:0px;letter-spacing:0.1em">BOOK THE BAR</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->',
        )
    );
    
    register_block_pattern(
        'lumina/asymmetric-content',
        array(
            'title' => 'Asymmetric Text + Image',
            'description' => 'Text on left, image on right with offset',
            'categories' => array('lumina'),
            'content' => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"5%","right":"5%"}}},"backgroundColor":"cream","layout":{"type":"constrained","contentSize":"1400px"}} -->
<div class="wp-block-group has-cream-background-color has-background" style="padding-top:8rem;padding-right:5%;padding-bottom:8rem;padding-left:5%"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"6rem"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"3.5rem","fontWeight":"300","lineHeight":"1.1"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h2 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:3.5rem;font-weight:300;line-height:1.1">We Bring More<br>Than Just the Bar,</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.8"},"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="margin-top:2rem;margin-bottom:2rem;font-size:1.1rem;line-height:1.8">At Lumina, we believe your celebration should be a reflection of your culture, your vision, and your values. That\'s why we go beyond the pour to craft an experience you\'ll remember—working with you to bring your vision to life, infusing your event with style, expertise, and a commitment to making your event effortless and extraordinary.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"3rem","fontWeight":"300","lineHeight":"1.1"},"spacing":{"margin":{"top":"3rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
<h2 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="margin-top:3rem;font-size:3rem;font-weight:300;line-height:1.1">We Bring Peace Of<br>Mind.</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"3rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:3rem"><!-- wp:button {"backgroundColor":"charcoal","textColor":"white","style":{"border":{"radius":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-charcoal-background-color has-text-color has-background wp-element-button" style="border-radius:0px">BOOK THE BAR</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="" alt="Cocktail craftsmanship"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
        )
    );
    
    // PATTERN 3: 3-COLUMN DRINK SHOWCASE (like bottom of image)
    register_block_pattern(
        'lumina/drink-showcase',
        array(
            'title' => 'Drink Showcase Grid',
            'description' => '3-column drink presentation',
            'categories' => array('lumina'),
            'content' => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"beige","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-beige-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="" alt="Signature cocktail 1"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="" alt="Signature cocktail 2"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="" alt="Signature cocktail 3"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
        )
    );
    
    // PATTERN 4: MENU SECTION
    register_block_pattern(
        'lumina/menu-section',
        array(
            'title' => 'Drink Menu',
            'description' => 'Elegant drink menu layout',
            'categories' => array('lumina'),
            'content' => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"5%","right":"5%"}}},"backgroundColor":"cream","layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group has-cream-background-color has-background" style="padding-top:8rem;padding-right:5%;padding-bottom:8rem;padding-left:5%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3.5rem","fontWeight":"300","letterSpacing":"0.05em"},"spacing":{"margin":{"bottom":"4rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
<h2 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:4rem;font-size:3.5rem;font-weight:300;letter-spacing:0.05em">SIGNATURE COCKTAILS</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"3rem"},"padding":{"bottom":"2rem"}},"border":{"bottom":{"color":"
<div class="wp-block-group" style="border-bottom-color:
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:70%"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.8rem","fontWeight":"400","letterSpacing":"0.03em"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h3 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.8rem;font-weight:400;letter-spacing:0.03em">The Golden Hour</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:0.95rem">Bourbon, honey syrup, fresh lemon, aromatic bitters</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:30%"><!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"1.5rem","fontWeight":"300"}},"textColor":"gold","fontFamily":"serif"} -->
<p class="has-text-align-right has-gold-color has-text-color has-serif-font-family" style="font-size:1.5rem;font-weight:300">$14</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"3rem"},"padding":{"bottom":"2rem"}},"border":{"bottom":{"color":"
<div class="wp-block-group" style="border-bottom-color:
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:70%"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.8rem","fontWeight":"400","letterSpacing":"0.03em"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h3 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.8rem;font-weight:400;letter-spacing:0.03em">Midnight Garden</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:0.95rem">Gin, elderflower, cucumber, fresh mint, tonic</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:30%"><!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"1.5rem","fontWeight":"300"}},"textColor":"gold","fontFamily":"serif"} -->
<p class="has-text-align-right has-gold-color has-text-color has-serif-font-family" style="font-size:1.5rem;font-weight:300">$16</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"3rem"},"padding":{"bottom":"2rem"}},"border":{"bottom":{"color":"
<div class="wp-block-group" style="border-bottom-color:
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:70%"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.8rem","fontWeight":"400","letterSpacing":"0.03em"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h3 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.8rem;font-weight:400;letter-spacing:0.03em">Crimson Velvet</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:0.95rem">Vodka, raspberry, champagne, rose water</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:30%"><!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"1.5rem","fontWeight":"300"}},"textColor":"gold","fontFamily":"serif"} -->
<p class="has-text-align-right has-gold-color has-text-color has-serif-font-family" style="font-size:1.5rem;font-weight:300">$18</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
        )
    );
    
    // PATTERN 5: RESERVATION FORM
    register_block_pattern(
        'lumina/reservation-form',
        array(
            'title' => 'Reservation Form',
            'description' => 'Elegant booking form with date/time',
            'categories' => array('lumina'),
            'content' => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"5%","right":"5%"}}},"backgroundColor":"beige","layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group has-beige-background-color has-background" style="padding-top:8rem;padding-right:5%;padding-bottom:8rem;padding-left:5%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3.5rem","fontWeight":"300","letterSpacing":"0.05em"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
<h2 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:1rem;font-size:3.5rem;font-weight:300;letter-spacing:0.05em">RESERVE YOUR TABLE</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"4rem"}}},"textColor":"charcoal"} -->
<p class="has-text-align-center has-charcoal-color has-text-color" style="margin-bottom:4rem">Experience curated cocktails in an elegant setting</p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<form class="lumina-reservation-form" style="max-width: 600px; margin: 0 auto;">
    <div style="margin-bottom: 2rem;">
        <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase; color:
        <input type="text" required style="width: 100%; padding: 1rem; border: 1px solid
    </div>
    
    <div style="margin-bottom: 2rem;">
        <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase; color:
        <input type="email" required style="width: 100%; padding: 1rem; border: 1px solid
    </div>
    
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem;">
        <div>
            <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase; color:
            <input type="date" required style="width: 100%; padding: 1rem; border: 1px solid
        </div>
        <div>
            <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase; color:
            <select required style="width: 100%; padding: 1rem; border: 1px solid
                <option>5:00 PM</option>
                <option>6:00 PM</option>
                <option>7:00 PM</option>
                <option>8:00 PM</option>
                <option>9:00 PM</option>
                <option>10:00 PM</option>
            </select>
        </div>
    </div>
    
    <div style="margin-bottom: 2rem;">
        <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase; color:
        <select required style="width: 100%; padding: 1rem; border: 1px solid
            <option>2 Guests</option>
            <option>4 Guests</option>
            <option>6 Guests</option>
            <option>8+ Guests</option>
        </select>
    </div>
    
    <div style="margin-bottom: 2rem;">
        <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase; color:
        <textarea rows="4" style="width: 100%; padding: 1rem; border: 1px solid
    </div>
    
    <button type="submit" style="width: 100%; padding: 1.2rem 2rem; background:
</form>
<!-- /wp:html --></div>
<!-- /wp:group -->',
        )
    );
    
    // PATTERN 6: WINE & BEER LIST
    register_block_pattern(
        'lumina/wine-beer-list',
        array(
            'title' => 'Wine & Beer List',
            'description' => 'Categorized beverage menu',
            'categories' => array('lumina'),
            'content' => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"5%","right":"5%"}}},"backgroundColor":"cream","layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group has-cream-background-color has-background" style="padding-top:8rem;padding-right:5%;padding-bottom:8rem;padding-left:5%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3.5rem","fontWeight":"300","letterSpacing":"0.05em"},"spacing":{"margin":{"bottom":"6rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
<h2 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:6rem;font-size:3.5rem;font-weight:300;letter-spacing:0.05em">WINE & BEER SELECTION</h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"6rem"},"margin":{"bottom":"5rem"}}}} -->
<div class="wp-block-columns" style="margin-bottom:5rem"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"2rem","fontWeight":"300","letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"3rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
<h3 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:3rem;font-size:2rem;font-weight:300;letter-spacing:0.05em;text-transform:uppercase">Red Wine</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:2rem"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.3rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.3rem;font-weight:400">Cabernet Sauvignon</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:0.9rem">Napa Valley, 2020 — Glass $16 / Bottle $64</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:2rem"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.3rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.3rem;font-weight:400">Pinot Noir</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:0.9rem">Willamette Valley, 2021 — Glass $14 / Bottle $56</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"2rem","fontWeight":"300","letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"3rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
<h3 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:3rem;font-size:2rem;font-weight:300;letter-spacing:0.05em;text-transform:uppercase">White Wine</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:2rem"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.3rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.3rem;font-weight:400">Chardonnay</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:0.9rem">Sonoma Coast, 2022 — Glass $15 / Bottle $60</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:2rem"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.3rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.3rem;font-weight:400">Sauvignon Blanc</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:0.9rem">Marlborough, 2023 — Glass $13 / Bottle $52</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"4rem","bottom":"4rem"}}},"backgroundColor":"gold"} -->
<hr class="wp-block-separator has-text-color has-gold-color has-alpha-channel-opacity has-gold-background-color has-background" style="margin-top:4rem;margin-bottom:4rem"/>
<!-- /wp:separator -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"2rem","fontWeight":"300","letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"3rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
<h3 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:3rem;font-size:2rem;font-weight:300;letter-spacing:0.05em;text-transform:uppercase">Craft Beer</h3>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"4rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:2rem"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.3rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.3rem;font-weight:400">West Coast IPA</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:0.9rem">Local Brewery — Draft $8 / Bottle $10</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:2rem"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.3rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.3rem;font-weight:400">Belgian Blonde</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:0.9rem">Imported — Bottle $12</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
        )
    );
    
  // PATTERN 7: INSTAGRAM FEED
register_block_pattern(
    'lumina/instagram-feed',
    array(
        'title' => 'Instagram Feed',
        'description' => 'Social media gallery grid',
        'categories' => array('lumina'),
        'content' => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"beige","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-beige-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:0;padding-bottom:6rem;padding-left:0"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3rem","fontWeight":"300","letterSpacing":"0.05em"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
<h2 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:1rem;font-size:3rem;font-weight:300;letter-spacing:0.05em">FOLLOW @NOIRNECTAR</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"4rem"}}},"textColor":"charcoal"} -->
<p class="has-text-align-center has-charcoal-color has-text-color" style="margin-bottom:4rem">See what we\'re crafting daily</p>
<!-- /wp:paragraph -->

<!-- wp:gallery {"columns":6,"linkTo":"none","sizeSlug":"medium","className":"lumina-instagram-grid"} -->
<figure class="wp-block-gallery has-nested-images columns-6 is-cropped lumina-instagram-grid">
<!-- wp:image {"sizeSlug":"medium"} -->
<figure class="wp-block-image size-medium"><img src="" alt="Instagram post 1"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"medium"} -->
<figure class="wp-block-image size-medium"><img src="" alt="Instagram post 2"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"medium"} -->
<figure class="wp-block-image size-medium"><img src="" alt="Instagram post 3"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"medium"} -->
<figure class="wp-block-image size-medium"><img src="" alt="Instagram post 4"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"medium"} -->
<figure class="wp-block-image size-medium"><img src="" alt="Instagram post 5"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"medium"} -->
<figure class="wp-block-image size-medium"><img src="" alt="Instagram post 6"/></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"3rem"}}}} -->
<div class="wp-block-buttons" style="margin-top:3rem"><!-- wp:button {"backgroundColor":"charcoal","textColor":"white","style":{"border":{"radius":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-charcoal-background-color has-text-color has-background wp-element-button" href="https://instagram.com/noirnectar" style="border-radius:0px">FOLLOW US ON INSTAGRAM</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->',
    )
);
    
    register_block_pattern(
        'lumina/story-section',
        array(
            'title' => 'Our Story',
            'description' => 'Brand history and philosophy',
            'categories' => array('lumina'),
            'content' => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"10rem","bottom":"10rem","left":"5%","right":"5%"}}},"backgroundColor":"cream","layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group has-cream-background-color has-background" style="padding-top:10rem;padding-right:5%;padding-bottom:10rem;padding-left:5%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"4rem","fontWeight":"300","letterSpacing":"0.05em"},"spacing":{"margin":{"bottom":"2rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
<h2 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:2rem;font-size:4rem;font-weight:300;letter-spacing:0.05em">OUR STORY</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.3rem","lineHeight":"1.8"},"spacing":{"margin":{"bottom":"3rem"}}},"textColor":"gold","fontFamily":"serif"} -->
<p class="has-text-align-center has-gold-color has-text-color has-serif-font-family" style="margin-bottom:3rem;font-size:1.3rem;line-height:1.8">Est. 2018</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.2rem","lineHeight":"2"},"spacing":{"margin":{"bottom":"2rem"}}},"textColor":"charcoal"} -->
<p class="has-text-align-center has-charcoal-color has-text-color" style="margin-bottom:2rem;font-size:1.2rem;line-height:2">Lumina began with a simple belief: that cocktails are more than drinks—they\'re experiences, memories, and moments of connection.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1rem","lineHeight":"2"},"spacing":{"margin":{"bottom":"2rem"}}},"textColor":"charcoal"} -->
<p class="has-text-align-center has-charcoal-color has-text-color" style="margin-bottom:2rem;font-size:1.1rem;line-height:2">Founded in Los Angeles by mixologist Alex Rivera, we\'ve crafted over 10,000 cocktails for events ranging from intimate dinners to galas of 500 guests.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1rem","lineHeight":"2"},"spacing":{"margin":{"bottom":"3rem"}}},"textColor":"charcoal"} -->
<p class="has-text-align-center has-charcoal-color has-text-color" style="margin-bottom:3rem;font-size:1.1rem;line-height:2">Every cocktail we create honors tradition while embracing innovation, using locally-sourced ingredients and sustainable practices.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"4rem","bottom":"4rem"}}},"backgroundColor":"gold"} -->
<hr class="wp-block-separator has-text-color has-gold-color has-alpha-channel-opacity has-gold-background-color has-background" style="margin-top:4rem;margin-bottom:4rem"/>
<!-- /wp:separator -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"5rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"2rem","fontWeight":"300"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h3 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:2rem;font-weight:300">Our Philosophy</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.9"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:1rem;line-height:1.9">We believe in craftsmanship, sustainability, and creating moments that matter. Each ingredient is thoughtfully sourced, each recipe meticulously tested, and each cocktail crafted with care.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"2rem","fontWeight":"300"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h3 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:2rem;font-weight:300">Our Values</h3>
<!-- /wp:heading -->

<!-- wp:list {"style":{"typography":{"fontSize":"1rem","lineHeight":"2"}},"textColor":"charcoal"} -->
<ul class="has-charcoal-color has-text-color" style="font-size:1rem;line-height:2"><li>Quality over quantity</li><li>Sustainable practices</li><li>Local partnerships</li><li>Continuous innovation</li><li>Exceptional service</li></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
        )
    );
    
    register_block_pattern(
        'lumina/events-calendar',
        array(
            'title' => 'Events Calendar',
            'description' => 'Upcoming events listing',
            'categories' => array('lumina'),
            'content' => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"5%","right":"5%"}}},"backgroundColor":"beige","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-beige-background-color has-background" style="padding-top:8rem;padding-right:5%;padding-bottom:8rem;padding-left:5%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3.5rem","fontWeight":"300","letterSpacing":"0.05em"},"spacing":{"margin":{"bottom":"5rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
<h2 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:5rem;font-size:3.5rem;font-weight:300;letter-spacing:0.05em">UPCOMING EVENTS</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"3rem","right":"3rem"},"margin":{"bottom":"2rem"}},"border":{"width":"1px","color":"#C9A961"}},"backgroundColor":"cream","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-cream-background-color has-background" style="border-color:#C9A961;border-width:1px;margin-bottom:2rem;padding-top:3rem;padding-right:3rem;padding-bottom:3rem;padding-left:3rem"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"3rem","fontWeight":"300","lineHeight":"1"}},"textColor":"gold","fontFamily":"serif"} -->
<h3 class="wp-block-heading has-gold-color has-text-color has-serif-font-family" style="font-size:3rem;font-weight:300;line-height:1">14<br><span style="font-size: 1.2rem; letter-spacing: 0.1em;">FEB</span></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"2rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:2rem;font-weight:400">Valentine\'s Day</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:1rem">Romantic cocktails & live music • 7:00 PM - 11:00 PM</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"charcoal","textColor":"white","style":{"border":{"radius":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-charcoal-background-color has-text-color has-background wp-element-button" style="border-radius:0px">BOOK</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"3rem","right":"3rem"},"margin":{"bottom":"2rem"}},"border":{"width":"1px","color":"
<div class="wp-block-group has-border-color has-cream-background-color has-background" style="border-color:
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:heading {"level":3, "className":"event-date","style":{"typography":{"fontSize":"3rem","fontWeight":"300","lineHeight":"1"}},"textColor":"gold","fontFamily":"serif"} -->
<h3 class="wp-block-heading has-gold-color has-text-color has-serif-font-family" style="font-size:3rem;font-weight:300;line-height:1">22<br><span style="font-size: 1.2rem; letter-spacing: 0.1em;">FEB</span></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:heading {"level":4,"className":"event-date","style":{"typography":{"fontSize":"2rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:2rem;font-weight:400">Mixology Class</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:1rem">Learn to make three of our signature cocktails • 6:00 PM - 8:00 PM </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"charcoal","textColor":"white","style":{"border":{"radius":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-charcoal-background-color has-text-color has-background wp-element-button" style="border-radius:0px">BOOK</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem","left":"3rem","right":"3rem"}}},"border":{"width":"1px","color":"
<div class="wp-block-group has-border-color has-cream-background-color has-background" style="border-color:
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"3rem","fontWeight":"300","lineHeight":"1"}},"textColor":"gold","fontFamily":"serif"} -->
<h3 class="wp-block-heading has-gold-color has-text-color has-serif-font-family" style="font-size:3rem;font-weight:300;line-height:1">01<br><span style="font-size: 1.2rem; letter-spacing: 0.1em;">MAR</span></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"2rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:2rem;font-weight:400">Spring Cocktail Menu Launch</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:1rem">Exclusive tasting of new spring themed cocktails</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"charcoal","textColor":"white","style":{"border":{"radius":"0px"}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-charcoal-background-color has-text-color has-background wp-element-button" style="border-radius:0px border-color;none;">BOOK</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->',
        )
    );
    
    // PATTERN 10: FULL MENU PAGE
    register_block_pattern(
        'lumina/full-menu',
        array(
            'title' => 'Full Cocktail Menu',
            'description' => 'Complete categorized drink menu',
            'categories' => array('lumina'),
            'content' => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","left":"5%","right":"5%"}}},"backgroundColor":"cream","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group has-cream-background-color has-background" style="padding-top:6rem;padding-right:5%;padding-bottom:6rem;padding-left:5%"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"4rem","fontWeight":"300","letterSpacing":"0.05em"},"spacing":{"margin":{"bottom":"6rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
<h2 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:6rem;font-size:4rem;font-weight:300;letter-spacing:0.05em">COCKTAIL MENU</h2>
<!-- /wp:heading -->

<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"8rem"},"margin":{"bottom":"6rem"}}}} -->
<div class="wp-block-columns" style="margin-bottom:6rem"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"300","letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"3rem"}}},"textColor":"gold","fontFamily":"serif"} -->
<h3 class="wp-block-heading has-gold-color has-text-color has-serif-font-family" style="margin-bottom:3rem;font-size:2.5rem;font-weight:300;letter-spacing:0.05em;text-transform:uppercase">Classics</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2.5rem"},"padding":{"bottom":"1.5rem"}},"border":{"bottom":{"color":"
<div class="wp-block-group" style="border-bottom-color:
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.5rem;font-weight:400">Old Fashioned</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:0.95rem">Bourbon, sugar, bitters, orange</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"1.5rem","fontWeight":"300"}},"textColor":"gold","fontFamily":"serif"} -->
<p class="has-text-align-right has-gold-color has-text-color has-serif-font-family" style="font-size:1.5rem;font-weight:300">$14</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2.5rem"},"padding":{"bottom":"1.5rem"}},"border":{"bottom":{"color":"
<div class="wp-block-group" style="border-bottom-color:
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.5rem;font-weight:400">Negroni</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:0.95rem">Gin, Campari, sweet vermouth</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"1.5rem","fontWeight":"300"}},"textColor":"gold","fontFamily":"serif"} -->
<p class="has-text-align-right has-gold-color has-text-color has-serif-font-family" style="font-size:1.5rem;font-weight:300">$15</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"300","letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"3rem"}}},"textColor":"gold","fontFamily":"serif"} -->
<h3 class="wp-block-heading has-gold-color has-text-color has-serif-font-family" style="margin-bottom:3rem;font-size:2.5rem;font-weight:300;letter-spacing:0.05em;text-transform:uppercase">Signature</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2.5rem"},"padding":{"bottom":"1.5rem"}},"border":{"bottom":{"color":"
<div class="wp-block-group" style="border-bottom-color:
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.5rem;font-weight:400">Golden Hour</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:0.95rem">Bourbon, honey, lemon, bitters</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"1.5rem","fontWeight":"300"}},"textColor":"gold","fontFamily":"serif"} -->
<p class="has-text-align-right has-gold-color has-text-color has-serif-font-family" style="font-size:1.5rem;font-weight:300">$16</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2.5rem"},"padding":{"bottom":"1.5rem"}},"border":{"bottom":{"color":"
<div class="wp-block-group" style="border-bottom-color:
<div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
<h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.5rem;font-weight:400">Midnight Garden</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"}},"textColor":"charcoal"} -->
<p class="has-charcoal-color has-text-color" style="font-size:0.95rem">Gin, elderflower, cucumber, mint</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"1.5rem","fontWeight":"300"}},"textColor":"gold","fontFamily":"serif"} -->
<p class="has-text-align-right has-gold-color has-text-color has-serif-font-family" style="font-size:1.5rem;font-weight:300">$17</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
        )
    );
}
add_action('init', 'lumina_register_patterns');

/**
 * Recipe Calculator Shortcode
 * Usage: [recipe_calculator name="Mojito" base_servings="1"]
 */
function lumina_recipe_calculator($atts) {
    $atts = shortcode_atts(array(
        'name' => 'Cocktail',
        'base_servings' => '1',
    ), $atts);
    
    ob_start();
    ?>
    <div class="lumina-recipe-calculator" style="max-width: 600px; margin: 3rem auto; padding: 3rem; background: #F5F1E8; border: 2px solid #C9A961;">
        <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 2.5rem; font-weight: 300; text-align: center; margin-bottom: 2rem; color: #2C2C2C;"><?php echo esc_html($atts['name']); ?> Recipe</h3>
        
        <div style="margin-bottom: 2rem; text-align: center;">
            <label style="display: block; margin-bottom: 1rem; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase;">SERVINGS:</label>
            <input type="number" id="servings" value="<?php echo esc_attr($atts['base_servings']); ?>" min="1" max="20" style="width: 100px; padding: 0.8rem; border: 1px solid #C9A961; background: #FFFFFF; font-size: 1.5rem; text-align: center;">
        </div>
        
        <div id="ingredients" style="margin-bottom: 2rem;">
            <div style="display: flex; justify-content: space-between; padding: 1rem; border-bottom: 1px solid #E8DCC8;">
                <span>White Rum</span>
                <span class="ingredient-amount" data-base="2">2 oz</span>
            </div>
            <div style="display: flex; justify-content: space-between; padding: 1rem; border-bottom: 1px solid #E8DCC8;">
                <span>Fresh Lime Juice</span>
                <span class="ingredient-amount" data-base="1">1 oz</span>
            </div>
            <div style="display: flex; justify-content: space-between; padding: 1rem; border-bottom: 1px solid #E8DCC8;">
                <span>Simple Syrup</span>
                <span class="ingredient-amount" data-base="0.5">0.5 oz</span>
            </div>
            <div style="display: flex; justify-content: space-between; padding: 1rem; border-bottom: 1px solid #E8DCC8;">
                <span>Fresh Mint</span>
                <span class="ingredient-amount" data-base="10">10 leaves</span>
            </div>
            <div style="display: flex; justify-content: space-between; padding: 1rem;">
                <span>Soda Water</span>
                <span class="ingredient-amount" data-base="4">4 oz</span>
            </div>
        </div>
        
        <div style="padding: 1.5rem; background: #E8DCC8; text-align: center; color: #2C2C2C;">
            <strong style="font-size: 1.1rem; letter-spacing: 0.05em;">INSTRUCTIONS:</strong><br>
            <p style="margin-top: 1rem; line-height: 1.8;">Muddle mint with lime juice and syrup. Add rum and ice. Top with soda water. Garnish with mint sprig.</p>
        </div>
    </div>
    
    <script>
    (function() {
        const servingsInput = document.getElementById('servings');
        const amounts = document.querySelectorAll('.ingredient-amount');
        
        servingsInput.addEventListener('input', function() {
            const multiplier = this.value;
            amounts.forEach(function(amount) {
                const base = parseFloat(amount.dataset.base);
                const newAmount = (base * multiplier).toFixed(1);
                const unit = amount.textContent.split(' ')[1] || '';
                amount.textContent = newAmount + ' ' + unit;
            });
        });
    })();
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('recipe_calculator', 'lumina_recipe_calculator');
