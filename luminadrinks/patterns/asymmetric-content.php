<?php
return array(
    'title' => 'Asymmetric Text + Image',
    'description' => 'Text on left, image on right with offset',
    'categories' => array('lumina'),
    'content' => '
<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"5%","right":"5%"}}},"backgroundColor":"cream","layout":{"type":"constrained","contentSize":"1400px"}} -->
<div class="wp-block-group has-cream-background-color has-background" style="padding-top:8rem;padding-right:5%;padding-bottom:8rem;padding-left:5%">
    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"6rem"}}}} -->
    <div class="wp-block-columns are-vertically-aligned-center">
        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
            <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"3.5rem","fontWeight":"300","lineHeight":"1.1"}},"textColor":"charcoal","fontFamily":"serif"} -->
            <h2 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:3.5rem;font-weight:300;line-height:1.1">
                We Bring More<br>Than Just the Drinks,
            </h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.8"},"spacing":{"margin":{"top":"2rem","bottom":"2rem"}}},"textColor":"charcoal"} -->
            <p class="has-charcoal-color has-text-color" style="margin-top:2rem;margin-bottom:2rem;font-size:1.1rem;line-height:1.8">
               At Lumina, we believe your celebration should be a reflection of your culture, your vision, and your values. That’s why we go beyond the pour to craft an experience you’ll remember, working with you to bring your vision to life, infusing your event with style, expertise.
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"3rem","fontWeight":"300","lineHeight":"1.1"},"spacing":{"margin":{"top":"3rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
            <h2 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="margin-top:3rem;font-size:3rem;font-weight:300;line-height:1.1">
                We Bring People<br>together.
            </h2>
            <!-- /wp:heading -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"3rem"}}}} -->
            <div class="wp-block-buttons" style="margin-top:3rem">
                <!-- wp:button {"backgroundColor":"charcoal","textColor":"white","style":{"border":{"radius":"0px"}}} -->
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-white-color has-charcoal-background-color has-text-color has-background wp-element-button" style="border-radius:0px">VIEW THE MENU</a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large">
                <img src="" alt="Cocktail craftsmanship"/>
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
    ',
);
