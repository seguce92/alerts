<?php
    
return [
	
	// Set icon to true to use the default icon for the selected style/type, false for no icon, or a string for your own icon class.
	'icon'			=>	true,

	//What styling classes to use. (Can be either "brighttheme", "jqueryui", "bootstrap2", "bootstrap3", "fontawesome", or a custom style object. See the source in the end of pnotify.js for the properties in a style object.)
	'styling'		=>	'bootstrap3',

	// Delay in milliseconds before the notice is removed.
	'delay'			=>	'8000',

	// Whether to escape the content of the text. (Not allow HTML.)
	'text_escape'	=>	false,

	// Display a drop shadow.
	'shadow'		=>	false,

	// Opacity of the notice.
	'opacity'		=>	1,

	//notification type [desktop, normal]
	'desktop'		=>	false,

];