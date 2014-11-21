<?php
/**
*
* reimg [Dutch]
*
* @package language
* @copyright (c) 2011 DavidIQ.com
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// NOTE TO TRANSLATORS:  Text in parenthesis refers to keys on the keyboard
$lang = array_merge($lang, array(
	'LOADING_TEXT'					=> 'Laden...',
	'LOADING_TITLE'					=> 'Klik om te annuleren',
	'FOCUS_TITLE'					=> 'Klik om te vergroten',
	'FULL_EXPAND_TITLE'				=> 'Uitbreiden naar ware grootte (f)',
	'CREDITS_TEXT'					=> 'Mogelijk gemaakt door <em>Highslide JS</em>',
	'CREDITS_TITLE'					=> 'Ga naar de homepage van Highslide JS',
	'PREVIOUS_TEXT'					=> 'Vorige',
	'NEXT_TEXT'						=> 'Volgende',
	'MOVE_TEXT'						=> 'Verplaatsen',
	'CLOSE_TEXT'					=> 'Sluiten',
	'CLOSE_TITLE'					=> 'Sluiten (esc)',
	'RESIZE_TITLE' 					=> 'Resize',
	'PLAY_TEXT' 					=> 'Start',
	'PLAY_TITLE' 					=> 'Start slideshow (spatiebalk)',
	'PAUSE_TEXT' 					=> 'Pauze',
	'PAUSE_TITLE' 					=> 'Pauze slideshow (spatiebalk)',
	'PREVIOUS_TITLE' 				=> 'Vorige (pijltje links)',
	'NEXT_TITLE' 					=> 'Volgende (pijltje rechts)',
	'MOVE_TITLE' 					=> 'Verplaatsen',
	'IMAGE_NUMBER' 					=> 'Afbeelding %1 van %2',
	'RESTORE_TITLE' 				=> 'Klik om de afbeelding te sluiten, klik en sleep om te verplaatsen. Gebruik de pijltjes voor vorige en volgende.',
	
	'IMG_ICON_REIMG_LOADING'		=> 'Laden',
	'IMG_ICON_REIMG_ZOOM_IN'		=> 'Inzoomen',
	'IMG_ICON_REIMG_ZOOM_OUT'		=> 'Uitzoomen',
	
	'REIMG_ZOOM_IN'					=> 'Inzoomen (Afmeting op volledige grootte: %1$d x %2$d)',
	'REIMG_ZOOM_OUT'				=> 'Uitzoomen',
));
