<?php
return array(
    'title' => 'Hero with Overlay Text',
    'description' => 'Full-width hero image with centered text overlay',
    'categories' => array('lumina'),
    'content' => '
<!-- wp:cover {"url":"","dimRatio":30,"overlayColor":"black","minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","align":"full","className":"lumina-hero"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-center-center lumina-hero" style="min-height:100vh">
    <span aria-hidden="true" class="wp-block-cover__background has-black-background-color"></span>
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"800px"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"5rem","fontWeight":"300","letterSpacing":"0.05em","lineHeight":"1.1","textTransform":"uppercase"}},"textColor":"white","fontFamily":"serif"} -->
            <h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-serif-font-family" style="font-size:5rem;font-weight:300;letter-spacing:0.05em;line-height:1.1;text-transform:uppercase">
                UNIQUE<br>COCKTAILS
            </h1>
            <!-- /wp:heading -->

            <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"3rem","fontWeight":"300","letterSpacing":"0.08em","lineHeight":"1.2"}},"textColor":"white","fontFamily":"serif"} -->
            <h2 class="wp-block-heading has-text-align-center has-white-color has-text-color has-serif-font-family" style="font-size:3rem;font-weight:300;letter-spacing:0.08em;line-height:1.2">
               FOR ALL TASTES
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem","lineHeight":"1.8"},"spacing":{"margin":{"top":"2rem","bottom":"3rem"}}},"textColor":"white"} -->
            <p class="has-text-align-center has-white-color has-text-color" style="margin-top:2rem;margin-bottom:3rem;font-size:1rem;line-height:1.8">
                Lumina crafts cocktails that elevate your experience beyond the bottle, blending bespoke flavors with artistry and a commitment to making your event effortless and extraordinary.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"gold","textColor":"white","style":{"border":{"radius":"0px"},"typography":{"letterSpacing":"0.1em"}}} -->
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-white-color has-gold-background-color has-text-color has-background wp-element-button" style="border-radius:0px;letter-spacing:0.1em">BOOK THE BAR</a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
    ',
);
