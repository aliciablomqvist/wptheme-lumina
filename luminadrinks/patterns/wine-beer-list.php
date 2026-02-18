<?php
return array(
    'title' => 'Wine & Beer List',
    'description' => 'Categorized beverage menu',
    'categories' => array('lumina'),
    'content' => '
<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"5%","right":"5%"}}},"backgroundColor":"cream","layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-group has-cream-background-color has-background" style="padding-top:8rem;padding-right:5%;padding-bottom:8rem;padding-left:5%">
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3.5rem","fontWeight":"300","letterSpacing":"0.05em"},"spacing":{"margin":{"bottom":"6rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
    <h2 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:6rem;font-size:3.5rem;font-weight:300;letter-spacing:0.05em">
        WINE & BEER SELECTION
    </h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"6rem"},"margin":{"bottom":"5rem"}}}} -->
    <div class="wp-block-columns" style="margin-bottom:5rem">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"2rem","fontWeight":"300","letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"3rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
            <h3 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:3rem;font-size:2rem;font-weight:300;letter-spacing:0.05em;text-transform:uppercase">
                Red Wine
            </h3>
            <!-- /wp:heading -->

            <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-bottom:2rem">
                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.3rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
                <h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.3rem;font-weight:400">
                    Cabernet Sauvignon
                </h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"charcoal"} -->
                <p class="has-charcoal-color has-text-color" style="font-size:0.9rem">
                    Napa Valley, 2020 — Glass $16 / Bottle $64
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-bottom:2rem">
                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.3rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
                <h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.3rem;font-weight:400">
                    Pinot Noir
                </h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"charcoal"} -->
                <p class="has-charcoal-color has-text-color" style="font-size:0.9rem">
                    Willamette Valley, 2021 — Glass $14 / Bottle $56
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"2rem","fontWeight":"300","letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"3rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
            <h3 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:3rem;font-size:2rem;font-weight:300;letter-spacing:0.05em;text-transform:uppercase">
                White Wine
            </h3>
            <!-- /wp:heading -->

            <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-bottom:2rem">
                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.3rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
                <h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.3rem;font-weight:400">
                    Chardonnay
                </h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"charcoal"} -->
                <p class="has-charcoal-color has-text-color" style="font-size:0.9rem">
                    Sonoma Coast, 2022 — Glass $15 / Bottle $60
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-bottom:2rem">
                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.3rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
                <h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.3rem;font-weight:400">
                    Sauvignon Blanc
                </h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"charcoal"} -->
                <p class="has-charcoal-color has-text-color" style="font-size:0.9rem">
                    Marlborough, 2023 — Glass $13 / Bottle $52
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:separator {"style":{"spacing":{"margin":{"top":"4rem","bottom":"4rem"}}},"backgroundColor":"gold"} -->
    <hr class="wp-block-separator has-text-color has-gold-color has-alpha-channel-opacity has-gold-background-color has-background" style="margin-top:4rem;margin-bottom:4rem"/>
    <!-- /wp:separator -->

    <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"2rem","fontWeight":"300","letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"3rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
    <h3 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:3rem;font-size:2rem;font-weight:300;letter-spacing:0.05em;text-transform:uppercase">
        Craft Beer
    </h3>
    <!-- /wp:heading -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"4rem"}}}} -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-bottom:2rem">
                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.3rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
                <h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.3rem;font-weight:400">
                    West Coast IPA
                </h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"charcoal"} -->
                <p class="has-charcoal-color has-text-color" style="font-size:0.9rem">
                    Local Brewery — Draft $8 / Bottle $10
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-bottom:2rem">
                <!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.3rem","fontWeight":"400"}},"textColor":"charcoal","fontFamily":"serif"} -->
                <h4 class="wp-block-heading has-charcoal-color has-text-color has-serif-font-family" style="font-size:1.3rem;font-weight:400">
                    Belgian Blonde
                </h4>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"charcoal"} -->
                <p class="has-charcoal-color has-text-color" style="font-size:0.9rem">
                    Imported — Bottle $12
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->
    ',
);
