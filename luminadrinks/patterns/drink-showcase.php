<?php
return array(
    'title' => 'Drink Showcase Grid',
    'description' => '3-column drink presentation',
    'categories' => array('lumina'),
    'content' => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"beige","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group alignfull has-beige-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"0px"}}}} -->
    <div class="wp-block-columns">
        <!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large">
                <img src="" alt="Signature cocktail 1"/>
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large">
                <img src="" alt="Signature cocktail 2"/>
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"33.33%"} -->
        <div class="wp-block-column" style="flex-basis:33.33%">
            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image size-large">
                <img src="" alt="Signature cocktail 3"/>
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
