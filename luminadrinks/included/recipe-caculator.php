<?php
?>
<div class="lumina-recipe-calculator" style="max-width: 600px; margin: 3rem auto; padding: 3rem; background: #F5F1E8; border: 2px solid #C9A961;">
    <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 2.5rem; font-weight: 300; text-align: center; margin-bottom: 2rem; color: #2C2C2C;">
        <?php echo esc_html($atts['name']); ?> Recipe
    </h3>

    <div style="margin-bottom: 2rem; text-align: center;">
        <label style="display: block; margin-bottom: 1rem; font-size: 0.9rem; letter-spacing: 0.1em; text-transform: uppercase;">
            SERVINGS:
        </label>
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
        <p style="margin-top: 1rem; line-height: 1.8;">
            Muddle mint with lime juice and syrup. Add rum and ice. Top with soda water. Garnish with mint sprig.
        </p>
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