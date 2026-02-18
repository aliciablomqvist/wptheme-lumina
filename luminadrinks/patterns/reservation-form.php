<?php
return array(
    'title' => 'Reservation Form',
    'description' => 'Elegant booking form with date/time',
    'categories' => array('lumina'),
    'content' => '
<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"5%","right":"5%"}}},"backgroundColor":"beige","layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group has-beige-background-color has-background" style="padding-top:8rem;padding-right:5%;padding-bottom:8rem;padding-left:5%">
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"3.5rem","fontWeight":"300","letterSpacing":"0.05em"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"charcoal","fontFamily":"serif"} -->
    <h2 class="wp-block-heading has-text-align-center has-charcoal-color has-text-color has-serif-font-family" style="margin-bottom:1rem;font-size:3.5rem;font-weight:300;letter-spacing:0.05em">
        RESERVE YOUR TABLE
    </h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"4rem"}}},"textColor":"charcoal"} -->
    <p class="has-text-align-center has-charcoal-color has-text-color" style="margin-bottom:4rem">
        Experience curated cocktails in an elegant setting
    </p>
    <!-- /wp:paragraph -->

    <!-- wp:html -->
    <form class="lumina-reservation-form" style="max-width: 600px; margin: 0 auto;">
        <div style="margin-bottom: 2rem;">
            <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase; color: #2C2C2C;">NAME</label>
            <input type="text" required style="width: 100%; padding: 1rem; border: 1px solid #C9A961; background: #FFFFFF; font-size: 1rem;">
        </div>
        
        <div style="margin-bottom: 2rem;">
            <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase; color: #2C2C2C;">EMAIL</label>
            <input type="email" required style="width: 100%; padding: 1rem; border: 1px solid #C9A961; background: #FFFFFF; font-size: 1rem;">
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem;">
            <div>
                <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase; color: #2C2C2C;">DATE</label>
                <input type="date" required style="width: 100%; padding: 1rem; border: 1px solid #C9A961; background: #FFFFFF; font-size: 1rem;">
            </div>
            <div>
                <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase; color: #2C2C2C;">TIME</label>
                <select required style="width: 100%; padding: 1rem; border: 1px solid #C9A961; background: #FFFFFF; font-size: 1rem;">
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
            <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase; color: #2C2C2C;">GUESTS</label>
            <select required style="width: 100%; padding: 1rem; border: 1px solid #C9A961; background: #FFFFFF; font-size: 1rem;">
                <option>2 Guests</option>
                <option>4 Guests</option>
                <option>6 Guests</option>
                <option>8+ Guests</option>
            </select>
        </div>
        
        <div style="margin-bottom: 2rem;">
            <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase; color: #2C2C2C;">SPECIAL REQUESTS</label>
            <textarea rows="4" style="width: 100%; padding: 1rem; border: 1px solid #C9A961; background: #FFFFFF; font-size: 1rem;"></textarea>
        </div>
        
        <button type="submit" style="width: 100%; padding: 1.2rem 2rem; background: #2C2C2C; color: #FFFFFF; border: none; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase; cursor: pointer; transition: background 0.3s ease;">RESERVE NOW</button>
    </form>
    <!-- /wp:html -->
</div>
<!-- /wp:group -->
    ',
);
