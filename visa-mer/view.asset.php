<?php
// No build step: tell WordPress that view.js imports @wordpress/interactivity,
// so the import map on the page can resolve it.
return array(
	'dependencies' => array( '@wordpress/interactivity' ),
	'version'      => '0.1.0',
);
