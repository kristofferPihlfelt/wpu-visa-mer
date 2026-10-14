<?php
/**
 * Render: wpu/visa-mer. Everything the visitor sees is produced here;
 * view.js only flips context.isOpen.
 *
 * @var array $attributes Block attributes.
 */

$attributes = $attributes ?? array();
$rubrik     = $attributes['rubrik'] ?? '';
$text       = $attributes['text'] ?? '';

// Global state is shared by every block instance on the page. Here it only holds the button labels.
wp_interactivity_state(
	'wpu/visa-mer',
	array(
		'visaText' => __( 'Visa mer', 'wpu-visa-mer' ),
		'doljText' => __( 'Visa mindre', 'wpu-visa-mer' ),
	)
);

$wrapper = get_block_wrapper_attributes(
	array(
		'class'               => 'wpu-visa-mer',
		'data-wp-interactive' => 'wpu/visa-mer',
	)
);
?>
<div <?php echo $wrapper; // phpcs:ignore WordPress.Security.EscapeOutput ?> <?php echo wp_interactivity_data_wp_context( array( 'isOpen' => false ) ); // phpcs:ignore WordPress.Security.EscapeOutput ?>>
	<?php if ( '' !== $rubrik ) : ?>
		<p class="wpu-visa-mer__rubrik"><?php echo esc_html( $rubrik ); ?></p>
	<?php endif; ?>
	<button
		type="button"
		class="wpu-visa-mer__knapp"
		data-wp-on--click="actions.toggle"
		data-wp-bind--aria-expanded="context.isOpen"
		data-wp-class--ar-oppen="context.isOpen"
	>
		<span data-wp-bind--hidden="context.isOpen" data-wp-text="state.visaText"></span>
		<span data-wp-bind--hidden="!context.isOpen" data-wp-text="state.doljText"></span>
	</button>
	<div class="wpu-visa-mer__text" data-wp-bind--hidden="!context.isOpen">
		<?php echo wp_kses_post( $text ); ?>
	</div>
</div>
