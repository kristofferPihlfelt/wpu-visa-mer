( function ( wp ) {
	var el = wp.element.createElement;
	var useBlockProps = wp.blockEditor.useBlockProps;
	var RichText = wp.blockEditor.RichText;
	var TextControl = wp.components.TextControl;

	wp.blocks.registerBlockType( 'wpu/visa-mer', {
		edit: function ( props ) {
			var a = props.attributes;
			var bp = useBlockProps( { className: 'wpu-visa-mer' } );
			return el(
				'div',
				bp,
				el( TextControl, {
					label: 'Rubrik (syns alltid)',
					value: a.rubrik,
					onChange: function ( v ) { props.setAttributes( { rubrik: v } ); },
				} ),
				el( RichText, {
					tagName: 'p',
					className: 'wpu-visa-mer__text',
					placeholder: 'Texten som är hopfälld tills besökaren klickar …',
					value: a.text,
					onChange: function ( v ) { props.setAttributes( { text: v } ); },
				} )
			);
		},
		// Dynamic block: the front end is rendered by render.php.
		save: function () { return null; },
	} );
} )( window.wp );
