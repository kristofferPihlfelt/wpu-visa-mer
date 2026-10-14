import { store, getContext } from '@wordpress/interactivity';

store( 'wpu/visa-mer', {
	actions: {
		toggle() {
			// Context is local to this block instance, so two blocks never affect each other.
			const context = getContext();
			context.isOpen = ! context.isOpen;
		},
	},
} );
