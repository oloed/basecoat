<?php

$content	= new Content();

// Check if there is a decalared route template
if ( isset(Config::$routes[Core::$current_route]['template']) ) {
	$tpl_file		= Config::$routes[Core::$current_route]['template'];
	
} else {
	$tpl_file		= PATH_TEMPLATES . 'static/'.Core::$current_route.'.html';
	
}
$tpl				= file_get_contents($tpl_file);

$content->parseBlocks($tpl);

// Add route content to page
$content->addToPage();
unset($content);
