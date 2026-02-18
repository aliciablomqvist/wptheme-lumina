<?php
return array(
    'title' => 'Instagram Feed',
    'description' => 'Social media gallery grid',
    'categories' => array('lumina'),
    'content' => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"beige","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-beige-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:6rem;padding-right:0;padding-bottom:6rem;padding-left:0">
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3rem","fontWeight":"300","letterSpacing":"0.05em"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
    <h2 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:1rem;font-size:3rem;font-weight:300;letter-spacing:0.05em">
        FOLLOW @LUMINADRINKS
    </h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"4rem"}}},"textColor":"charcoal"} -->
    <p class="has-text-align-center has-charcoal-color has-text-color" style="margin-bottom:4rem">
        See what we\'re crafting daily
    </p>
    <!-- /wp:paragraph -->

    <!-- wp:gallery {"columns":6,"linkTo":"none","sizeSlug":"medium","className":"lumina-instagram-grid"} -->
    <figure class="wp-block-gallery has-nested-images columns-6 is-cropped lumina-instagram-grid">
        <!-- wp:image {"sizeSlug":"medium"} -->
        <figure class="wp-block-image size-medium">
            <img src="" alt="Instagram post 1"/>
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"sizeSlug":"medium"} -->
        <figure class="wp-block-image size-medium">
            <img src="" alt="Instagram post 2"/>
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"sizeSlug":"medium"} -->
        <figure class="wp-block-image size-medium">
            <img src="" alt="Instagram post 3"/>
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"sizeSlug":"medium"} -->
        <figure class="wp-block-image size-medium">
            <img src="" alt="Instagram post 4"/>
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"sizeSlug":"medium"} -->
        <figure class="wp-block-image size-medium">
            <img src="" alt="Instagram post 5"/>
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"sizeSlug":"medium"} -->
        <figure class="wp-block-image size-medium">
            <img src="" alt="Instagram post 6"/>
        </figure>
        <!-- /wp:image -->
    </figure>
    <!-- /wp:gallery -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"3rem"}}}} -->
    <div class="wp-block-buttons" style="margin-top:3rem">
        <!-- wp:button {"backgroundColor":"charcoal","textColor":"white","style":{"border":{"radius":"0px"}}} -->
        <div class="wp-block-button">
            <a class="wp-block-button__link has-white-color has-charcoal-background-color has-text-color has-background wp-element-button" href="https:
                FOLLOW US ON INSTAGRAM
            </a>
        </div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->
    ',
);
