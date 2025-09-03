<?php
// Block settings.
$anchor      = !empty($block['anchor']) ? 'id="' . esc_attr($block['anchor']) . '"' : '';
// Get ACF field.
$rich_text = get_field('rich_text');

// Preview mode fallback (optional but good for clarity in editor).
if (isset($block['example']) && $block['example']) {
    $rich_text = $rich_text ?: 'This is a preview of the hero text block.';
}
?>
<div <?php echo get_block_wrapper_attributes(); ?>>

<div class="rich_text" <?php echo $anchor; ?>>
    <div class="container">
        <div class="rich_text_main">
            <?php if ($rich_text): ?>
            <?php echo wp_kses_post($rich_text); ?>
            <?php else: ?>
            <p style="opacity: 0.5;">No hero text added yet.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

</div>